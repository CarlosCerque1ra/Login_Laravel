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

  ## IMAGENS!!!
  <img width="1917" height="800" alt="image" src="https://github.com/user-attachments/assets/3943a250-53c3-426a-85fd-5b99dfbf0b0a" />

<img width="954" height="800" alt="image" src="https://github.com/user-attachments/assets/48308b20-8c73-4c3d-8aae-580260a3e6ea" />
  <img width="948" height="800" alt="image" src="https://github.com/user-attachments/assets/33f0826f-ccee-4d6f-a186-7091a6f947d6" />

  <img width="944" height="800" alt="image" src="https://github.com/user-attachments/assets/8e442aeb-56d3-4ef5-aeec-8f46a4459659" />

  <img width="947" height="800" alt="image" src="https://github.com/user-attachments/assets/1cb54972-ac60-4c74-bf7d-d13a48995054" />



<img width="953" height="800" alt="image" src="https://github.com/user-attachments/assets/4a3fc0dd-f11c-4684-917f-97af70031af8" />











