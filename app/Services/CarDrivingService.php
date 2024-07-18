<?php

namespace App\Services;

use SoapClient;

class CarDrivingService
{
    protected $client;
    protected $wsdl;

    public function __construct()
    {
        $this->wsdl = 'https://www.caranddriving.com/ws/A041/ws.asmx?WSDL';
        $this->client = new SoapClient($this->wsdl);
    }

    public function getReview($capId)
    {
        $params = [
            'user_id' => 'demo',
            'capid' => $capId,
            'type' => 'all',
            'getsummaries' => true,
            'liveonly' => true
        ];

        try {
            $response = $this->client->GetReviewsFromCapID($params);
            return $response;
        } catch (\Exception $e) {
            throw new \Exception('Unable to fetch review data: ' . $e->getMessage());
        }
    }
}
