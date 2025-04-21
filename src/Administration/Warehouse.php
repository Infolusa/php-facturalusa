<?php

namespace Facturalusa\Administration;

class Warehouse
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
     * Creates a new warehouse
     * https://facturalusa.pt/documentacao/api/administracao-armazens/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/warehouses', 'POST', $params);
    }

    /**
     * Updates an existing warehouse
     * https://facturalusa.pt/documentacao/api/administracao-armazens/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/warehouses/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing warehouse
     * https://facturalusa.pt/documentacao/api/administracao-armazens/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/warehouses/{$id}", 'DELETE');
    }

    /**
     * Finds a warehouse
     * https://facturalusa.pt/documentacao/api/administracao-armazens/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/warehouses/find', 'POST', $params);
    }
}