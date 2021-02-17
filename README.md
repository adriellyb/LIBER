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

Na API, cada entidade possui suas rotas seguindo o conceito e as regras da API Rest, por conta disto, possuem uma hierarquia entre si. Para criar-se uma data é necessário o registro do usuário e, consequentemente, o login do mesmo que irá gerar um token de autenticação dando acesso as rotas das entidades Date e Holiday.

Para testar as rotas, a URL utilizada é ``sh localhost:http://localhost:8000/api/ ``. Caso haja dúvidas, no arquivo ``sh routes\api.php`` estão todas desta aplicação.

## Tecnologias

## Instalação

  ### Windows
  
  ### Linux
  
## Servindo o projeto

## Como testar
