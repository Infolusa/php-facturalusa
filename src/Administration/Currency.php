<?php

namespace Facturalusa\Administration;

class Currency
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
     * Creates a new currency
     * https://facturalusa.pt/documentacao/api/administracao-moedas/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/currencies', 'POST', $params);
    }

    /**
     * Updates an existing currency
     * https://facturalusa.pt/documentacao/api/administracao-moedas/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/currencies/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing currency
     * https://facturalusa.pt/documentacao/api/administracao-moedas/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/currencies/{$id}", 'DELETE');
    }

    /**
     * Finds a currency
     * https://facturalusa.pt/documentacao/api/administracao-moedas/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/currencies/find', 'POST', $params);
    }
}