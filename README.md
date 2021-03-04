## Descrição

Sistema de cadastro de clientes desenvolvido em **PHP** com framework **Laravel**

## Pré Requisitos 

Ter os seguintes itens instalados:
- PHP 7.4 acima
- MySql
- Laravel
- Composer

## Criação do banco de dados
```
 CREATE DATABASE bd_crmall CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

<br><br>
## Após clonar o projeto seguir os seguintes passos:

## Instalar composer no projeto
```
composer install
```

## Configurar arquivo .env 
- Renomear o arquivo **".env.example"** para **".env"**
- Alterar o campo **DB_DATABASE** para **bd_crmall** conforme abaixo:
```
DB_HOST=localhost
DB_DATABASE=bd_crmall 
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

## Seed de tabelas default
```
php artisan bd:seed
```

## Iniciar servidor local 
```
php artisan serve
```
