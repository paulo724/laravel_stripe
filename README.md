## Sobre o sistema
Pre requisitos - 
Laravel 9
Node.js

Utilizado 
- Laravel : https://laravel.com/docs/9.x/readme
- Sneat : https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/
- Stripe : https://laravel.com/docs/9.x/billing
Sistema Integração Stripe
- Sistema de cadastro de usuários
- Sistema de login de usuários
- Sistema de Editar perfil usuários
- Sistema interagindo com API stipe de pagamentos
- Database de Usuários criada

Teste pratico do sistema
- Baixe todos arquivos do sistema do git.

1 Passo - Abra o terminal em seu diretório raiz do Sneat Laravel.
Use o seguinte comando para instalar o composer :: composer install

2 Passo - Execute o seguinte comando para gerar a chave :: php artisan key:generate

3 Passo - Ao executar o seguinte comando, você poderá obter todas as dependências em sua pasta node_modules:: npm install

4 Passo - Para executar o projeto, você precisa executar o seguinte comando no diretório do projeto. Ele irá compilar JavaScript e Styles. :: npm run dev e npm run build

5 Passo - Crie um banco de dados e altere os dados no arquivo .env no diretorio raiz, execute o comando :: php artisan migrate

6 Passo - Para executar o aplicativo, você precisa executar o seguinte comando no diretório do projeto :: php artisan serve
