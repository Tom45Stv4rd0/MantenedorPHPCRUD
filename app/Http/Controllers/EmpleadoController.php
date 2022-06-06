<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['empleados']=Empleado::paginate(20);
        return view('usuario.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $campos=[            
            'mail'=>'required|email', 
            'password'=>'required|min:8|max:12',
            'rut'=>'required|max:10',
        
            
        ];
        $mensaje=[
            'required'=>'el :attribute es requerido',
            'email.required'=>'el mail es requerido',
            'password.required'=>'la contraseña no debe ser menor a 8 y mayor a 12',
            'rut.required'=>'el rut es requerido en un formato 12345678-9',
            
        ];
        $this->validate($request, $campos,$mensaje);

        $datosEmpleado = request()->except('_token');
        Empleado::insert($datosEmpleado);        
        return redirect ('usuario')->with('mensaje','Empleado Agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $empleado=Empleado::findOrFail($id);
        return view('usuario.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $campos=[            
            'mail'=>'required|email', 
            'password'=>'required|min:8|max:12',
            'rut'=>'required|max:10',
        
            
        ];
        $mensaje=[
            'required'=>'el :attribute es requerido',
            'email.required'=>'el mail es requerido',
            'password.required'=>'la contraseña no debe ser menor a 8 y mayor a 12',
            'rut.required'=>'el rut es requerido en un formato 12345678-9',
            
        ];
        $this->validate($request, $campos,$mensaje);

        $datosEmpleado = request()->except(['_token','_method']);
        Empleado::where('id','=',$id)->update($datosEmpleado);
        $empleado=Empleado::findOrFail($id);        
        return redirect ('usuario')->with('mensaje','Usuario Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Empleado::destroy($id);
        return redirect('usuario');
        return redirect ('usuario')->with('mensaje','Usuario Borrado');
    }
}
