<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use \PhpUnitsOfMeasure\PhysicalQuantity;
use \PhpUnitsOfMeasure\UnitOfMeasure;

class Area extends PhysicalQuantity
{
    private $definitions = array('SI', 'English', 'Thai');
    
    /**
     * Configure all the standard units of measure
     * to which this quantity can be converted.
     *
     * @return void
     */
    public function __construct($value, $unit)
    {
        parent::__construct($value, $unit);
        $this->registerUnit($this->definitions);
    }

    public function registerUnit($definitions)
    {
        foreach ($definitions as $d) {
            $class = '\\' . __NAMESPACE__ . '\\Unit\\' . $d . $this->getType();
            $class::register($this);
        }

    }

    protected function getType()
    {
        $fullclass = explode('\\',__CLASS__);
        $class = array_pop($fullclass);
        return $class;
    }
}
