<?php

namespace App;
class RecordData

{
    protected string $name;
    protected string $symbol;
    protected float $usdPrice;

    public function __construct($name, $symbol, $usdPrice)
    {
        $this->name = $name;
        $this->symbol = $symbol;
        $this->usdPrice = $usdPrice;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getUsdPrice(): float
    {
        return $this->usdPrice;
    }
}
