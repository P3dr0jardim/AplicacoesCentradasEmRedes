<?php

namespace App\Http\Controllers;

use App\Plataforma;
use Illuminate\Http\Request;

class PlataformasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plataformas=Plataforma::all();
        return view("public.ver-plataformas",compact("plataformas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("private.create-plataforma");
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
        request()->validate([
            "nome"=>"required|min:1",
        ]);
        $plataforma = new Plataforma;
        $plataforma->nome=request("nome");

        $plataforma->save();
        return redirect("/home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function show(Plataforma $plataforma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $plataforma = Plataforma::findOrFail($id);
        return view("private.edit-plataforma",compact("plataforma"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            "nome"=>"required|min:1",
        ]);
        $plataforma = Plataforma::findOrFail($id);
        $plataforma->update(request(["nome"]));
        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $plataforma = Plataforma::findOrFail($id);
        $plataforma->delete();
        return redirect("/home");
    }
}
