<?php

namespace Facturalusa\Administration;

class Unit
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
     * Creates a new unit
     * https://facturalusa.pt/documentacao/api/administracao-unidades/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/units', 'POST', $params);
    }

    /**
     * Updates an existing unit
     * https://facturalusa.pt/documentacao/api/administracao-unidades/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/units/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing unit
     * https://facturalusa.pt/documentacao/api/administracao-unidades/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/units/{$id}", 'DELETE');
    }

    /**
     * Finds a unit
     * https://facturalusa.pt/documentacao/api/administracao-unidades/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/units/find', 'POST', $params);
    }
}