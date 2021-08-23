<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = Animal::all();
        
        return view('animal.animal', ['animal' => $animal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'codigo'=>['required', 'min:5','max:5'],
            'data_nasc'=>['required'],
            'sexo'=>['required'],
            'peso'=>['required'],
            'data_pesag'=>['required'],
        ]);
                
        
        $animal = Animal::create($request->all());
        
        if ($animal) {
            return redirect()->route('animal.create')->with('msg', "O animal foi $animal->codigo Cadastrado.");
        }else{

            return redirect()->route('animal.create')->with('msg', "O animal foi $animal->codigo Cadastrado.");
        }
    }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('animal.show', ['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        
        
        return view('animal.edit', ['animal' => $animal]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $animal->update($request->all());

        $msg = "O animal {$animal->nome} alterado com sucesso";

        return redirect()->route("animal.index")->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal){


        $nome = $animal->nome;
        if ($animal->delete()) {
            \Session::flash('msg', "O animal {$nome} foi removido");
        } else {
            \Session::flash('msg', "O animal {$nome} não foi removido");
        }
        return redirect()->route("animal.index");
    
    }
    public function search(Request $request) {
        if ($request->data_nasc) {
            $animal = (new Animal())->buscaPorData($request->data_nasc);

            
            
        } else {
            $animal = Animal::all();
        }
        
        return view('animal.animal', ['animal' => $animal]);
    
        
    }
    }