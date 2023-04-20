<?php

namespace App;

class App
{
    protected array $records;
    
    public function __construct($limit, $switch)
    {
        if ($switch == 1) {
            $request = new ClientRequestGuzzle($limit);
        }
        if ($switch == 2) {
            $request = new ClientRequestCurl($limit);
        }

        $data = new GetData($request->getCryptoRes());
        $this->records = $data->get();
    }

    public function getRecords(): array
    {
        return $this->records;
    }
}