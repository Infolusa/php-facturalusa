# PHP - Facturalusa
Biblioteca para ajudar na interacção com o Software de Facturação Online www.facturalusa.pt via PHP. 

Visualize a API em https://facturalusa.pt/documentacao/api

## Requesitos

1. PHP >= 5.3.0
2. **[Composer](https://getcomposer.org/)**

## Instalação

```shell
$ composer require infolusa/php-facturalusa
```

## Endpoints
Todos os endpoints listados na documentação oficial estão disponíveis para utilizar nesta biblioteca.

#### Exemplo prático
```php
$facturalusa = new \Facturalusa\FacturalusaClient('api_token');
$customer = new \Facturalusa\Customer\Customer($facturalusa);
$customer->list();

print_r($facturalusa->response());

// Outro endpoint chamado
$customer->create([]);
print_r($facturalusa->response());
```

#### Respostas & status
Três funções são disponibilizadas:
1. ```$facturalusa->fail()``` - devolve se o pedido falhou
2. ```$facturalusa->success()``` - devolve se o pedido foi bem executado
3. ```$facturalusa->response()``` - devolve a resposta do pedido, tenha ou não falhado

## Licença

MIT
