<?php

namespace Facturalusa\Booking;

class Booking
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
     * Creates a new booking
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function create($params)
    {
        return $this->facturalusa->request('bookings/create', 'POST', $params);
    }

    /**
     * Updates an existing booking
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes-actualizar
     * 
     * @param   Integer id
     * @param   Array   params
     * 
     * @return  Array
     */
    public function update($id, $params)
    {
        return $this->facturalusa->request("bookings/{$id}/update", 'POST', $params);
    }

    /**
     * Updates an existing booking date
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes-actualizar-data
     * 
     * @param   Integer id
     * @param   Array   params
     * 
     * @return  Array
     */
    public function updateDate($id, $params)
    {
        return $this->facturalusa->request("bookings/{$id}/update/time", 'POST', $params);
    }

    /**
     * Deletes an existing booking
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes-eliminar
     * 
     * @param   Integer id
     * 
     * @return  Array
     */
    public function delete($id)
    {
        return $this->facturalusa->request("bookings/{$id}/delete", 'POST');
    }

    /**
     * Creates an invoice for an existing booking
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes-criar-documento
     * 
     * @param   Integer id
     * @param   Array   params
     * 
     * @return  Array
     */
    public function invoiceCreate($id, $params)
    {
        return $this->facturalusa->request("bookings/{$id}/invoice/create", 'POST', $params);
    }

    /**
     * Checks the availability of a date
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes-verificar-disponibilidade
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function checkAvailability($params)
    {
        return $this->facturalusa->request("bookings/check_availability", 'POST', $params);
    }

    /**
     * Allows to calculate in-real-time the totals of a booking
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes-sumario
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function summary($params)
    {
        return $this->facturalusa->request('bookings/summary', 'POST', $params);
    }

    /**
     * Finds a booking
     * https://facturalusa.pt/documentacao/api#agenda-marcacoes-procurar
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function find($params)
    {
        return $this->facturalusa->request('bookings/find', 'POST', $params);
    }
}