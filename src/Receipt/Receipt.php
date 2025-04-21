<?php

namespace Facturalusa\Receipt;

class Receipt
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
     * Creates a new receipt
     * https://facturalusa.pt/documentacao/api/recibos/criar
     */
    public function create(array $params)
    {
        return $this->facturalusa->request('receipts', 'POST', $params);
    }

    /**
     * Updates an existing receipt
     * https://facturalusa.pt/documentacao/api/recibos/actualizar
     */
    public function update(int $id, array $params)
    {
        return $this->facturalusa->request("receipts/{$id}", 'PUT', $params);
    }

    /**
     * Deletes an existing receipt
     * https://facturalusa.pt/documentacao/api/recibos/eliminar
     */
    public function delete(int $id)
    {
        return $this->facturalusa->request("receipts/{$id}", 'DELETE');
    }

    /**
     * Cancels an existing receipt
     * https://facturalusa.pt/documentacao/api/recibos/cancelar
     */
    public function cancel(int $id, array $params)
    {
        return $this->facturalusa->request("receipts/{$id}/cancel", 'PUT', $params);
    }

    /**
     * Downloads the receipt document
     * https://facturalusa.pt/documentacao/api/recibos/download
     */
    public function download(int $id, array $params)
    {
        return $this->facturalusa->request("receipts/{$id}/download", 'POST', $params);
    }

    /**
     * Sends an email 
     * https://facturalusa.pt/documentacao/api/recibos/enviar-email
     */
    public function sendEmail(int $id, array $params)
    {
        return $this->facturalusa->request("receipts/{$id}/send_email", 'POST', $params);
    }

    /**
     * Sends an sms
     * https://facturalusa.pt/documentacao/api/recibos/enviar-sms
     */
    public function sendSms(int $id, array $params)
    {
        return $this->facturalusa->request("receipts/{$id}/send_sms", 'POST', $params);
    }

    /**
     * Signs a document
     * https://facturalusa.pt/documentacao/api/recibos/assinar-digitalmente
     */
    public function sign(int $id, array $params)
    {
        return $this->facturalusa->request("receipts/{$id}/sign", 'PUT', $params);
    }

    /**
     * Allows to calculate in-real-time the totals of a document
     * https://facturalusa.pt/documentacao/api/recibos/sumario
     */
    public function summary(array $params)
    {
        return $this->facturalusa->request('receipts/summary', 'POST', $params);
    }

    /**
     * Finds a receipt
     * https://facturalusa.pt/documentacao/api/recibos/procurar
     */
    public function find(array $params)
    {
        return $this->facturalusa->request('receipts/find', 'POST', $params);
    }
}