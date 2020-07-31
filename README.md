<h1 align="center">
  Design Patterns
</h1>

# :bookmark_tabs: Índice

- [Objetivo](#objetivo)

- Padrões de Criação
    - [Singleton](#singleton)
    - [Builder](#builder)
    - [Factory Method](#factoryMethod)

- Padrôes Estruturais 
    - [Adapter](#adapter)
    - [Decorator](#decorator)

- Padrôes Comportamento
    - [Strategy](#strategy)
    - [Chain of Responsibility](#chainOfResponsibility)

<br><br>
<a id="objetivo"></a>
## :dart: Objetivo

- Aqui foram implementados os padões de projeto mais usados com a ultima especificação da linguagem <b>PHP</b> para fins de estudo.

<hr>

<a id="singleton"></a>
### :gem: Singleton <br>

#### Estrutura principal

- Método construtor é privado.
- Método "getInstance" responsavel por criar o objeto.
    - Ele verifica se o objeto existe, caso contrario cria.
- Possui outros métodos como uma classe qualquer.

#### Motivação

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

<hr>

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

<hr>

<a id="decorator"></a>
### :christmas_tree: Decorator <br>

#### Motivação

- Uma alternativa para a criação de subclasses para estender funcionalidades. A intenção é anexar dinamicamente responsabilidades adicionais flexiveis a um o objeto.
- Aprimorar a extensibilidade do objeto, pois as alterações são feitas codificando novas classes.
- Simplifica o desenvolvimento permitindo uma série de classes com funcionalidades especificas, ao invés de codificar todo o comportamento do objeto.

<hr>

<a id="builder"></a>
### :package: Builder <br>

#### Motivação

- Permite que a separação da construção de um objeto complexo da sua representação.
- Permite que uma classe se preucupe com apenas uma parte da construção de um objeto. É util em algoritimos de construção complexos.
    - É usado quando o algoritimo para criar um objeto complexo precisar ser independente das partes que compõem o objeto e da forma como o objeto é construido.
- Também suporta substituição dos construtores, permitindo que a mesma interface seja usada para construir representações diferentes dos mesmos dados.
    - è usado quando o processo de construção precisar suportar representações diferentes do objeto que está sendo construido.

<hr>

<a id="strategy"></a>
### :dart: Strategy <br>

#### Motivação

- Definir uma familia de algoritmos, encapsular cada um, e fazê-los intercambiaveis atraves de uma interface. Assim permitindo que eles mudem independentemente entre os clientes que os utilizam. 

<hr>

<a id="chainOfResponsibility"></a>
### :bomb: Chain of Responsibility <br>

#### Motivação

- Evita dependência do remetente(cliente) de uma requisição ao seu destinatário.
- Evita acoplar o remetente de uma requisição ao seu destinatário ao dar a mais de um objeto a chance de servir a requisição.
- Compõe os objetos em cascata e passa a requisição pela corrente até que um objeto sirva.

<a id="factoryMethod"></a>
## :star2: Factory Method <br>

- Definir uma interface para criar um objeto, mas deixa as subclasses decidirem que classe instanciar.
- Criar uma instancia de varias classes derivadas.

