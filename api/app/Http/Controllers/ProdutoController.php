<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = ['VideoGame','Geladeira','Notebook','Computador'];

        return response()->json($produtos, 200);
    }

    public function getProdutoById($id)
    {
        $produtos = ['VideoGame','Rádio','Geladeira','Notebook','Computador'];

        if(isset($produtos[$id]))
        {
            return response()->json([$id => $produtos[$id]], 200);
        }
        else
        {
            return response()->json([], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->nome))
        {
            return response()->json(" $request->nome Cadastrado com sucesso", 200);
        }
        else
        {
            return response()->json("Erro ao cadastrar o produto", 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(strlen($id) > 0)
        {
            return response()->json("Produto removido com sucesso", 200);
        }
        else
        {
            return response()->json("Erro ao remover o produto", 500);
        }
    }
}
