<?php

namespace Facturalusa\Administration;

class PaymentMethod
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
     * Creates a new payment method
     * https://facturalusa.pt/documentacao/api/administracao-formas-pagamento/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/paymentmethods', 'POST', $params);
    }

    /**
     * Updates an existing payment method
     * https://facturalusa.pt/documentacao/api/administracao-formas-pagamento/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/paymentmethods/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing payment method
     * https://facturalusa.pt/documentacao/api/administracao-formas-pagamento/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/paymentmethods/{$id}", 'DELETE');
    }

    /**
     * Finds a payment method
     * https://facturalusa.pt/documentacao/api/administracao-formas-pagamento/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/paymentmethods/find', 'POST', $params);
    }
}