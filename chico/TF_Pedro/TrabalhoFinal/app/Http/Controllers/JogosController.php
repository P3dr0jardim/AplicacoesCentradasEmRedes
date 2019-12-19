<?php

namespace App\Http\Controllers;

use App\Jogo;
use App\Plataforma;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jogos=Jogo::all()->sortByDesc("pontuacao");
        return view("public.ver-jogos",compact("jogos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $plataformas = Plataforma::all();
        return view("private.create-jogo",compact("plataformas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        request()->validate([
            "nome"=>"required|min:1",
            "preco"=>"required|min:0",
            "pontuacao"=>"required|numeric|min:0|max:100",
        ]);
        $jogo = new Jogo;
        $jogo->nome=request("nome");
        $jogo->preco=request("preco");
        $jogo->pontuacao=request("pontuacao");
        $jogo->imagem=request("imagem");

        $jogo->save();
        $plat = array();
        foreach ($data as $key => $value) {
            if($key!="nome" and $key!="preco" and $key!="pontuacao" and $key!="imagem"){
                array_push($plat, request($key));
            }
        }
        $plataforma = Plataforma::find($plat);
        $jogo->plataformas()->attach($plataforma);

        return redirect("/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jogo= Jogo::findOrFail($id);
        
        return view("public.show",compact("jogo"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jogo = Jogo::findOrFail($id);
        $plataformas = Plataforma::all();
        return view("private.edit-jogo",compact("jogo","plataformas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data = $request->all();
        request()->validate([
            "nome"=>"required|min:1",
            "preco"=>"required|min:0",
            "pontuacao"=>"required|numeric|min:0|max:100",
        ]);
        $jogo = Jogo::findOrFail($id);
        $jogo->update(request(["nome","preco","pontuacao","imagem"]));
        $plataforma = Plataforma::all();
        $jogo->plataformas()->detach($plataforma);
        $plat = array();
        foreach ($data as $key => $value) {
            if($key!="nome" and $key!="preco" and $key!="pontuacao" and $key!="imagem"){
                array_push($plat, request($key));
            }
        }
        $plataforma = Plataforma::find($plat);
        $jogo->plataformas()->attach($plataforma);
        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jogo = Jogo::findOrFail($id);
        $plataforma = Plataforma::all();
        $jogo->plataformas()->detach($plataforma);
        $jogo->delete();
        return redirect("/home");
    }
    
    public function search(Request $request){
        if(request("invert")){
            if(request("pontuacao")){
                $jogos= Jogo::where("nome",'like', '%' . request("nome") . '%')->where("pontuacao",">=",request("pontuacao"))->get()->sortBy("pontuacao");
            }else{
                $jogos= Jogo::where("nome",'like', '%' . request("nome") . '%')->get()->sortBy("pontuacao");
            }
        }else{
            if(request("pontuacao")){
                $jogos= Jogo::where("nome",'like', '%' . request("nome") . '%')->where("pontuacao",">=",request("pontuacao"))->get()->sortByDesc("pontuacao");
            }else{
                $jogos= Jogo::where("nome",'like', '%' . request("nome") . '%')->get()->sortByDesc("pontuacao");
            }
        }
        
        return view("public.ver-jogos",compact("jogos"));
    }
}
