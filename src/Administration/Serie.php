<?php

namespace Facturalusa\Administration;

class Serie
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
     * Creates a new serie
     * https://facturalusa.pt/documentacao/api/administracao-series/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/series', 'POST', $params);
    }

    /**
     * Updates an existing serie
     * https://facturalusa.pt/documentacao/api/administracao-series/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/series/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing serie
     * https://facturalusa.pt/documentacao/api/administracao-series/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/series/{$id}", 'DELETE');
    }

    /**
     * Communicates a serie to all type of documents in Autoridade Tributária Services
     * https://facturalusa.pt/documentacao/api/administracao-series/comunicar
     */
    public function communicate(int $id)
    {
        return $this->facturalusa->request("administration/series/{$id}/communicate", 'POST');
    }

    /**
     * Checks if certain serie has been communicated in certain document type
     * https://facturalusa.pt/documentacao/api/administracao-series/verificar-comunicacao
     */
    public function checkCommunication(int $id, array $params)
    {
        return $this->facturalusa->request("administration/series/{$id}/check_communication", 'POST', $params);
    }

    /**
     * Finds a serie
     * https://facturalusa.pt/documentacao/api/administracao-series/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/series/find', 'POST', $params);
    }
}