<?php

namespace Facturalusa;

require_once('FacturalusaResponse.php');

class FacturalusaClient Implements FacturalusaResponse
{
    /**
     * Holds the API URL
     *
     * @var String
     */
    const API_URL = 'https://facturalusa.pt/api/v2/';

    /**
     * Holds the API Bearer Access Token
     *
     * @var String
     */
    private $apiToken;

    /**
     * Holds the http status code
     * 
     * @var Integer
     */
    private $statusCode;

    /**
     * Holds the response message
     * 
     * @var mixed
     */
    private $response;

    /**
     * Initializes the constructor
     */
    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * Executes a request to the API
     */
    public function request(string $action, string $type, array $params = [])
    {
        $ch = curl_init(self::API_URL . $action);

		curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer {$this->apiToken}",
            'Accept: application/json',
            'Content-Type: application/json',
        ]);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        $this->statusCode = $statusCode;
        $this->response = json_decode($response, true);

        return $this->response;
    }

    /**
     * Returns if the request has failed
     */
    public function fail(): bool
    {
        return !$this->success();
    }

    /**
     * Returns if the request has succeeded
     */
    public function success(): bool
    {
        return in_array($this->statusCode, [200, 201, 204]);
    }

    /**
     * Returns the request response
     *
     * @return mixed
     */
    public function response()
    {
        return $this->response;
    }
}