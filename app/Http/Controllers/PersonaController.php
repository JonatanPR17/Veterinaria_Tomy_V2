<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersona;
use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //Esta es la funcion para la ruta donde tendremos a todas las persona
    public function index()
    {
        $personas = Persona::OrderBy('id', 'desc')->paginate();

        return view('persona.index', compact('personas'));
    }

    //Esta es la funcion para la ruta donde crearemos a todas las persona
    public function create()
    {
        return view('persona.create');
    }

    public function store(StorePersona $request)
    {

        /*$persona = new Persona();

        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->direccion = $request->direccion;
        $persona->usuario = $request->usuario;
        $persona->contraseña = $request->contraseña;

        $persona->save();*/

        $persona = Persona::create($request->all());

        return redirect()->route('personas.show',$persona);
    }

    //
    public function show(Persona $persona)
    {

        return view('persona.show', compact('persona'));
    }

    public function edit (Persona $persona)
    {
        return view ('persona.edit', compact ('persona'));
    }

    public function update (Request $request, Persona $persona)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'fecha_nacimiento' => 'required',
            'slug' => 'required|unique:personas,slug,' . $persona->id,
            'direccion' => 'required',
            'usuario' => 'required',
            'contraseña' => 'required'
        ]);



        /*$persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->direccion = $request->direccion;
        $persona->usuario = $request->usuario;
        $persona->contraseña = $request->contraseña;

        $persona->save();*/

        $persona ->update($request->all());

        return redirect()->route('personas.show',$persona);
    }

    public function destroy (Persona $persona){
        $persona->delete();

        return redirect()->route('personas.index');

    }
}
