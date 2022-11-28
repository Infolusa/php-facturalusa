<?php

namespace Facturalusa\Subscription;

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
     * https://facturalusa.pt/documentacao/api#subscricao-locais-criar
     * 
     * @param   Array   params
     */
    public function create($params)
    {
        $this->facturalusa->request('subscription/locations/create', 'POST', $params);
    }

    /**
     * Updates an existing location
     * https://facturalusa.pt/documentacao/api#subscricao-locais-actualizar
     * 
     * @param   Integer id
     * @param   Array   params
     */
    public function update($id, $params)
    {
        $this->facturalusa->request("subscription/locations/{$id}/update", 'POST', $params);
    }

    /**
     * Deletes an existing location
     * https://facturalusa.pt/documentacao/api#subscricao-locais-eliminar
     * 
     * @param   Integer id
     */
    public function delete($id)
    {
        $this->facturalusa->request("subscription/locations/{$id}/delete", 'POST');
    }

    /**
     * Finds a location
     * https://facturalusa.pt/documentacao/api#subscricao-locais-procurar
     * 
     * @param   Array   params
     */
    public function find($params)
    {
        $this->facturalusa->request('subscription/locations/find', 'POST', $params);
    }

    /**
     * Lists the locations
     * https://facturalusa.pt/documentacao/api#subscricao-locais-lista
     * 
     * @param   Array   params
     */
    public function list($params = [])
    {
        $this->facturalusa->request('subscription/locations/list', 'POST', $params);
    }
}