<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $clients = Client::paginate(20);
        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $rules = [
            'name' => 'required|min:6|max:40',
            'last_name' => 'required',
            'email' => 'email',
            'cpf' => 'required'
        ];
        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'email' => 'E-mail inválido',
            'name.min' => 'O campo nome deve ter entre 3 e 40 caracteres',
            'name.max' => 'O campo nome deve ter entre 3 e 40 caracteres',
        ];
        $request->validate($rules, $feedback);
        $client = new Client();
        $client->name = $request->name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->cpf = $request->cpf;
        $client->save();
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $rules = [
            'name' => 'required|min:6|max:40',
            'last_name' => 'required',
            'email' => 'email',
        ];
        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'email' => 'E-mail inválido',
            'name.min' => 'O campo nome deve ter entre 3 e 40 caracteres',
            'name.max' => 'O campo nome deve ter entre 3 e 40 caracteres',
        ];
        $request->validate($rules, $feedback);
        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
