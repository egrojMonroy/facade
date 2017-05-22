<?php

/**
 * Created by PhpStorm.
 * User: Jorge Monroy
 * Date: 21/05/2017
 * Time: 08:38 PM
 */
class facadeHipoteca
{
    public function __construct(Banco $banco, Prestamo $prestamo,Credito $credito)
    {
        $this->_banco = $banco;
        $this->_prestamo = $prestamo;
        $this->_credito = $credito;
    }

    public function esFiable ($cliente){
        if($this->_banco->tieneFondos($cliente) && $this->_credito->historialCorrecto($cliente) && $this->prestamo->tienePrestamo($cliente) ){
            echo "Si es fiable";
        }else{
            echo "no es fiable";
        }
    }
}