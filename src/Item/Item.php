<?php

namespace Facturalusa\Item;

class Item
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
     * Creates a new item
     * https://facturalusa.pt/documentacao/api/artigos
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('items', 'POST', $params);
    }

    /**
     * Updates an existing item
     * https://facturalusa.pt/documentacao/api/artigos/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("items/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing item
     * https://facturalusa.pt/documentacao/api/artigos/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("items/{$id}", 'DELETE');
    }

    /**
     * Deletes the image from the item
     * https://facturalusa.pt/documentacao/api/artigos/eliminar-imagem
     */
    public function deleteImage(int $id)
    {
        return $this->facturalusa->request("items/{$id}/image", 'DELETE');
    }

    /**
     * Finds a item
     * https://facturalusa.pt/documentacao/api/artigos/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('items/find', 'POST', $params);
    }
}