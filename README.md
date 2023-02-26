# Sistema de Gestão - Laravel 10

---

Índice
================

- [Sistema de Gestão - Laravel 10](#sistema-de-gestão---laravel-10)
- [Índice](#índice)
    - [Pré-requisitos](#pré-requisitos)
    - [🎲 Rodando o Back End](#-rodando-o-back-end)
    - [🛠 Tecnologias](#-tecnologias)
    - [👨‍💻 Contribuidores](#-contribuidores)
    - [🦸 Autor](#-autor)

---

<h4 align="center">
 🚧  Sistema de Gestão - Feito em Laravel 10, adaptado do curso de Laravel 7 do Jorge Santana 🚀 Em construção... - O projeto contém comentários relacionados ao curso 🚧
</h4>

---

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Composer](https://getcomposer.org/), [Laragon](https://laragon.org/download/index.html) (é possível utilizar xamp, wamp e outros ambientes apache)
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### 🎲 Rodando o Back End

```bash
# Clone este repositório em sua pasta www do laragon
$ git clone https://github.com/mfaoficial/sistema-de-gestao-laravel-10.git

# Acesse a pasta do projeto no terminal/cmd
$ cd sistema-de-gestao-laravel-10

# Adicione o .env
$ cp .env.example .env

# Altere o .env
$ modifique a linha que contem APP_URL para a URL da aplicação, caso utilize laragon será http://sistema-de-gestao-laravel-10.test (necessário reiniciar o laragon após o git clone)

# Adicione a chave de acesso ao .env
$ php artisan key:generate

# Instale as dependências
$ composer install

# Criando o DB
$ Crie um banco de dados com o nome ```sistema-de-gestao-laravel-10```

# Criando tabelas e alimentando o DB
$ php artisan migrate
$ php artisan db:seed

# Login
$ Modifique a senha de acesso no arquivo app/database/seeders/UserSeeder
```

---

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel 10.0](https://laravel.com/docs/10.x)
- [PHP 8.1.9](https://www.php.net/)
- [MariaDB 10.8.3](https://mariadb.com/kb/en/mariadb-1083-release-notes/)
- [Composer](https://getcomposer.org/)
- [Laragon](https://laragon.org/download/index.html)

---

### 👨‍💻 Contribuidores

<table>
  <tr>
    <td align="center">
    <a href="https://github.com/mfaoficial">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/56968366?v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Matheus Aquino</b></sub></a>
 <br /></td>
  </tr>
</table>

---

### 🦸 Autor

<a href="https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel">
 <br />
 <sub><b>Jorge Santana</b></sub></a>
 <br />
