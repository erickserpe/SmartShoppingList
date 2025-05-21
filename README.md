# 🛒 SmartShoppingList

Este projeto é um sistema simples de envio e visualização de listas de compras utilizando PHP, MySQL e Bootstrap. Ele permite que usuários preencham um formulário com itens da lista, que são salvos no banco de dados para controle posterior.

## 🚀 Funcionalidades

- Formulário intuitivo com validação.
- Inserção de dados sanitizados no banco de dados.
- Visualização dos itens cadastrados.
- Uso de Bootstrap para interface responsiva.

## 💾 Tecnologias Utilizadas

- HTML5, CSS3
- Bootstrap 5
- PHP (Procedural)
- MySQL

## 📦 Estrutura do Banco

```sql
CREATE DATABASE mercado;

USE mercado;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    quantidade INT,
    unidade VARCHAR(20),
    descricao TEXT,
    preco_unitario DECIMAL(10,2),
    categoria VARCHAR(50),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
