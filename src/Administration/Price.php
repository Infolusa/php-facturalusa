<?php

namespace Facturalusa\Administration;

class Price
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
     * Creates a new price
     * https://facturalusa.pt/documentacao/api/administracao-precos/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/prices', 'POST', $params);
    }

    /**
     * Updates an existing price
     * https://facturalusa.pt/documentacao/api/administracao-precos/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/prices/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing price
     * https://facturalusa.pt/documentacao/api/administracao-precos/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/prices/{$id}", 'DELETE');
    }

    /**
     * Finds a price
     * https://facturalusa.pt/documentacao/api/administracao-precos/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/prices/find', 'POST', $params);
    }
}