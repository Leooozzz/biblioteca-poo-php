# 📚 Sistema de Biblioteca em PHP (POO)

Projeto desenvolvido em **PHP puro**, com foco em **Programação Orientada a Objetos**, aplicando boas práticas como **encapsulamento, herança, polimorfismo, abstração, interfaces, namespaces e regras de negócio bem definidas**.

Este projeto simula o funcionamento de um **sistema de biblioteca**, permitindo o controle de empréstimos e devoluções de livros para diferentes tipos de usuários.

---

## 🚀 Objetivo do Projeto

* Consolidar os conceitos de **POO em PHP**
* Praticar **modelagem de domínio**
* Aplicar **regras de negócio reais**
* Preparar base para futuros projetos com **Laravel e MVC**

---

## 🧠 Conceitos Utilizados

* Classes abstratas
* Interfaces
* Herança (`extends`)
* Polimorfismo
* Encapsulamento (`private`, `protected`)
* Namespaces
* Exceções (`Exception`)
* Métodos estáticos
* Tipagem forte

---

## 🏗️ Estrutura do Projeto

```bash
src/
 ├── Usuario.php
 ├── Aluno.php
 ├── Professor.php
 ├── Visitante.php
 ├── Livro.php
 ├── Estante.php
 └── Bibliotecario.php

index.php
vendor/
```

---

## 👤 Tipos de Usuários

### 🔹 Aluno

* Pode pegar **até 1 livro emprestado**

### 🔹 Professor

* Pode pegar **até 3 livros emprestados**

### 🔹 Visitante

* **Não pode** pegar livros emprestados

---

## 📖 Regras de Negócio

* Um livro só pode ser emprestado se estiver **disponível**
* Um usuário só pode pegar livros se **respeitar seu limite**
* O livro deve estar presente na **estante** para ser emprestado
* Apenas livros emprestados podem ser devolvidos
* Exceções são lançadas quando regras são violadas

---

## 🧩 Principais Classes

### `Usuario` (classe abstrata)

Define comportamento comum a todos os usuários.

### `Aluno`, `Professor`, `Visitante`

Implementam regras específicas de empréstimo.

### `Livro`

Controla estado do livro (disponível ou emprestado).

### `Estante`

Gerencia os livros disponíveis.

### `Bibliotecario`

Responsável pelas ações de **emprestar** e **devolver livros**.

---

## 🧪 Exemplo de Uso

```php
Bibliotecario::emprestarLivro($aluno, $livro, $estante);
Bibliotecario::devolverLivro($aluno, $livro, $estante);
```

---

## ⚙️ Requisitos

* PHP 8.1+
* Composer

---

## ▶️ Como Executar

```bash
composer install
php index.php
```

---

## 📈 Próximos Passos (Evolução do Projeto)

* Implementar persistência com **PDO + MySQL**
* Aplicar padrão **MVC**
* Criar autenticação de usuários
* Migrar regras para **Laravel**
* Criar API REST

---

## 👨‍💻 Autor

**Leonardo Souza** 🚀
Projeto criado para estudo e evolução em **Back-end PHP / Laravel**.

---

Se você chegou até aqui, parabéns 👏
Esse projeto demonstra **boa base de POO e arquitetura**.
