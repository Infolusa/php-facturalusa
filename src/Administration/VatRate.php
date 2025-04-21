<?php

namespace Facturalusa\Administration;

class VatRate
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
     * Creates a new vat rate
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/vatrates', 'POST', $params);
    }

    /**
     * Updates an existing vat rate
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/vatrates/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing vat rate
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/vatrates/{$id}", 'DELETE');
    }

    /**
     * Finds a vat rate
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/vatrates/find', 'POST', $params);
    }
}