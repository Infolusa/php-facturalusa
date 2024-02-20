<?php

namespace Facturalusa\Subscription;

class Subscription
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
    public function __construct(\Facturalusa\FacturalusaClient $facturalusa)
    {
        $this->facturalusa = $facturalusa;
    }

    /**
     * Signups a new subscription
     * https://facturalusa.pt/documentacao/api/subscricao/registo
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function signup($params)
    {
        return $this->facturalusa->request('subscription/signup', 'POST', $params);
    }

    /**
     * Updates the tax authority data
     * https://facturalusa.pt/documentacao/api/subscricao/actualizar-autoridade-tributaria
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function updateTaxAuthority($params)
    {
        return $this->facturalusa->request("subscription/update/tax_authority", 'POST', $params);
    }

    /**
     * Updates the general configs
     * https://facturalusa.pt/documentacao/api/subscricao/actualizar-configuracoes-gerais
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function updateGeneral($params)
    {
        return $this->facturalusa->request("subscription/update/general", 'POST', $params);
    }

    /**
     * Updates the printing configs
     * https://facturalusa.pt/documentacao/api/subscricao/actualizar-configuracoes-impressao
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function updatePrinting($params)
    {
        return $this->facturalusa->request("subscription/update/printing", 'POST', $params);
    }
}