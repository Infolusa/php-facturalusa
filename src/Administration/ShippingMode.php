<?php

namespace Facturalusa\Administration;

class ShippingMode
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
     * Creates a new shipping mode
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/shippingmodes', 'POST', $params);
    }

    /**
     * Updates an existing shipping mode
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/shippingmodes/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing shipping mode
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/shippingmodes/{$id}", 'DELETE');
    }

    /**
     * Finds a shipping mode
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/shippingmodes/find', 'POST', $params);
    }

    /**
     * Lists the shippingmodes
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/lista
     */
    public function list($params = [])
    {
        return $this->facturalusa->request('administration/shippingmodes/list', 'POST', $params);
    }
}