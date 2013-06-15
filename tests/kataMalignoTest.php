<?php
class kataMalignoTest extends \PHPUnit_Framework_TestCase
{
    
    function testSiCodigoSecretoDevuleve4ast()
    {
	$kata = new kataMaligno('RAMV');
        $this->assertEquals('****', $kata->compruebaClave('RAMV'));
    }

    function testSi1EnPosicionDevuelve1ast()
    {
	$kata = new kataMaligno('RAMV');
        $this->assertEquals('*', $kata->compruebaClave('RNNN'));
    }
    function testSi2EnPosicionDevuelve2ast()
    {
	$kata = new kataMaligno('RAMV');
        $this->assertEquals('**', $kata->compruebaClave('RANN'));
    }
}
