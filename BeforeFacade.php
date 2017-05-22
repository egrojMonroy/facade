<?php
require_once('bdd.php');
class Banco
{
    public function tieneFondos($c)
    {

        $sql = "select apellido, fondos from clientes where nombre= '.$c.'";
        $req = $bdd->prepare($sql);
        $req->execute();
        $events = $req->fetchAll();

        if ($events['fondos'] > 1000) {
            echo "Si tiene fondos";
            return true;
        } else {
            echo "Si tiene fondos";
            return false;
        }
    }
}
class Credito{
        public function historialCorrecto ($c)
        {
            $sql = "select apellido,problemas from clientes where nombre='.$c.'";
            $req = $bdd->prepare($sql);
            $req->execute();
            $events = $req->fetchAll();

            if ($events['problemas']) {
            echo "Historial correcto";
            return true;
            }
            else {
                echo "Historial incorrecto";
                return false;
            }
        }
}
class Prestamo{

    public function historialCorrecto ($c)
    {
        $sql = "select apellido, prestamos from clientes where nombre= '.$c.'";
        $req = $bdd->prepare($sql);
        $req->execute();
        $events = $req->fetchAll();

        if ($events['prestamos']) {
            echo " correcto";
            return true;
        }
        else {
            echo " incorrecto";
            return false;
        }
    }
}