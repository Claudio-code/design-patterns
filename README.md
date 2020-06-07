<h1 align="center">
  Design Patterns
</h1>

# :bookmark_tabs: Índice

- [Objetivo](#objetivo)
- [Singleton](#singleton)
- [Adapter](#adapter)

<br><br>
<a id="objetivo"></a>
## :dart: Objetivo

- Aqui foram implementados os padões de projeto mais usados com a ultima especificação da linguagem <b>PHP</b> para fins de estudo.


<a id="singleton"></a>
### :gem: Singleton <br>

#### Estrutura principal

- Método construtor é privado.
- Método "getInstance" responsavel por criar o objeto.
    - Ele verifica se o objeto existe, caso contrario cria.
- Possui outros métodos como uma classe qualquer.

#### Motivação usando Exemplos de implementação

- Uma unica conexão com o banco de dados.
- Um unico acesso ao sistema de arquivos do sistema.
- Sistema de logs.
- Não há parametros para sua construção.
- Acessivel de uma forma global.

#### Consequências => Singleton como um Anti-Pattern

- Alto acoplamento.
- Acesso global de um objeto.
- Não é thread safe.
- Dificuldade para trabalhar com testes.


<a id="adapter"></a>
### :wrench: Adapter <br>

#### Motivação

- Converte a interface de uma classe em outra que é esperada pelo cliente.
- Permitir que a classe que não possuem uma interface comum trabalhem de forma conjunta.
- Deixar a possibilidade de futuras implementações para o cliente provendo uma interface para seus adaptadores.

#### Conseito

- Client - é quem vai receber o produto do adapter.
- Target - é o alvo, é a interface que o cliente tem que implementar.
- Adapter - é quem vai implementar a interface na classe cliente.