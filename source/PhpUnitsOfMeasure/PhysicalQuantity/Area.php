<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use \PhpUnitsOfMeasure\PhysicalQuantity;
use \PhpUnitsOfMeasure\UnitOfMeasure;
use \PhpUnitsOfMeasure\PhysicalQuantity\Unit\ThaiAreaUnit;

class Area extends PhysicalQuantity
{
    private $definition = array('Thai', 'English', 'SI');
    
    /**
     * Configure all the standard units of measure
     * to which this quantity can be converted.
     *
     * @return void
     */
    public function __construct($value, $unit)
    {
        parent::__construct($value, $unit);
        foreach ($this->definition as $d) {
            $class = '\\' . __NAMESPACE__ . '\\Unit\\' . $d . 'Area';
            $class::register($this);
        }
    }
}
