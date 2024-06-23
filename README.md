## Exame de programação - Anataniel Diogo

Está api foi desenvolvida utilisando o framework [Laravel](https://laravel.com/) v10. 


## Como rodar o projecto

Para rodar o Projecto você precisa ter o Laravel instalado na sua máquina e bem configurado:

- [Ubunto](https://www.youtube.com/watch?v=OSadDCC-SOo).
- [Mac](https://www.youtube.com/watch?v=DtUY8J2T-mc).
- [Windows](https://www.youtube.com/watch?v=bV26n0fmqoE).

Após a configuração do Laravel, abra o seu terminal e faça o clone do projecto:

      $ git clone https://github.com/anatanieldiogo/Sales_api_exame

 Depois, acessar o diretório do projecto(Sales_api_exame) e seguir os passos:


Instalar as dependências
    
    $ composer install

Ou caso o comando acima apresentar um erro sobre a atualização das dependências:
    
    $ composer update

Copiar o arquivo .env

    $ cp .env.example .env

Gerar a chave da aplicação

    $ php artisan key:generate

Configurar o banco de dados no arquivo .env copiado acima:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE= banco_de_dados
    DB_USERNAME= nome_de_usuario_do_mysql
    DB_PASSWORD= caso_tenha_colocar_a_palavra_passe

Feito isso podemos rodar o projeto:

    $ php artisan serve

Rodar as migrations para criar as tabelas no banco de dados:

    $ php artisan migrate

## Seeders

Todos os usuários, diretorias, unidades, vendedores e algumas vendas serão inseridas automaticamente utilizando seeders, e para tal devemos rodar o comando:

    $ php artisan db:seed

Como rodar uma [Seeder](https://laravel.com/docs/9.x/seeding#running-seeders)


## Endpoints

Para testar o funcionamento correto dos endpoints aconselho a utilização do [Postman](https://www.postman.com/) ou de outra ferramenta a sua escolha!

Os endpoints são protegidos por um token(sanctum) gerado após o login, e o mesmo é do tipo `Bearer Token` e, deve ser usado nos seguintes endpoints:

- /sales
- /store-sale
- /search
- /signout

configurar o token no Postman [Bearer Token](https://www.youtube.com/watch?v=PPi9teNKRHY)


## Tipos de requisições:

- http://localhost/api/signin `POST`
- http://localhost/api/sales `GET`
- http://localhost/api/store-sale `POST`
- http://localhost/api/search `POST`
- http://localhost/api/signout `GET`

Os usuários para o login encontram-se no diretóro "database/seedrs/userSeeder.php" e a senha: 123 para todos

Cada usuário tem o seu nível de acesso:

- Diretor geral
- Diretores
- Gerentes
- Vendedores

## Endpoints - descrição

`sales` Este endpoint retorna as vendas de acordo ao nível de acesso do usuário logado:

    $ http://localhost/api/sales

`store-sale` Este endpoint permite o registro de uma venda com os seguintes campos:

    $ http://localhost/api/store-sale

- valor_venda
- diretoria_id
- unidade_id
- local ex: ["-30.048750057541955", "-51.228587422990806"]
- status(inteiro), obs: o status servirá para o dev mobile definir se esta venda se encontra sincronizada com a nuvem.

`search` Este endpoint permite a filtragem das vendas permitindo pesquisa por:
    
    $ http://localhost/api/search

- diretoria_id
- unidade_id
- vendedor_id
- data_inicio
- data_fim

`signout` Este endpoint termina a sessão do sistema:

    $ http://localhost/api/signout


**NOTA:** Se por algum motivo não for possível executar o sistema porfavor entrar em contato!
