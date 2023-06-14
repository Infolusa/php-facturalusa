<?php

namespace Facturalusa\Booking;

class BookingUnavailable
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
     * Creates a new booking unavailable
     * https://facturalusa.pt/documentacao/api#agenda-indisponibilidades
     * 
     * @param   Array   params
     * 
     * @return  Array
     */
    public function create($params)
    {
        return $this->facturalusa->request('bookings/unavailables/create', 'POST', $params);
    }

    /**
     * Updates an existing booking unavailable
     * https://facturalusa.pt/documentacao/api#agenda-indisponibilidades-actualizar
     * 
     * @param   Integer id
     * @param   Array   params
     * 
     * @return  Array
     */
    public function update($id, $params)
    {
        return $this->facturalusa->request("bookings/unavailables/{$id}/update", 'POST', $params);
    }

    /**
     * Deletes an existing booking unavailable
     * https://facturalusa.pt/documentacao/api#agenda-indisponibilidades-eliminar
     * 
     * @param   Integer id
     * 
     * @return  Array
     */
    public function delete($id)
    {
        return $this->facturalusa->request("bookings/unavailables/{$id}/delete", 'POST');
    }
}