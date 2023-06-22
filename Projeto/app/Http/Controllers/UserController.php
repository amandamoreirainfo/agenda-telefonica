<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('user.index')->with('user', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('user.create');
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
        $users = new User();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->date_of_birth = $request->input('date_of_birth');
        $users->cpf = $request->input('cpf');
        $users->telephone = $request->input('telephone');

        $users->save();

        $users = User::all();
        return view('user.index')->with('user', $users)
        ->with('msg', 'Usuário cadastrado com sucesso');

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

        $users = User::find($id);

        if($users){

            return view('user.show')->with('user', $users);

        }else{

        return view('user.show')->with('msg', 'Usuário não encontrado!');
        
        }
       
    }

    public function report($id){

        $users = User::find($id);

        if ($users){
        
            return view('user.report')->with('user', $users);

        }else{

            return view('user.report')->with('msg', 'Nenhum relatorio encontrado!');

        }
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
        $users = User::find($id);

        if($users){

            return view('user.edit')->with('user', $users);

        }else{

            return view('user.edit')->with('msg', 'Usuário não encontrado!');

        }
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
        $users = User::find($id);

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->date_of_birth = $request->input('date_of_birth');
        $users->cpf = $request->input('cpf');
        $users->telephone = $request->input('telephone');

        $users->save();

        $users = User::all();
        return view('user.index')->with('user', $user)
        ->with('msg', 'Usuário atualizado com sucesso!');

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
        $users = User::find($id);

        $users->delete();

        $users = User::all();
        return view('user.index')->with('user', $user)
        ->with('msg', "Usuário excluído com sucesso!");
    }
}
