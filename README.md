# PaginaDeLogin_Laravel

Sistema de autenticação simples feito em Laravel, com cadastro, login, recuperação e alteração de senha, estilizado com Bootstrap.

## Funcionalidades

- Cadastro de usuário
- Login de usuário
- Recuperação de senha por e-mail
- Alteração de senha
- Validação de dados e mensagens de erro
- Interface responsiva com Bootstrap

## Requisitos

- PHP >= 8.0
- Composer
- MySQL
- Node.js e npm (opcional, para assets)
- [Laravel](https://laravel.com/) 10+

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/PaginaDeLogin_Laravel.git
   cd PaginaDeLogin_Laravel
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Copie o arquivo `.env.example` para `.env` e configure o banco de dados:
   ```bash
   cp .env.example .env
   # Edite o arquivo .env conforme seu ambiente
   ```

4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

5. Execute as migrations:
   ```bash
   php artisan migrate
   ```

6. (Opcional) Compile os assets:
   ```bash
   npm install
   npm run dev
   ```

7. Inicie o servidor:
   ```bash
   php artisan serve
   ```

8. Acesse em [http://localhost:8000](http://localhost:8000)

## Estrutura de Telas

- `/` - Tela inicial com opções de Login e Cadastro
- `/cadastro-user` - Cadastro de novo usuário
- `/login-user` - Login de usuário
- `/verificacao-user` - Verificação de e-mail para recuperação de senha
- `/edit-user` - Alteração de senha

## Observações

- As senhas são armazenadas de forma segura usando hash.
- O sistema utiliza validação de dados do Laravel.
- Bootstrap e Bootstrap Icons são usados para estilização.



