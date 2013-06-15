<?php
class kataMalignoTest extends \PHPUnit_Framework_TestCase
{
    
     /**
     * @dataProvider bateria
     */
    function testPruebaClave($clave,$res)
    {
	$kata = new kataMaligno('RAMV');
        $this->assertEquals($res, $kata->compruebaClave($clave));
    }
    
    public function bateria()
    {
        return array(
            array('RAMV','****'),	
            array('RNNN','*'),	
            array('RANN','**'),	
            array('RAMN','***'),	
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
