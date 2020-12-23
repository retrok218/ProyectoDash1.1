<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SidebarController extends Controller
{
    public function index()
    {

      $tickte = DB::table('ticket')->count();
      return view('welcome')
      ->with('ticket', $tickte)
    ;}
}
