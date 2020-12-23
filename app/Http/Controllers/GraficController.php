<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GraficController extends Controller
{
  public function index(){
    $tickte = DB::table('ticket')->count();
    $rticket = DB::table('ticket')->where('ticket_state_id','=', 2)->count();
    $asignado =DB::table('ticket')->where('ticket_state_id','=', 12)->count();
    $cerradoPT = DB:: table('ticket')->where('ticket_state_id','=',10)->count();

    return view('layaut.grafica')
    ->with('ticket', $tickte)
    ->with('rticket', $rticket)
    ->with('asignado',$asignado)
    ->with('cerradoPT',$cerradoPT)
    ;}
}
