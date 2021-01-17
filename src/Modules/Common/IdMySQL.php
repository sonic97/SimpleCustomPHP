<?php


namespace HomeTest\Modules\Common;


abstract class IdMySQL implements IdMySQLInterface
{
    private int $id;

    public static function fromInt(int $id)
    {
        $static = new static();
        $static->id = $id;

        return $static;
    }

    public function getValue(): int
    {
        return $this->id;
    }
}