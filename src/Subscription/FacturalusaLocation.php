<?php

namespace Facturalusa\Subscription;

class FacturalusaLocation
{
    /**
     * Holds the Facturalusa Client
     * 
     * @var FacturalusaClient
     */
    private $facturalusa;

    /**
     * Initializes the constructor
     * 
     * @param   Facturalusa
     */
    public function __construct(FacturalusaClient $facturalusa)
    {
        $this->facturalusa = $facturalusa;
    }

    /**
     * Lists the locations
     * https://facturalusa.pt/documentacao/api#subscricao
     * 
     * @param   Array   params
     */
    public function list($params = [])
    {
        $this->facturalusa->request('subscription/locations/list', 'POST', $params);
    }
}