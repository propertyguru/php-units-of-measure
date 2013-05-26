<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity\Unit;

use \PhpUnitsOfMeasure\PhysicalQuantity;
use \PhpUnitsOfMeasure\UnitOfMeasure;

class EnglishArea
{
    public static function register(PhysicalQuantity $p)
    {
        // Foot squared
        $new_unit = new UnitOfMeasure(
            'ft^2',
            function ($x) {
                return $x / 9.290304e-2;
            },
            function ($x) {
                return $x * 9.290304e-2;
            }
        );
        $new_unit->addAlias('ft²');
        $new_unit->addAlias('foot squared');
        $new_unit->addAlias('feet squared');
        $p->registerUnitOfMeasure($new_unit);

        // Inch squared
        $new_unit = new UnitOfMeasure(
            'in^2',
            function ($x) {
                return $x / 6.4516e-4;
            },
            function ($x) {
                return $x * 6.4516e-4;
            }
        );
        $new_unit->addAlias('in²');
        $new_unit->addAlias('inch squared');
        $new_unit->addAlias('inches squared');
        $p->registerUnitOfMeasure($new_unit);

        // Mile squared
        $new_unit = new UnitOfMeasure(
            'mi^2',
            function ($x) {
                return $x / 2.589988e6;
            },
            function ($x) {
                return $x * 2.589988e6;
            }
        );
        $new_unit->addAlias('mi²');
        $new_unit->addAlias('mile squared');
        $new_unit->addAlias('miles squared');
        $p->registerUnitOfMeasure($new_unit);

        // Yard squared
        $new_unit = new UnitOfMeasure(
            'yd^2',
            function ($x) {
                return $x / 8.361274e-1;
            },
            function ($x) {
                return $x * 8.361274e-1;
            }
        );
        $new_unit->addAlias('yd²');
        $new_unit->addAlias('yard squared');
        $new_unit->addAlias('yards squared');
        $p->registerUnitOfMeasure($new_unit);
    }
}
