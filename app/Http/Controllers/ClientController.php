<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clients']=Client::paginate(2);
        return view('clients.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
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
        $campos=[
            'srut'=>'required|string|max:14',
            'sdiv'=>'required|string|max:10',
            'sfirstname'=>'required|string|max:50',
            'slastname'=>'required|string|max:50',
            'semail'=>'required|string|max:50',
            'dbirthdate'=>'required|date'
        ];
        //$mensaje=["required"=>'Campo :attribute obligatorio'];
        $mensaje=["required"=>'Campo obligatorio'];

        /*
        Se le envia al metodo validate las variables
        .-$request => Todos los campos que se estan mandando desde el formulario al metodo store
        .-$campos => Los campos que se necesitan Validar
        .-$mensaje => El mensaje que se envia al usuario para advertir que el campos es obligatorio
        */
        $this->validate($request,$campos,$mensaje);

        $datosClients=request()->all();

        $datosClients=request()->except('_token');

        Client::insert($datosClients);

        //return response()->json($datosClients);
        return redirect('clients')->with('Mensaje', 'Cliente Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //findOrfail trae toda la información de la base de datos para ese id
        $client= Client::findOrfail($id);
        //compact, Crea un cojunto de información desde una variable
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         $campos=[
            'srut'=>'required|string|max:14',
            'sdiv'=>'required|string|max:10',
            'sfirstname'=>'required|string|max:50',
            'slastname'=>'required|string|max:50',
            'semail'=>'required|string|max:50',
            'dbirthdate'=>'required|date'
        ];
        //$mensaje=["required"=>'Campo :attribute obligatorio'];
        $mensaje=["required"=>'Campo obligatorio'];

        /*
        Se le envia al metodo validate las variables
        .-$request => Todos los campos que se estan mandando desde el formulario al metodo store
        .-$campos => Los campos que se necesitan Validar
        .-$mensaje => El mensaje que se envia al usuario para advertir que el campos es obligatorio
        */
        $this->validate($request,$campos,$mensaje);

        $datosClients=request()->except(['_token','_method']);

        Client::where('id','=',$id)->update($datosClients);

        //findOrfail trae toda la información de la base de datos para ese id
        //$client= Client::findOrfail($id);
        //compact, Crea un cojunto de información desde una variable
        //return view('clients.edit', compact('client'));
        return redirect('clients')->with('Mensaje', 'Cliente Modificado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Client::destroy($id);

        return redirect('clients')->with('Mensaje', 'Cliente Eliminado con Exito');
    }
}
