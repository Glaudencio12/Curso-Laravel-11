<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //CRIA UAM FUNÇÃO QUE RETORNA TODOS OS USUÁRIO DO BANCO User
    //APÓS CRIAR A FUNÇÃO, É RETORNADA UMA VIEW, QUE CORRESPONDE AO ARQUIVO INDEX.BLADE.PHP NA PASTA 
    //RESOURCES/VIEWS/ADMIN/USER
    public function index(){
        $user = User::all(); //retorna todos os usuários cadastrados
        // $user = User::first(); retorna o primeiro usuário do banco de dados
        return view('Admin.users.index', compact('user')); //retorna o arquivo index.blade.php
    }
}