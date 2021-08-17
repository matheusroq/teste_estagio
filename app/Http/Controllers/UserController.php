<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name' => 'required|min:3|max:40',
            'email' => 'email',
            'password' => 'required|min:6|max:40'
        ];
        $feedback = [
            'required' => 'O campo :attribute é obrigatório',
            'email' => 'E-mail inválido',
            'name.min' => 'O campo nome deve ter entre 3 e 40 caracteres',
            'name.max' => 'O campo nome deve ter entre 3 e 40 caracteres',
            'password.min' => 'O campo senha deve ter entre 6 e 40 caracteres',
            'password.max' => 'O campo nome deve ter entre 3 e 40 caracteres',
        ];
        $request->validate($rules, $feedback);
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = md5($request->password);
        $users->save();
        return redirect()->route('users.index');
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
