<?php

namespace Facturalusa\Sale;

class Sale
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
     * Creates a new sale
     * https://facturalusa.pt/documentacao/api/vendas/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('sales', 'POST', $params);
    }

    /**
     * Updates an existing sale
     * https://facturalusa.pt/documentacao/api/vendas/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing sale
     * https://facturalusa.pt/documentacao/api/vendas/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("sales/{$id}", 'DELETE');
    }

    /**
     * Cancels an existing sale
     * https://facturalusa.pt/documentacao/api/vendas/cancelar
     */
    public function cancel(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}/cancel", 'PUT', $params);
    }

    /**
     * Duplicates an existing sale
     * https://facturalusa.pt/documentacao/api/vendas/duplicar
     */
    public function duplicate(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}/duplicate", 'POST', $params);
    }

    /**
     * Creates a receipt based on an existing sale
     * https://facturalusa.pt/documentacao/api/vendas/recibo
     */
    public function receipt(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}/receipt", 'POST', $params);
    }

    /**
     * Creates a credit note of an existing sale
     * https://facturalusa.pt/documentacao/api/vendas/nota-credito
     */
    public function creditNote(int $id)
    {
        return $this->facturalusa->request("sales/{$id}/credit_note", 'POST');
    }

    /**
     * Creates a debit note of an existing sale
     * https://facturalusa.pt/documentacao/api/vendas/nota-debito
     */
    public function debitNote(int $id)
    {
        return $this->facturalusa->request("sales/{$id}/debit_note", 'POST');
    }

    /**
     * Downloads the sale document
     * https://facturalusa.pt/documentacao/api/vendas/download
     */
    public function download(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}/download", 'POST', $params);
    }

    /**
     * Sends an email 
     * https://facturalusa.pt/documentacao/api/vendas/enviar-email
     */
    public function sendEmail(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}/send_email", 'POST', $params);
    }

    /**
     * Sends an sms
     * https://facturalusa.pt/documentacao/api/vendas/enviar-sms
     */
    public function sendSms(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}/send_sms", 'POST', $params);
    }

    /**
     * Signs a document
     * https://facturalusa.pt/documentacao/api/vendas/assinar-digitalmente
     */
    public function sign(int $id, array $params)
    {
        return $this->facturalusa->request("sales/{$id}/sign", 'PUT', $params);
    }

    /**
     * Generates MB reference
     * https://facturalusa.pt/documentacao/api/vendas/gerar-ref-multibanco
     */
    public function generateMBReference($id)
    {
        return $this->facturalusa->request("sales/{$id}/generate_mbref", 'PUT');
    }

    /**
     * Generates a MBWay
     * https://facturalusa.pt/documentacao/api/vendas/gerar-mbway
     */
    public function generateMBWay($id)
    {
        return $this->facturalusa->request("sales/{$id}/generate_mbway", 'PUT');
    }

    /**
     * Allows to calculate in-real-time the totals of a document
     * https://facturalusa.pt/documentacao/api/vendas/sumario
     */
    public function summary(array $params)
    {
        return $this->facturalusa->request('sales/summary', 'POST', $params);
    }

    /**
     * Finds a sale
     * https://facturalusa.pt/documentacao/api/vendas/procurar
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('sales/find', 'POST', $params);
    }
}