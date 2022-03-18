<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preciosController extends Controller
{
    public function precios($prc){

        if($prc < 100000){
           return 'Este producto no tiene descuento';
        }
        if($prc <= 100000 && $prc >= 150000){
            $dsc = 0.02;
            $dscTotal = $prc * $dsc;
            $total = $prc - $dscTotal;
            return 'El descuento del producto es del 2%, y el total a pagar es: $' . $total;
        }
        if($prc > 150000 && $prc <= 300000){
            $dsc = 0.03;
            $dscTotal = $prc * $dsc;
            $total = $prc - $dscTotal;
            return 'El descuento del producto es del 3%, y el total a pagar es: $' . $total;
        }
        if($prc > 300000 && $prc <= 500000){
            $dsc = 0.04;
            $dscTotal = $prc * $dsc;
            $total = $prc - $dscTotal;
            return 'El descuento del producto es del 4%, y el total a pagar es: $' . $total;
        }
        if($prc > 500000){
            $dsc = 0.05;
            $dscTotal = $prc * $dsc;
            $total = $prc - $dscTotal;
            return 'El descuento del producto es del 5%, y el total a pagar es: $' . $total;
        }
        if(is_numeric($prc) && $prc < 0){
            return 'El dato ingresado no es correcto. Intentelo de nuevo.';
        }
    }
    public function getIva(){
        $Iva = 0.19;
    }
}
