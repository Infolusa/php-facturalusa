<?php

namespace Facturalusa\Customer;

class Customer
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
     * Creates a new customer
     * https://facturalusa.pt/documentacao/api/clientes/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('customers', 'POST', $params);
    }

    /**
     * Updates an existing customer
     * https://facturalusa.pt/documentacao/api/clientes/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("customers/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing customer
     * https://facturalusa.pt/documentacao/api/clientes/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("customers/{$id}", 'DELETE');
    }

    /**
     * Finds a customer
     * https://facturalusa.pt/documentacao/api/clientes/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('customers/find', 'POST', $params);
    }
}