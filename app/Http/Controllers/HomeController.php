<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class HomeController extends Controller
{

    private $users;

    public function __construct(){
        $this->users = new User;
    }

    public function index(){
        $contas = $this->users->where('id','<>',1)->count();
        $ativas = $this->users->where('tipo_status_id', 1)->where('id','<>',1)->count();
        return view('home', compact('contas', 'ativas'));
    }
}
