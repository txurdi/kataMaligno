<?php
class kataMaligno
{
    private $secreta = '';
    
    public function __construct($secreta) {
        $this->secreta = $secreta;
    }

    public function compruebaClave($clave)
    {
        $res = '';
        if ($clave==$this->secreta) {
            $res = '****';
        } else {
            //var_dump(strlen($clave));
            $res = $this->buscarExactos($clave);
            if ($res=='') $res .= $this->buscarAproximados($clave);
        }
        return $res;
    }

    private function buscarExactos($clave) {
        $res ='';
        for ($i=0;$i<strlen($clave);$i++) {
            //var_dump($i);
            if ($clave[$i]==$this->secreta[$i]) {
                $res .= '*';
            }
        }
        return $res;
    }
    
    private function buscarAproximados($clave) {
        $res ='';
        for ($i=0;$i<strlen($clave);$i++) {
            for ($j=0;$j<strlen($clave);$j++) {
            //var_dump($i);
                if ($clave[$i]==$this->secreta[$j]) {
                    $res .= 'X';
                    break;
                }
            }
        }
        return $res;
    }
    
    
}
