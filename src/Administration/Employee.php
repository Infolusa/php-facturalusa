<?php

namespace Facturalusa\Administration;

class Employee
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
     * Creates a new employee
     * https://facturalusa.pt/documentacao/api/administracao-colaboradores/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/employees', 'POST', $params);
    }

    /**
     * Updates an existing employee
     * https://facturalusa.pt/documentacao/api/administracao-colaboradores/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/employees/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing employee
     * https://facturalusa.pt/documentacao/api/administracao-colaboradores/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/employees/{$id}", 'DELETE');
    }

    /**
     * Finds a employee
     * https://facturalusa.pt/documentacao/api/administracao-colaboradores/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/employees/find', 'POST', $params);
    }
}