<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio2 extends Controller
{
    //
    public function MatrizEjercicio2(Request $request){

    	$nombre = $request->input('nombre');
    	$apellido = $request->input('apellido');
    	$edad = $request->input('edad');
    	$telefono = $request->input('telefono');

    	$contador1=0;
    	$contador2=0;
    	$contador3=0;
    	$contador4=0;
    	$bandera=0;

    	$nombres=[];

    	$nombres[]=['Carlos1','Luis1','Jason1','Luz1','Valentina1','Camilo1','Mario1','Steven1','Thomas1','Alejandro1'];
    	$nombres[]=['Carlos2','Luis2','Jason2','Luz2','Valentina2','Camilo2','Mario2','Steven2','Thomas2','Alejandro2'];
    	$nombres[]=['Carlos3','Luis3','Jason3','Luz3','Valentina3','Camilo3','Mario3','Steven3','Thomas3','Alejandro3'];

    	$apellidos=[];

    	$apellidos[]=['Martinez1','Rodriguez1','Pedraza1','Velasquez1','Piñeros1','Morales1','Flechas1','Mora1','Enriquez1','Niño1'];
    	$apellidos[]=['Martinez2','Rodriguez2','Pedraza2','Velasquez2','Piñeros2','Morales2','Flechas2','Mora2','Enriquez2','Niño2'];
    	$apellidos[]=['Martinez3','Rodriguez3','Pedraza3','Velasquez3','Piñeros3','Morales3','Flechas3','Mora3','Enriquez3','Niño3'];

    	$edades=[];

    	$edades[]=['12','45','12','45','5','34','38','10','25','36'];
    	$edades[]=['32','41','65','78','9','19','34','13','27','41'];
    	$edades[]=['14','56','45','7','23','18','31','14','34','56'];

    	$telefonos=[];

    	$telefonos[]=['8523695','8456321','8451236','8743695','8763521','8569412','8962356','8796523','8963254','8745963'];
    	$telefonos[]=['8123695','8526947','8631942','8451236','8961534','8459632','8741253','8451236','8456325','8741236'];
    	$telefonos[]=['8412563','8743615','8745693','8563214','8451236','8471236','8964735','8791346','8456932','8459632'];

    	foreach ($nombres as $key => $nombrer) {
    		foreach ($nombrer as $key => $value) {
    			$contador1=$contador1+1;

    			if ($value == $nombre) {
    				foreach ($apellidos as $key2 => $apellidor) {
			    		foreach ($apellidor as $key2 => $value2) {
			    			$contador2=$contador2+1;

			    			if($contador2==$contador1){
			    				if($value2 ==$apellido){
			    					
					    			foreach ($edades as $key3 => $edadr) {
							    		foreach ($edadr as $key3 => $value3) {
							    			$contador3=$contador3+1;

							    			if($contador3==$contador1){
							    				if($value3 ==$edad){
							    					
									    			foreach ($telefonos as $key4 => $telefonor) {
											    		foreach ($telefonor as $key4 => $value4) {
											    			$contador4=$contador4+1;

											    			if($contador4==$contador1){
											    				if($value4 ==$telefono){
											    					$bandera=1;
													    			echo "Datos <br> Nombre: ",$nombre," <br> Apellido: ",$apellido," <br> Edad: ",$edad,"<br> Telefono: ",$telefono,"<br>El usuario se encuentra en el sistema."; 
													    				
											    				}

											    			}

											    			
											    			
											    		}
											    	
											    	}
									    				
							    				}

							    			}

							    			
							    			
							    		}
							    	
							    	} 
					    				
			    				}

			    			}

			    			
			    			
			    		}
			    	
			    	}
    			}
    			
    		}
    	
    	}
    	if($bandera==0){
    		echo "El usuario no se encuentra en el sistema.";
    	}


    }

}
