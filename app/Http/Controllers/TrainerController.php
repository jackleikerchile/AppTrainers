<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;
//use Illuminate\HTTP\Str as Str;
class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();

        return view('trainers.index', compact('trainers'));
        //return 'Hola desde el controlador resource';

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //AQUI ESTA ENTRANDO A LA URL TRAINERS/CREATE
    {
        // Aqui esta entrando a la carpeta de resource-->view-->trainers 
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->avatar = $name;
        //$trainer->slug = Str::slug($request->input('name'));
        $trainer->slug = $name;

        $trainer->save();


        return 'Saved'; 
        //return $request->input('name');
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        //$trainer = Trainer::find($id);
        return view('trainers.show', compact('trainer'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        // VAMOS A UTILIZAR LA FUNCION (FILL) PARA ACTUALIZAR LOS DATOS QUE ESTAMOS RECIBIENDO DE TODA LA INFORMACION
        //$trainer->fill($request->all());

        //Va actualizar todos los archivos ecepto el avatar
        $trainer->fill($request->except('avatar'));
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $trainer->save();
        return 'updated';
        //return $request;
        //return $trainer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
