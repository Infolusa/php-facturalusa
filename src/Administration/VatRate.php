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
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function create($params)
    {
        return $this->facturalusa->request('administration/vatrates/create', 'POST', $params);
    }

    /**
     * Updates an existing vat rate
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/actualizar
     * 
     * @param   Integer id
     * @param   Array   params
     * 
     * @return  Array
     */
    public function update($id, $params)
    {
        return $this->facturalusa->request("administration/vatrates/{$id}/update", 'POST', $params);
    }

    /**
     * Deletes an existing vat rate
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/eliminar
     * 
     * @param   Integer id
     * 
     * @return  Array
     */
    public function delete($id)
    {
        return $this->facturalusa->request("administration/vatrates/{$id}/delete", 'POST');
    }

    /**
     * Finds a vat rate
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/procurar
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function find($params)
    {
        return $this->facturalusa->request('administration/vatrates/find', 'POST', $params);
    }

    /**
     * Lists the vatrates
     * https://facturalusa.pt/documentacao/api/administracao-taxas-iva/lista
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function list($params = [])
    {
        return $this->facturalusa->request('administration/vatrates/list', 'POST', $params);
    }
}