# Elevador PHP

## Descrição

Este projeto simula o funcionamento de um elevador utilizando PHP orientado a objetos. O elevador pode ser chamado para diferentes andares, e ele se move de acordo com uma fila de chamados (FIFO - First-In, First-Out). O sistema foi desenvolvido com foco em clareza e modularidade, e é executado no terminal.

## Funcionalidades

- O elevador pode ser chamado para um andar específico.
- O elevador atende os chamados em ordem de chegada (FIFO).
- O usuário pode continuar chamando o elevador para diferentes andares enquanto ele está em movimento.
- O movimento do elevador é exibido no terminal, com uma pausa de 2 segundos entre os andares.

## Estrutura do Sistema

- **Classe Elevador:** Gerencia os andares, os chamados e o movimento do elevador.
- **Classe Fila (SplQueue):** Usada para organizar os chamados de forma FIFO.
- **ExecutarElevador.php:** Arquivo de execução principal, onde o elevador é chamado e movido.

## Pré-requisitos

- PHP 7.4 ou superior.
- Composer (para gerenciamento de dependências).

## Instalação

### 1. Clonar o Repositório

Primeiro, clone o repositório do projeto:

```bash
git clone https://seu-repositorio-aqui
cd elevator
```

### 2. Instalar as Dependências

Depois, instales as dependências do projeto:

```
composer install
```

### 3. Iniciar o Elevador

Rode o comando pra iniciar o elevador:

```
php app/ExecutarElevador.php
```
