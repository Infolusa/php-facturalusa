<?php

namespace Facturalusa\Administration;

class PaymentCondition
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
     * Creates a new payment condition
     * https://facturalusa.pt/documentacao/api/administracao-condicoes-pagamento/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('administration/paymentconditions', 'POST', $params);
    }

    /**
     * Updates an existing payment condition
     * https://facturalusa.pt/documentacao/api/administracao-condicoes-pagamento/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("administration/paymentconditions/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing payment condition
     * https://facturalusa.pt/documentacao/api/administracao-condicoes-pagamento/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("administration/paymentconditions/{$id}", 'DELETE');
    }

    /**
     * Finds a payment condition
     * https://facturalusa.pt/documentacao/api/administracao-condicoes-pagamento/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('administration/paymentconditions/find', 'POST', $params);
    }
}