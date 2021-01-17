<?php


namespace HomeTest\Modules\ShippingModule\Coefficient;


class Coefficient extends CoefficientId implements CoefficientInterface
{
    private int $weightCoefficient;

    private int $dimensionCoefficient;

    public function setWeightCoefficient(int $weightCoefficient)
    {
        $this->weightCoefficient = $weightCoefficient;
    }

    public function getWeightCoefficient(): int
    {
        return $this->weightCoefficient;
    }

    public function setDimensionCoefficient(int $dimensionCoefficient)
    {
        $this->dimensionCoefficient = $dimensionCoefficient;
    }

    public function getDimensionCoefficient(): int
    {
        return $this->dimensionCoefficient;
    }
}