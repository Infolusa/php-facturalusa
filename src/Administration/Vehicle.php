<?php

namespace Facturalusa\Administration;

class Vehicle
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
     * Creates a new vehicle
     * https://facturalusa.pt/documentacao/api/administracao-veiculos/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/vehicles', 'POST', $params);
    }

    /**
     * Updates an existing vehicle
     * https://facturalusa.pt/documentacao/api/administracao-veiculos/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/vehicles/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing vehicle
     * https://facturalusa.pt/documentacao/api/administracao-veiculos/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/vehicles/{$id}", 'DELETE');
    }

    /**
     * Finds a vehicle
     * https://facturalusa.pt/documentacao/api/administracao-veiculos/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/vehicles/find', 'POST', $params);
    }
}