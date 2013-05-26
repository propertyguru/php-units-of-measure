<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity\Unit;

use \PhpUnitsOfMeasure\PhysicalQuantity;
use \PhpUnitsOfMeasure\UnitOfMeasure;

class ThaiArea
{
    public static function register(PhysicalQuantity $p)
    {
        // Rai - Thai Area Measurement Standard
        $new_unit = new UnitOfMeasure(
            'rai',
            function ($x) {
                return $x / 1600;
            },
            function ($x) {
                return $x * 1600;
            },
            function ($x) {
                return bcsub(abs($x / 1600), floor(abs($x / 1600)), 20) * 1600;
            }
        );
        $new_unit->addAlias('rai');
        $p->registerUnitOfMeasure($new_unit);

        // Ngan - Thai Area Measurement Standard
        $new_unit = new UnitOfMeasure(
            'ngan',
            function ($x) {
                return $x / 400;
            },
            function ($x) {
                return $x * 400;
            },
            function ($x) {
                return bcsub(abs($x / 400), floor(abs($x / 400)), 20) * 400;
            }
        );
        $new_unit->addAlias('ngan');
        $p->registerUnitOfMeasure($new_unit);

        // Square Wah - Thai Area Measurement Standard
        $new_unit = new UnitOfMeasure(
            'wa^2',
            function ($x) {
                return $x / 4;
            },
            function ($x) {
                return $x * 4;
            },
            function ($x) {
                return bcsub(abs($x / 4), floor(abs($x / 4)), 20) * 4;
            }
        );
        $new_unit->addAlias('wa^2');
        $new_unit->addAlias('square wa');
        $new_unit->addAlias('tarang wa');
        $p->registerUnitOfMeasure($new_unit);
    }
}
