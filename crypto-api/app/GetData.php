<?php

namespace App;
class GetData

{
    protected array $content;

    public function __construct($cryptoRes)
    {
        $this->content = $cryptoRes;
    }

    public function get(): array
    {
        $records = [];
        foreach ($this->content as $coin) {
            $records[] = new RecordData(
                $coin->name,
                $coin->symbol,
                $coin->quote->USD->price,
            );
        }
        return $records;
    }
}