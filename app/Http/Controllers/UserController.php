<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      $usuarios = DB::table('users')->count();
      $vgonzales = DB::table('ticket')->where('user_id','=',57 )->count();
      $xzavalet = DB::table('ticket')->where('user_id','=', 160)->count();

      $ususariosp = DB::table('ticket')->get()
        
      ;

      return view('user')
      ->with('users', $usuarios)
      ->with('vgonzales',$vgonzales)
      ->with('xzavalet',$xzavalet)
      ->with('usuariosp',$ususariosp)

      ;
    }




}
