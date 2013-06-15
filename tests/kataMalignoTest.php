<?php
class kataMalignoTest extends \PHPUnit_Framework_TestCase
{
    
     /**
     * @dataProvider bateria_cor
     */
    function testPruebaPosicionCorrecta($clave,$res)
    {
	$kata = new kataMaligno('RAMV');
        $this->assertEquals($res, $kata->compruebaClave($clave));
    }
     /**
     * @dataProvider bateria_dif
     */
    function testPruebaPosicionDiferente($clave,$res)
    {
	$kata = new kataMaligno('RAMV');
        $this->assertEquals($res, $kata->compruebaClave($clave));
    }
    
     /**
     * @dataProvider bateria_compleja
     */
    function testPruebaMezcla($clave,$res)
    {
	$kata = new kataMaligno('RAMV');
        $this->assertEquals($res, $kata->compruebaClave($clave));
    }
    
    public function bateria_cor()
    {
        return array(
            array('RAMV','****'),	
            array('RNNN','*'),	
            array('RANN','**'),	
            array('RAMN','***')	
        );
    }
    public function bateria_dif()
    {
        return array(
            array('NRNN','X'),	
            array('NRAN','XX'),	
            array('NRAM','XXX'),	
            array('VRAM','XXXX'),	
            //array('',''),	
        );
    }
    
    //RAMV
    public function bateria_compleja()
    {
        return array(
            array('RNAN','*X'),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
            //array('',''),	
        );
    }

}
