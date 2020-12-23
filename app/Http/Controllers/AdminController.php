<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function index()
    {
      $tickte = DB::table('ticket')->count();
      $asignado =DB::table('ticket')->where('ticket_state_id','=', 12)->count();
      $atendido = DB::table('ticket')->where('ticket_state_id','=', 13)->count();
      $espinformacion = DB::table('ticket')->where('ticket_state_id','=', 15)->count();
      $rticket = DB::table('ticket')->where('ticket_state_id','=', 2)->count();
      //$prueba = DB:: table('prueba')->count();
      $pendienteatc = DB:: table('ticket')->where('ticket_state_id','=',7)->count();
      $new = DB:: table('ticket')->where('ticket_state_id','=',1)->count();
      $cerradocinEX = DB:: table('ticket')->where('ticket_state_id','=',3)->count();
      $open = DB:: table('ticket')->where('ticket_state_id','=',4)->count();
      $removed = DB:: table('ticket')->where('ticket_state_id','=',5)->count();
      $pendienteRE = DB:: table('ticket')->where('ticket_state_id','=',6)->count();
      $pendienteAC = DB:: table('ticket')->where('ticket_state_id','=',8)->count();
      $merged = DB:: table('ticket')->where('ticket_state_id','=',9)->count();
      $cerradoPT = DB:: table('ticket')->where('ticket_state_id','=',10)->count();
      $notificadoalU = DB:: table('ticket')->where('ticket_state_id','=',11)->count();
      $CerradoPT2 = DB:: table('ticket')->where('ticket_state_id','=',14)->count();
      $merged = DB:: table('ticket')->where('ticket_state_id','=',16)->count();
      $Documentofirmado = DB:: table('ticket')->where('ticket_state_id','=',17)->count();
      $Entramite = DB:: table('ticket')->where('ticket_state_id','=',18)->count();
      $FaltaDocumentar = DB:: table('ticket')->where('ticket_state_id','=',19)->count();
      $FalteActaRES = DB:: table('ticket')->where('ticket_state_id','=',21)->count();
      $SolicitudToner = DB:: table('ticket')->where('service_id','=',79)->count();
      $impresorasintt = DB:: table('ticket')->where('service_id','=',78)->count();
      $progresbar  = ($rticket*100) / $tickte ;
      $prueba= rand(1,800);

      



      return view('admin')
      ->with('ticket', $tickte)
      ->with('asignado',$asignado)
      ->with('atendido',$atendido)
      ->with('espinformacion',$espinformacion)
      ->with('rticket', $rticket)
      //->with('pendiente', $pendiente)
      //->with('abierto' , $abierto)
      //seleccionados
      ->with('pendienteatc',$pendienteatc)
      ->with('new',$new)
      ->with('cerradocinEX',$cerradocinEX)
      ->with('open',$open)
      ->with('removed',$removed)
      ->with('pendienteRE',$pendienteRE)
      ->with('pendienteAC',$pendienteAC)
      ->with('merged',$merged)
      ->with('cerradoPT',$cerradoPT)
      ->with('notificadoalU',$notificadoalU)
      ->with('CerradoPT2',$CerradoPT2)
      ->with('merged',$merged)
      ->with('Documentofirmado',$Documentofirmado)
      ->with('Entramite',$Entramite)
      ->with('FaltaDocumentar',$FaltaDocumentar)
      ->with('FalteActaRES',$FalteActaRES)
      //->with('prueba', $prueba)
      ->with('progreso',$progresbar)
      ->with('solicitudroner',$SolicitudToner)
      ->with('impresorasintt',$impresorasintt)
      ->with('prueba',$prueba)
      ;
    }

      // public function index(){
      //   $usuarios = DB::table('ticket2s')->get();
      //     foreach ($usuarios as $usuarios) {
      //       var_dump($usuarios->name);
      //
      //       return view('admin')->whit('usuario',$usuarios);
      //     }
      // }

}
