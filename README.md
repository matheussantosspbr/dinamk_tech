## Passos para o funcionamento do sistema

Abra o Terminal:
1- `git clone https://github.com/matheussantosspbr/dinamk_tech.git`

2- `cd dinamk_tech'`

3- `code .`

4- Renomeio o arquivo `.env.example` para `.env`

5- `docker-compose build`

6- `docker-compose up -d`

7- `docker exec -it dinamk /bin/bash`

8- `composer install`

9- `php artisan migrate`

10- `php artisan db:seed`

11- Abra no navegador `http://localhost/` e se pedir, gere uma chave para o env

Obs: na pagina inicial, tem apenas o botão de login, que é a descrita a baixo:
Email: admin@dinamktech.com
senha: admin123

ao cadastrar o cliente, você podera fazer o logout, e acessar o painel dele (cliente) com o email cadastrado e a senha `client123` ( fixo para todos )
