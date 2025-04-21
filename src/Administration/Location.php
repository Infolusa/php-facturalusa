<?php

namespace Facturalusa\Administration;

class Location
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
     * Creates a new location
     * https://facturalusa.pt/documentacao/api/administracao-locais/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/locations', 'POST', $params);
    }

    /**
     * Updates an existing location
     * https://facturalusa.pt/documentacao/api/administracao-locais/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/locations/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing location
     * https://facturalusa.pt/documentacao/api/administracao-locais/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/locations/{$id}", 'DELETE');
    }

    /**
     * Finds a location
     * https://facturalusa.pt/documentacao/api/administracao-locais/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/locations/find', 'POST', $params);
    }
}