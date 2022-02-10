# PHP - Facturalusa
Biblioteca para ajudar na interacção com o Software de Facturação Online www.facturalusa.pt via PHP.

## Requesitos

1. PHP >= 5.3.0
2. **[Composer](https://getcomposer.org/)**

## Instalação

```shell
$ composer require infolusa/php-facturalusa
```

## Utilização

```php
$facturalusa = new \Facturalusa\FacturalusaClient('api_token');
$customer = new \Facturalusa\Customer\Customer($facturalusa);
$customer->list();

print_r($facturalusa->response());
```

## Licença

MIT
