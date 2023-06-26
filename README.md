# api rest project
#### Este repositório apresenta uma estrutura básica da criação de uma API rest em Laravel, tomando como exemplo um pequeno projeto inicial do acervo de uma biblioteca, que se constitui de um relacionamento básico entre livros e autores correspondentes. Nessa ideia, a api criada trata-se dos dados dos livros, apresentando a estrutura de um CRUD para a manutenção do acervo.

##### Ferramentas utilizadas e guia de instalação: 
* Laravel 8;
* JSON PHP Extension + Banco de dados (MySQL, SQLite) + Servidor web (Apache) - recomendado: download do ambiente de desenvolvimento php Xampp.
* Configuração correta das variáveis de ambiente (mysql e php).
Composer
* PHP: * Versão >= 8.2.6
* OpenSSL PHP Extension 
* PDO PHP Extension 
* Composer. 

##### Passo a passo:
1. Clone o repositório para seu computador;
2. Dentro da pasta principal do projeto crie um arquivo com o nome: .env; 
3. Copie o conteúdo do arquivo .env.example para o arquivo .env recém criado;
4. Acesse o repositório com um terminal e execute o comando: composer install;
5. Ainda no terminal, gere uma application key com o comando: php artisan key:generate;
6. Configure o arquivo .env com as configurações do banco de dados local;
7. No terminal, execute as migrations com o comando: php artisan migrate --seed (a flag --seed serve para rodar o seeder do laravel. Neste projeto, foi usado para gerar o vendedor automaticamente do sistema).
9. Por fim, para executar o projeto, use o comando: php artisan serve e acesse a url indicada no terminal.

#### Desenvolvimento 
* Este projeto foi desenvolvido usando como base o framework Laravel. 
* Desenvolvido por Larissa Rezende Fazza

#### TESTES
##### Para testar a eficiência do código, foi utilizada a ferramenta Postman (no link https://cloudy-space-601748.postman.co/workspace/69bea052-62bd-4e81-817f-4ed463ab9fd3), onde foi possível simular todas as ações disponíveis na rota do tipo resource http://127.0.0.1:8000/api/books.
Passo a passo da execução dos testes:
1. Criar um registro de um livro
 - definir o tipo de request para POST, e configurar a URL corretamente para http://127.0.0.1:8000/api/books
 - na aba "body", selecionar o tipo de dado de entrada como 'raw' e definir como JSON
 - inserir os dados de entrada (o request):
   { 
    "title": "Title", 
    "genre": "Genero do livro",
    "author_id": 1
   }
 - confirmar o envio no botão SEND
2. Update book (atualizar registro)
 - definir o tipo de request para PUT e alterar a URL para editar o registro desejado (três registros estão sendo gerados automaticamente pelo sistema, então, recomenda-se testar usando id = 1, id = 2 ou id = 3 para testes), portanto a url deve ser http://127.0.0.1:8000/api/books/1
 - reinserir os dados como:
   { 
     "title": "Novo-titulo", 
     "genre": "novo-genero",
     "author_id": 1
   }
 - confirmar da mesma maneira da inserção
3. Ver todos os registros de livros
 - definir o request como GET e mudar a url para http://127.0.0.1:8000/api/books
 - não definir parâmetros
 - clicar no botão SEND e visualizar os dados em JSON
4. Abrir um único livro para visualização
- ainda no método GET, passar a id referente ao livro desejado pela url (ex: http://127.0.0.1:8000/api/books/1)
- rodar da mesma maneira que de todos os registros.
5. Excluir o registro de um livro:
 - definir o método como DELETE
 - passar a id referente ao registro pela url (ex: http://127.0.0.1:8000/api/books/1)
