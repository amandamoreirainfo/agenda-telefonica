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
        $user = User::all();

        return view('user.index')->with('user', $user);
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
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->cpf = $request->input('cpf');
        $user->telephone = $request->input('telephone');

        $user->save();

        $user = User::all();
        return view('user.index')->with('user', $user)
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

        $user = User::find($id);

        if($user){

            return view('user.show')->with('user', $user);

        }else{

        return view('user.show')->with('msg', 'Usuário não encontrado!');
        
        }
       
    }

    public function report($id){

        $user = User::find($id);

        if ($user){
        
            return view('user.report')->with('user', $user);

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
        $user = User::find($id);

        if($user){

            return view('user.edit')->with('user', $user);

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
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->cpf = $request->input('cpf');
        $user->telephone = $request->input('telephone');

        $user->save();

        $user = User::all();
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
        $user = User::find($id);

        $user->delete();

        $user = User::all();
        return view('user.index')->with('user', $user)
        ->with('msg', "Usuário excluído com sucesso!");
    }
}
