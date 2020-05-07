# POO - Association, composition and aggregation
> Aplicação foi desenvolvida usando a Stack PHP para demonstrar o uso da Associação, composição e Agregação na Orientação Objeto

# PHP --version
> PHP 7.4.5 (cli) (built: Apr 19 2020 08:42:37) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Xdebug v2.9.5, Copyright (c) 2002-2020, by Derick Rethans
    with Zend OPcache v7.4.5, Copyright (c), by Zend Technologies


`index.php` - Página principal de visualização

![](header.png)

## Installation

OS X & Linux:

```sh
sudo git clone https://github.com/santana-igor/POO.git
```


## Files

```
├── POO
│   ├── assets
│   │   └── css
│   │       └── style.css
│   │       img
│   │       ├── avatar.png
│   │       └── bg.png
│   ├── database
│   │   └── db.php
│   ├── source
│   │   └── Related
│   │       ├── Address.php
│   │       └── Company.php
│   │       └── Product.php
│   │       └── Team.php
│   ├── vendor
│   │   ├── autoload.php
│   │   └── composer
│   │       ├── autoload_classmap.php
│   │       └── autoload_namespaces.php
│   │       └── autoload_psr4.php
│   │       └── autoload_real.php
│   │       └── autoload_static.php
│   │       └── ClassLoader.php
│   │       └── installed.json
│   │       └── LICENSE
│   ├── index.php
│   ├── composer.json


```

## Description

Toda customização de estilos estão na pasta `Assets`. A pasta `source` está armazenando as classes que foram utilizadas no projeto, são elas: Address, Company, Product, Team. Cada classe possui um __construct e tem seus métodos getters para acesso rápido. Todo gerenciamento das classes são feitos através do autoload do composer. Todos os dados para popular o sistema encontram-se no diretório `database`. Você pode acessá-lo e realizar as modificações e adicionar novas funções. O arquivo `index.php` está renderizando todo sistema criado.

## Meta

Igor Santana – [@igor.santaana](https://instagram.com/igor.santaana) – igor.amaral@iamaral.com.br

Distributed under the MIT license. See ``LICENSE`` for more information.

[https://github.com/santana-igor/](https://github.com/mit)

<!-- Markdown link & img dfn's -->
[npm-image]: https://img.shields.io/npm/v/datadog-metrics.svg?style=flat-square
[npm-url]: https://npmjs.org/package/datadog-metrics
[npm-downloads]: https://img.shields.io/npm/dm/datadog-metrics.svg?style=flat-square
[travis-image]: https://img.shields.io/travis/dbader/node-datadog-metrics/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/dbader/node-datadog-metrics
[wiki]: https://github.com/yourname/yourproject/wiki
