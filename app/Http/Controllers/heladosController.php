<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladosController extends Controller
{
    public function helado ($opc){
        $valorHelado = 3000;
        $valorTopping = 0;
        $topping= '';
        $valorTotal= 0;

        if(is_numeric($opc) && ($opc > 0 && $opc < 4)){


            if($opc = 1){
               $topping = 'chocolate';
               $valorTopping = 500;
               $valorTotal = $valorTopping + $valorHelado;
            }

            if($opc = 2){
               $topping = 'Brownie';
               $valorTopping = 1000;
               $valorTotal = $valorTopping + $valorHelado;
            }
            if($opc = 3){
                $topping = 'Delicatessen';
                $valorTopping = 1500;
                $valorTotal = $valorTopping + $valorHelado;
             }
             return 'El topping escogido es: ' . $topping . ' y su precio es: $' . $valorTopping . '. El valor total a pagar por el helado es:  $' . $valorTotal;

        }
        else{
            return 'Aprenda a leer bru';
        }
    }
}
