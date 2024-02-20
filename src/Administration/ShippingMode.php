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
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function create($params)
    {
        return $this->facturalusa->request('administration/shippingmodes/create', 'POST', $params);
    }

    /**
     * Updates an existing shipping mode
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/actualizar
     * 
     * @param   Integer id
     * @param   Array   params
     * 
     * @return  Array
     */
    public function update($id, $params)
    {
        return $this->facturalusa->request("administration/shippingmodes/{$id}/update", 'POST', $params);
    }

    /**
     * Deletes an existing shipping mode
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/eliminar
     * 
     * @param   Integer id
     * 
     * @return  Array
     */
    public function delete($id)
    {
        return $this->facturalusa->request("administration/shippingmodes/{$id}/delete", 'POST');
    }

    /**
     * Finds a shipping mode
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/procurar
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function find($params)
    {
        return $this->facturalusa->request('administration/shippingmodes/find', 'POST', $params);
    }

    /**
     * Lists the shippingmodes
     * https://facturalusa.pt/documentacao/api/administracao-modos-expedicao/lista
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function list($params = [])
    {
        return $this->facturalusa->request('administration/shippingmodes/list', 'POST', $params);
    }
}