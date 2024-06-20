## Requisitos

* PHP 8.2 ou superior
* Composer
* Node.js 20 ou superior

## Como rodar o projeto baixado
Instalar as dependências do PHP
```
composer install
```
Instalar as dependências do Node.js

Instalar o Vite
```
npm install
```

Duplicar o arquivo ".env.example" e renomear para ".env"
Alterar no arquivo .env o nome da base de dados para o desejado. Exemplo: DB_DATABASE=projeto-laravel

Gerar a chave
```
php artisan key:generate
```

Executar as migration
```
php artisan migrate
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```

## Sequencia para criar o projeto
Criar o projeto com Laravel
```
composer create-project laravel/laravel laravel-meu-projeto
```

Acessar op diretório onde está o projeto
```
cd laravel-meu-projeto
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```
Executas as bibliotecas Node.js
```
npm run dev
```


Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```

Criar Controller
```
php artisan make:controller NomeDaController
```
```
php artisan make:controller ContaController
```

Criar View
```
php artisan make:view NomeDaView
```
```
php artisan make:view contas/create
```

Criar migration
```
php artisan make:migration create_contas_table
```

Executar as migration
```
php artisan migrate
```

Criar Models
```
php artisan make:model NomeDaModel
```
```
php artisan make:model Conta
```

Criar Requests
```
php artisan make:request NomeDaRequest
```
```
php artisan make:request ContaRequest
```

Criar Seed

```
php artisan make:seeder ContaSeeder
```
Executar as Seed
```
php artisan db:seed
```

Instalar o framkework boostrap
```
npm i --save bootstrap @popperjs/core
```
Instalar o sass
```
npm i --save-dev sass
```

Executas as bibliotecas Node.js
```
npm run dev
```

Instalar a biblioteca para gerar PDF
```
composer require barryvdh/laravel-dompdf
```
