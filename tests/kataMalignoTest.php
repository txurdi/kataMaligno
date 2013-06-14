<?php
class kataMalignoTest extends \PHPUnit_Framework_TestCase
{
    function testPrueba()
    {
	$kata = new kataMaligno();
        $this->assertEquals(1, $kata->prueba(), "Prueba para que de OK");
    }
}
