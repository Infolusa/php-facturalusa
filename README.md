# Facturalusa PHP

## Requesitos

1. PHP >= 5.3.0
2. **[Composer](https://getcomposer.org/)**

## Instalação

```shell
$ composer require infolusa/php-facturalusa
```

## Usage

```php
$facturalusa = new \Facturalusa\FacturalusaClient('api_token');
$customer = new \Facturalusa\Customer\Customer($facturalusa);
$customer->list();

print_r($facturalusa->response());
```

## License

MIT
