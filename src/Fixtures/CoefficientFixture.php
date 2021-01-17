<?php


namespace HomeTest\Fixtures;


use HomeTest\Modules\ShippingModule\Coefficient\Coefficient;
use HomeTest\Modules\ShippingModule\Coefficient\CoefficientInterface;
use HomeTest\Modules\ShippingModule\Product\Product;

class CoefficientFixture
{
    public static function getCoefficient(): CoefficientInterface
    {
        $coefficient = new Coefficient();
        $coefficient->setWeightCoefficient(11);
        $coefficient->setDimensionCoefficient(12);

        return $coefficient;
    }
}