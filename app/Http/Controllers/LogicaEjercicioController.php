<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicaEjercicioController extends Controller
{
    //
    public function gestionMatriz(Request $request){

    	$nombre1 = $request->input('nombre1');
    	$nombre2 = $request->input('nombre2');
    	$nombre3 = $request->input('nombre3');
    	$nombre4 = $request->input('nombre4');
    	$nombre5 = $request->input('nombre5');
    	$nombre6 = $request->input('nombre6');

    	

    	$nombres=[];

    	$nombres[]=['Carlos1','Luis1','Jason1','Luz1','Valentina1','Camilo1','Mario1','Steven1','Thomas1','Alejandro1'];
    	$nombres[]=['Carlos2','Luis2','Jason2','Luz2','Valentina2','Camilo2','Mario2','Steven2','Thomas2','Alejandro2'];
    	$nombres[]=['Carlos3','Luis3','Jason3','Luz3','Valentina3','Camilo3','Mario3','Steven3','Thomas3','Alejandro3'];
    	$nombres[]=['Carlos4','Luis4','Jason4','Luz4','Valentina4','Camilo4','Mario4','Steven4','Thomas4','Alejandro4'];
    	$nombres[]=['Carlos5','Luis5','Jason5','Luz5','Valentina5','Camilo5','Mario5','Steven5','Thomas5','Alejandro5'];
    	$nombres[]=['Carlos6','Luis6','Jason6','Luz6','Valentina6','Camilo6','Mario6','Steven6','Thomas6','Alejandro6'];
    	$nombres[]=['Carlos7','Luis7','Jason7','Luz7','Valentina7','Camilo7','Mario7','Steven7','Thomas7','Alejandro7'];
    	$nombres[]=['Carlos8','Luis8','Jason8','Luz8','Valentina8','Camilo8','Mario8','Steven8','Thomas8','Alejandro8'];
    	$nombres[]=['Carlos9','Luis9','Jason9','Luz9','Valentina9','Camilo9','Mario9','Steven9','Thomas9','Alejandro9'];
    	$nombres[]=['Carlos10','Luis10','Jason10','Luz10','Valentina10','Camilo10','Mario10','Steven10','Thomas10','Alejandro10'];

    	foreach ($nombres as $key => $nombre) {
    		foreach ($nombre as $key => $value) {
    			if ($value == $nombre1) {
    				echo "El nombre ",$nombre1," se encuentra en el sistema.","<br>"; 
    			}
    			if ($value == $nombre2) {
    				echo "El nombre ",$nombre2," se encuentra en el sistema.","<br>"; 
    			}
    			if ($value == $nombre3) {
    				echo "El nombre ",$nombre3," se encuentra en el sistema.","<br>"; 
    			}
    			if ($value == $nombre4) {
    				echo "El nombre ",$nombre4," se encuentra en el sistema.","<br>"; 
    			}
    			if ($value == $nombre5) {
    				echo "El nombre ",$nombre5," se encuentra en el sistema.","<br>"; 
    			}
    			if ($value == $nombre6) {
    				echo "El nombre ",$nombre6," se encuentra en el sistema.","<br>"; 
    			}
    		}
    	
    	}
    }
}
