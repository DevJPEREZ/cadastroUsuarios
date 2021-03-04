## Descrição

Sistema de cadastro de clientes desenvolvido em **PHP** com framework **Laravel** para processo seletivo da **CRMALL**

## Pré Requisitos 

Ter os seguintes itens instalados:
- PHP 7.4 acima
- MySql
- Laravel
- Composer

## Criação do banco de dados
```
 CREATE DATABASE crmall CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

<br><br>
## Após clonar o projeto seguir os seguintes passos:

## Instalar composer no projeto
```
composer install
composer self-update --2 (caso necessário)
```

## Configurar arquivo .env 
- Renomear o arquivo **".env.example"** para **".env"**
- Alterar o campo **DB_DATABASE** para **crmall** conforme abaixo:
```
DB_HOST=localhost
DB_DATABASE=crmall 
DB_USERNAME=root
DB_PASSWORD=
```

## Gerar chave do projeto laravel
```
php artisan key:generate
```

## Migration tabela Clientes
```
php artisan migrate
```

## Iniciar servidor local 
```
php artisan serve
```
