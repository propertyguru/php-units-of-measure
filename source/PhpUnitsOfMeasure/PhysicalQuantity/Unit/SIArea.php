<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity\Unit;

use \PhpUnitsOfMeasure\PhysicalQuantity;
use \PhpUnitsOfMeasure\UnitOfMeasure;

class SIArea implements \PhpUnitsOfMeasure\UnitInterface
{
    public static function register(PhysicalQuantity $p)
    {
        // Meters squared
        $new_unit = new UnitOfMeasure(
            'm^2',
            function ($x) {
                return $x;
            },
            function ($x) {
                return $x;
            },
            function ($x) {
                return bcsub(abs($x), floor(abs($x)), 20);
            }
        );
        $new_unit->addAlias('m²');
        $new_unit->addAlias('meter squared');
        $new_unit->addAlias('meters squared');
        $p->registerUnitOfMeasure($new_unit);

        // Millimeter squared
        $new_unit = new UnitOfMeasure(
            'mm^2',
            function ($x) {
                return $x / 1e-6;
            },
            function ($x) {
                return $x * 1e-6;
            },
            function ($x) {
                return bcsub(abs($x / 1e-6), floor(abs($x / 1e-6)), 20) * 1e-6;
            }
        );
        $new_unit->addAlias('mm²');
        $new_unit->addAlias('millimeter squared');
        $new_unit->addAlias('millimeters squared');
        $p->registerUnitOfMeasure($new_unit);

        // Centimeter squared
        $new_unit = new UnitOfMeasure(
            'cm^2',
            function ($x) {
                return $x / 1e-4;
            },
            function ($x) {
                return $x * 1e-4;
            },
            function ($x) {
                return bcsub(abs($x / 1e-4), floor(abs($x / 1e-4)), 20) * 1e-4;
            }
        );
        $new_unit->addAlias('cm²');
        $new_unit->addAlias('centimeter squared');
        $new_unit->addAlias('centimeters squared');
        $p->registerUnitOfMeasure($new_unit);

        // Decimeter squared
        $new_unit = new UnitOfMeasure(
            'dm^2',
            function ($x) {
                return $x / 1e-2;
            },
            function ($x) {
                return $x * 1e-2;
            },
            function ($x) {
                return bcsub(abs($x / 1e-2), floor(abs($x / 1e-2)), 20) * 1e-2;
            }
        );
        $new_unit->addAlias('dm²');
        $new_unit->addAlias('decimeter squared');
        $new_unit->addAlias('decimeters squared');
        $p->registerUnitOfMeasure($new_unit);

        // Kilometer squared
        $new_unit = new UnitOfMeasure(
            'km^2',
            function ($x) {
                return $x / 1e6;
            },
            function ($x) {
                return $x * 1e6;
            },
            function ($x) {
                return bcsub(abs($x / 1e6), floor(abs($x / 1e6)), 20) * 1e6;
            }
        );
        $new_unit->addAlias('km²');
        $new_unit->addAlias('kilometer squared');
        $new_unit->addAlias('kilometers squared');
        $p->registerUnitOfMeasure($new_unit);
    }
}
