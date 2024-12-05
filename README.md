# Controle de Tarefas

Este projeto é um sistema de controle de tarefas desenvolvido com **Laravel** e **Bootstrap**. Ele permite que os usuários criem, visualizem, editem e excluam tarefas. Além disso, o sistema envia um e-mail para o usuário sempre que uma nova tarefa é criada.

## Funcionalidades

- **CRUD Completo**: Criação, visualização, edição e exclusão de tarefas.
- **Envio de E-mails**: Notificação automática por e-mail quando uma nova tarefa é criada.
- **Interface Responsiva**: Layout responsivo utilizando Bootstrap para uma experiência amigável em dispositivos móveis e desktop.
- **Exportação de Tarefas**: Exportação da lista de tarefas em **PDF** e **XLSX** (Excel).

## Pré-requisitos

Certifique-se de que seu ambiente possui os seguintes itens instalados:

- PHP >= 8.1
- Composer >= 2.0
- Node.js >= 16
- MySQL
- Laravel >= 9

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
   cd Controle_de_tarefas
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

## Exemplos de Uso

### Criar Tarefa
Ao criar uma nova tarefa, você receberá um e-mail com os seguintes detalhes:

- **Título**
- **Descrição**
- **Prazo de Conclusão**

### Exportar Tarefas
Use a funcionalidade de exportação para gerar relatórios em **PDF** ou **Excel**, acessando o botão de exportação na interface.

 

## Contribuição

1. Faça um fork do projeto.
2. Crie uma branch para sua feature:
   ```bash
   git checkout -b feature/nome-da-feature
   ```
3. Commit suas mudanças:
   ```bash
   git commit -m 'Adiciona nova feature'
   ```
4. Faça o push para a branch:
   ```bash
   git push origin feature/nome-da-feature
   ```
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
