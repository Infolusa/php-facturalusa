<?php

namespace Facturalusa\Administration;

use Facturalusa\FacturalusaClient;

class Category
{
    /**
     * Holds the Facturalusa Client
     *
     * @var FacturalusaClient
     */
    private $facturalusa;

    /**
     * Initializes the constructor
     */
    public function __construct(\Facturalusa\FacturalusaClient $facturalusa)
    {
        $this->facturalusa = $facturalusa;
    }

    /**
     * Creates a new category
     * https://facturalusa.pt/documentacao/api/administracao-categorias/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/categories', 'POST', $params);
    }

    /**
     * Updates an existing category
     * https://facturalusa.pt/documentacao/api/administracao-categorias/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/categories/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing category
     * https://facturalusa.pt/documentacao/api/administracao-categorias/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/categories/{$id}", 'DELETE');
    }

    /**
     * Finds a category
     * https://facturalusa.pt/documentacao/api/administracao-categorias/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/categories/find', 'POST', $params);
    }
}