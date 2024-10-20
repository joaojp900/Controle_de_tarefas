
# Controle de Tarefas

Este projeto é um sistema de controle de tarefas desenvolvido com **Laravel** e **Bootstrap**. Ele permite que os usuários criem, visualizem, editem e excluam tarefas. Além disso, o sistema envia um e-mail para o usuário sempre que uma nova tarefa é criada.

## Funcionalidades

- **CRUD Completo**: Criação, visualização, edição e exclusão de tarefas.
- **Envio de E-mails**: Sempre que uma nova tarefa é criada, o usuário recebe uma notificação por e-mail com os detalhes da tarefa.
- **Interface Responsiva**: Layout responsivo utilizando Bootstrap para uma experiência amigável em dispositivos móveis e desktop.
- **Exportação de Tarefas**: O sistema permite exportar sua lista de tarefas tanto em **PDF** quanto em **XLSX** (Excel), facilitando o compartilhamento e análise dos dados.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para o backend.
- **Bootstrap**: Framework CSS para design responsivo.
- **Mailtrap** (ou outro serviço de SMTP): Para testes e envio de e-mails.
- **MySQL**: Banco de dados relacional para armazenar as tarefas.

## Instalação

1. Clone este repositório:
   ```bash
   git clone https://github.com/joaojp900/Controle_de_tarefas
   ```

2. Entre no diretório do projeto:
   ```bash
   cd seu-repositorio
   ```

3. Instale as dependências:
   ```bash
   composer install
   npm install
   ```

4. Crie o arquivo `.env` a partir do `.env.example` e configure suas credenciais de banco de dados e de e-mail:
   ```bash
   cp .env.example .env
   ```

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Configure o **Mailtrap** (ou outro serviço de e-mail) no arquivo `.env` para o envio de e-mails:
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=seu-username
   MAIL_PASSWORD=sua-senha
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS="seu-email@exemplo.com"
   MAIL_FROM_NAME="${APP_NAME}"
   ```

7. Execute as migrações para criar as tabelas necessárias:
   ```bash
   php artisan migrate
   ```

8. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

9. Acesse a aplicação no navegador em `http://localhost:8000`.

## Funcionalidade de Envio de E-mail

O sistema enviará automaticamente um e-mail para o usuário quando uma nova tarefa for criada. O conteúdo do e-mail inclui o título da tarefa, a descrição e o prazo de conclusão.

## Contribuição

1. Faça um fork do projeto.
2. Crie uma branch para sua feature (`git checkout -b feature/nome-da-feature`).
3. Commit suas mudanças (`git commit -m 'Adiciona nova feature'`).
4. Faça o push para a branch (`git push origin feature/nome-da-feature`).
5. Abra um Pull Request.



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
