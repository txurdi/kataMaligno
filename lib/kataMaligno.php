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
            for ($i=0;$i<strlen($clave);$i++) {
                //var_dump($i);
                if ($clave[$i]==$this->secreta[$i]) {
                    $res .= '*';
                }
            }
        }
        return $res;
    }
}
