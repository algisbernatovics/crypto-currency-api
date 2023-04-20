<?php

namespace App;

use GuzzleHttp\Client;

class ClientRequestGuzzle

{
    protected array $cryptoRes;

    public function __construct($limit)
    {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        $parameters = [
            'start' => '1',
            'limit' => "$limit",
            'convert' => 'USD'
        ];

        $headers = [
            'headers' => [
                'Accept' => 'application/json',
                'X-CMC_PRO_API_KEY' => '446a3e07-8511-43b4-8763-f7af043345b6'
            ]
        ];

        $qs = http_build_query($parameters);
        $request = "$url?$qs";

        $client = new Client();
        $response = $client->request('GET', $request, $headers);

        $this->cryptoRes = json_decode($response->getBody())->data;
    }

    public function getCryptoRes(): array
    {
        return $this->cryptoRes;
    }
}
