<?php

namespace App;

class ClientRequest

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
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 446a3e07-8511-43b4-8763-f7af043345b6'
        ];
        $qs = http_build_query($parameters);
        $request = "{$url}?{$qs}";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => 1
        ));

        $response = curl_exec($curl);
        $this->cryptoRes = json_decode($response)->data;

        curl_close($curl);
    }

    public function getCryptoRes(): array
    {
        return $this->cryptoRes;
    }
}
