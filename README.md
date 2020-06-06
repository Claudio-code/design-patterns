<h1 align="center">
  Design Patterns
</h1>

# :bookmark_tabs: Índice

- [Objetivo](#objetivo)<br>

- [Singleton](#singleton)



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
