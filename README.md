# teste-send4-lumen-messages

## Proposta

Desenvolver a API RESTful de uma agenda com as seguintes tecnologias PHP + LARAVEL.

- Permitir cadastrar contato (nome, sobrenome, e-mail e telefone).
- Permitir cadastrar mensagem (contato (fk), descrição).
- Listar todas as mensagens por contato.
- Permitir alterar e excluir uma mensagem.
- Permitir alterar os dados de um contato.
- Validar os campos nos forms.
- Permitir excluir um contato.
- Criar um repositório no GitHub.

## Dependências

- [Docker](https://docs.docker.com/install/)

## Instruções para rodar

Você pode optar rodar de três formas

### 1) Execute o arquivo `run.sh` da pasta raiz, podendo ser via terminal com por exemplo:

`sh ./run.sh`

Este comando ira executar uma série de passos que você poderá acompanhar via terminal, referente a:

1. Build dos containers PHP e Nginx
2. Instalação das dependências do framework Laravel
3. O ambiente pode ser acessado no http://localhost:3000

### 2) Execute os seguintes passos separadamente no seu terminal dentro da pasta do projeto:

`docker-compose up --build -d`

`docker exec -it php bash -c "cd /var/www/html && php composer.phar install"`

`docker ps -a`

O ambiente pode ser acessado no http://localhost:3000

### 3) Utilizando VS Code

1. Abra o projeto com o VS Code
2. No menu superior, vá em Terminal, e selecione `Run Task...`
3. Selecione a tarefa `Start Project`
4. O ambiente pode ser acessado no http://localhost:3000

## Variaveis de Ambiente

Assim que o ambiente estiver rodando, o arquivo com as variaveis de ambiente será criado em `lumen/.env`

Abaixo uma explicação sobre variaveis de ambiente que devem ser modificadas

## Importante

- Sempre fique atento que não exista outro processo rodando na porta 3000 pois é a porta que o Nginx fará o espelhamento ao executar o docker
- Caso algum processo esteja rodando, a porta `3000` pode ser modificada no arquivo `docker-compose.yml` na linha 11

## Todo

...
