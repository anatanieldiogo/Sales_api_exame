## Convicti test

Está api foi desenvolvida utilisando o framework [Laravel](https://laravel.com/). Ela usa o pacote Laravel Sail que ajuda muito na gestão dos Containers Docker. Estamos a usar o Banco de dados Mysql. A aplicação tem 2 Containers:

- `sail-8.1/app`
- `mysql/mysql-serverÇ8.0`

---

 - ### [Como rodar](#como-rodar-o-projecto)


## Como rodar o projecto

Para rodar o Projecto voçe precisa ter o Docker instalado na sua máquina e bem configurado:

- [Ubunto](https://www.youtube.com/watch?v=q4ZK6IJCS6Q).
- [Mac](https://www.youtube.com/watch?v=ktNYPv6kfVk).
- [Windows](https://www.youtube.com/watch?v=rEXd7xpts5k).

Após a configuração do docker, abra o seu terminal e faça um clone do projecto:

 $ git clone https://github.com/anatanieldiogo/convicti_test

 Depois, acessar o diretório do projecto e executar o container do docker.

 $  docker-compose -f docker-compose.yml up

 Agora verifique se os containers levantaram:
    
    $ docker ps

Se notar no terminal algo como:

$ 878bd1a2d2c7   sail-8.1/app

e

$ eea717095595   mysql/mysql-server:8.0

podemos avançar para o proximo passo.

Uma vez que os containers estão a rodar vamos entrar dentro do container `sail-8.1/app`, depois instale as dependencias do projecto e execute o seguinte:

$ docker exec -it [Conatiner_ID] bash 

//Instalar as dependencias
    $ composer install

Copiar o arquivo .env
    $ cp .env.example .env

//Gerar a chave da aplicação
    $ php artisan key:generate

//Executar os containers
    $ ./vendor/bin/sail up 

Feito isso podemos rodar as migrações.

    //Entrar no modo Root
    $ ./vendor/bin/sail root-shell

    //Rodar as migrate
    $ php artisan migrate

## Seeders

Todos os usuários, diretorias, unidades, vendedores e algumas vendas serão inseridas automaticamente utilizando seeders, e para tal devemos rodar o comando:

$ php artisan db:seed

Como rodar uma [Seeder](https://laravel.com/docs/9.x/seeding#running-seeders)


## Endpoints

Para testar o funcionamento correto dos endpoints aconselho a utilização do [Postman](https://www.postman.com/) ou de outra ferramenta a sua escolha!

Os endpoints são protegidos por um token(sanctum) gerado após o login, e o mesmo é do tipo `Bearer Token` e, deve ser usado nos seguintes endpoints:

- /signin
- /sales
- /store-sale
- /search
- /signout

configurar o token no Postman [Bearer Token](https://www.youtube.com/watch?v=PPi9teNKRHY)

//signin - requisição do tipo post

$ http://localhost/api/signin

Os emails de login são os presentes na folha do exel e a senha: 123

Cada usuário tem o seu nível de acesso conforme esplicado no documento.

//sales - requisição do tipo get

$ http://localhost/api/sales

Este endpoint retorna as vendas de acordo ao nível de acesso do usuário logado

//store-sale - requisição do tipo post

$ http://localhost/api/store-sale

Este endpoint permite o registro de uma venda com os seguintes campos:

- valor_venda
- diretoria_id
- unidade_id
- local ex: ["-30.048750057541955", "-51.228587422990806"]
- status(inteiro), obs: o status servirá para o dev mobile definir se esta venda se encontra sincronizada com a nuvem.


//search - requisição do tipo post

$ http://localhost/api/search

Este endpoint permite a filtragem das vendas permitindo pesquisa por:

- diretoria_id
- unidade_id
- vendedor_id
- data_inicio
- data_fim

//signout - requisição do tipo get

$ http://localhost/api/signout

Este endpoint termina a sessão do sistema

**NOTA:** Se por algum motivo não for possível executar o sistema porfavor entrar em contato!
