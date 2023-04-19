<?php

namespace App;

class App
{
    protected array $records;

    public function __construct($limit)
    {

        $request = new ClientRequest($limit);
        $data = new GetData($request->getCryptoRes());
        $this->records = $data->get();
    }

    public function getRecords(): array
    {
        return $this->records;
    }
}