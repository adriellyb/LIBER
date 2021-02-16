# holiday-api

## Índice
<!--ts-->
   * [Informações Gerais](#informações-gerais)
   * [Tecnologias](#tecnologias)
   * [Instalação](#instalação)
      * [Windows](#windows)
      * [Linux](#linux)
   * [Servindo o projeto](#servindo-o-projeto)
   * [Como Testar](#como-testar)
<!--te-->

## Informações Gerais

Esta aplicação foi desenvolvida como projeto final do processo seletivo interno da EJCM para o cargo de Tech Lead. O projeto consistia no criação de uma API Restful que contenha CRUD básica para pelo menos duas entidades que se relacionam, além disto esta API deveria consumir uma API
Pública com autenticação associada a algum método da CRUD.

A ideia desta aplicação é um sistema simples de consulta onde o usuário escolhe dia, mês, ano e país para a consulta e o sistema retorna se há (ou não) um feriado no país e na data escolhida. As entidades são User, Date e Holiday.

### Framework utilizada
- [Laravel](https://laravel.com/docs/8.x)

### API externa utilizada
- [Calendarific Holiday API](https://calendarific.com/api-documentation)

### Relacionamentos

- User and Date: 1-N
<p>User pode ter n Dates<br />
Date pode ter apenas 1 User</p>

- Date and Holidays: 1-1
<p>Date pode ter 1 Holiday<br />
Holiday é associado a 1 Date</p>

### Rotas

## Tecnologias

## Instalação

  ### Windows
  
  ### Linux
  
## Servindo o projeto

## Como testar
