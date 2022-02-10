<?php 

namespace Facturalusa;

interface FacturalusaResponse 
{
    public function failed();
    public function success();
    public function response();
}