<?php

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use \PhpUnitsOfMeasure\PhysicalQuantity;
use \PhpUnitsOfMeasure\UnitOfMeasure;
use \PhpUnitsOfMeasure\PhysicalQuantity\Area;

class AreaTest extends \PHPUnit_Framework_TestCase
{
    public function testConvertSiToThaiUnit ()
    {
        $area = new Area(1600, 'm^2');
        $this->assertEquals(400, $area->toUnit('wa^2'));
        $this->assertEquals(4, $area->toUnit('ngan'));
        $this->assertEquals(1, $area->toUnit('rai'));
    }

    public function testConvertThaiUnitToSi ()
    {
        $area = new Area(1, 'rai');
        $this->assertEquals(1600, $area->toUnit('m^2'));

        $area = new Area(4, 'ngan');
        $this->assertEquals(1600, $area->toUnit('m^2'));

        $area = new Area(400, 'wa^2');
        $this->assertEquals(1600, $area->toUnit('m^2'));
      
    }

    public function testSIScalingUnit ()
    {
        $area = new Area(1000200.000304, 'm^2');
        //$area = new Area(0.000004, 'm^2');
        //var_dump($area->toUnit('mm^2'));
        $actual = $area->toScalingUnit(array('km^2', 'm^2', 'cm^2', 'mm^2'));
        $this->assertEquals(1, $actual['km^2']);
        $this->assertEquals(200, $actual['m^2']);
        $this->assertEquals(3, $actual['cm^2']);
        $this->assertEquals(4, $actual['mm^2']);
    }

    public function testScalingThaiUnit ()
    {
        $area = new Area(2399, 'm^2');
        $actual = $area->toScalingUnit(array('rai', 'ngan', 'wa^2'));
        $this->assertEquals(1, $actual['rai']);
        $this->assertEquals(1, $actual['ngan']);
        $this->assertEquals(99.75, $actual['wa^2']);
    }
}
