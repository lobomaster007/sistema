<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::all();
        return view('person', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
         return view('create-person');
 //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'direccion' => 'required|max:255',
            'ci' => 'required|max:255',
            'pais' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'correo_electronico' => 'required|email|unique:people|max:255',
            'numero_telefono' => 'required|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $person = new Person();
        $person->nombre = $request->input('nombre');
        $person->apellido = $request->input('apellido');
        $person->direccion = $request->input('direccion');
        $person->ci = $request->input('ci');
        $person->pais = $request->input('pais');
        $person->ciudad = $request->input('ciudad');
        $person->correo_electronico = $request->input('correo_electronico');
        $person->numero_telefono = $request->input('numero_telefono');

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = time() . '_' . $request->file('foto')->getClientOriginalName();
            $destinationPath = public_path('/fotos');
            $image->move($destinationPath, $name);
            $person->foto = $name;
        }

        $person->save();

        return redirect()->route('person.create')->with('success', 'Persona creada satisfactoriamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
