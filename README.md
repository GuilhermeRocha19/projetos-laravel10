## Requisitos

* PHP 8.2 ou superior
* Composer

## Como rodar o projeto baixado
Instalar as dependências 
```
composer install
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
