<?php

namespace App\Http\Controllers;

use App\cliente;
use App\Http\Requests\clienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class clienteController extends Controller
{

    public function getNovo(){
        return view("cliente.novo");
    }

    public function postNovo(clienteRequest $request){
        try {
            cliente::updateOrcreate(["id" => ($request->exists("id") ? $request->get("id") : -1)],$request->except("_token"));
            return Redirect::back()->with("success", "Cliente adicionado com sucesso!");
        } catch (\Exception $e){
            return Redirect::back()->withErros("não foi possível adicionar um novo cliente");
        }
    }

    public function getListar(){

        $clientes = Cliente::all();
        return view("cliente.listar", compact("clientes"));
    }

    public function getExcluir($id){


        try {
            $cliente = Cliente::find($id);
            $cliente->delete();
            return Redirect::back()->with("success", "Cliente excluído com sucesso");
        } catch (\Exception $e){
            return Redirect::back()->withErros("não foi possível excluir cliente");
        }
    }
    public function getEditar($id){

        try {
            $cliente = Cliente::find($id);

            return view("cliente.novo", compact("cliente"));
        } catch (\Exception $e){
            return Redirect::back()->withErros("não foi possível editar o cliente");
        }
    }

}
