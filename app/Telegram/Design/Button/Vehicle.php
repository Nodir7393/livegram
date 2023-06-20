<?php

namespace App\Telegram\Design\Button;

use SergiX44\Nutgram\Telegram\Types\BaseType;

abstract class Vehicle
{
    private BaseType $baseType;

    public function __construct(BaseType $baseType)
    {
        $this->baseType = $baseType::make();
    }

    final public function setPart(...$value): static
    {
        $this->baseType = $this->baseType->addRow(...$value);
        return $this;
    }

    public function getBaseType()
    {
        return $this->baseType;
    }
}
