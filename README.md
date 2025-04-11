# Gerenciador de Tarefas em Laravel

Este projeto é um site gestão de tarefas desenvolvido em Laravel. Ele conta com as seguintes funcionalidades:

## Funcionalidades
- **Gerenciamento de Usuários**:
  - Criação, edição e exclusão de usuários.
  - Login e logout.
  - Rotas protegidas por autenticação.

- **Gestão de Tarefas**:
  - Criação, edição e exclusão de tarefas.
  - As tarefas possuem uma tabela dedicada com chave estrangeira para vinculação ao usuário.

## Tecnologias
- Laravel
- Sqlite 
- HTML/CSS/Javascript(breeze)

## Como iniciar
1. Clone este repositório.
2. Instale as dependências com `composer install`.
3. Configure o arquivo `.env` para seu banco de dados.
4. Execute as migrações com `php artisan migrate`.
5. Inicie o servidor local com `php artisan serve`.

## Sobre
Este projeto foi desenvolvido por Henrique Texeira. Caso tenha dúvidas ou sugestões, me mande um email henriquedepaula1015@gmail.com .
