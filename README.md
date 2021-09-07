<h1 align="center">
  Design Patterns
</h1>

# :bookmark_tabs: Índice

- [Objetivo](#objetivo)

- Padrões de Criação
    - [Singleton](#singleton)
    - [Builder](#builder)
    - [Factory Method](#factoryMethod)
    - [Abstract Factory](#abstractFactory)
    - [Prototype](#prototype)

- Padrões Estruturais 
    - [Adapter](#adapter)
    - [Decorator](#decorator)
    - [Proxy](#proxy)
    - [Bridge](#bridge)
    - [Composite](#composite)
    - [Façade](#facade)
    - [Flyweight](#flyweight)

- Padrões Comportamento
    - [Strategy](#strategy)
    - [Chain of Responsibility](#chainOfResponsibility)
    - [Command](#command)
    - [State](#state)
    - [Observer](#observer)
    - [Mediator](#mediator)
    - [Template Method](#templateMethod)
    - [Interpreter](#interpreter)
    - [Memento](#memento)

<br><br>
<a id="objetivo"></a>
## :dart: Objetivo

- Aqui foram implementados os padrões de projeto mais usados com a última especificação da linguagem <b>PHP</b> para fins de estudo.

<hr>

<a id="singleton"></a>
## :gem: Singleton <br>

#### Estrutura principal

- Método construtor é privado.
- Método "getInstance" responsável por criar o objeto.
- Ele verifica se o objeto existe, caso contrario cria.
- Possui outros métodos como uma classe qualquer.

#### Motivação

- Uma única conexão com o banco de dados.
- Um único acesso ao sistema de arquivos do sistema.
- Sistema de logs.
- Não há parâmetros para a sua construção.
- Acessível de uma forma global.

#### Consequências => Singleton como um Anti-Pattern

- Alto acoplamento.
- Acesso global de um objeto.
- Não é thread safe.
- Dificuldade para trabalhar com testes.

<hr>

<a id="adapter"></a>
## :wrench: Adapter <br>

#### Motivação

- Converte a ‘interface’ de uma classe em outra que é esperada pelo cliente.
- Permitir que a classe que não possuem uma ‘interface’ comum trabalhem de forma conjunta.
- Deixar a possibilidade de futuras implementações para o cliente provendo uma ‘interface’ para os seus adaptadores.

#### Conceito

- Client - é quem vai receber o produto do adapter.
- Target - é o alvo, é a interface que o cliente tem que implementar.
- Adapter - é quem vai implementar a interface na classe cliente.

<hr>

<a id="decorator"></a>
## :christmas_tree: Decorator <br>

#### Motivação

- Uma alternativa para a criação de subclasses para estender funcionalidades. A intenção é anexar dinamicamente responsabilidades adicionais flexíveis a um objeto.
- Aprimorar a extensibilidade do objeto, pois as alterações são feitas a codificar novas classes.
- Simplifica o desenvolvimento permitindo uma série de classes com funcionalidades específicas, ao invés de codificar todo o comportamento do objeto.

<hr>

<a id="builder"></a>
## :package: Builder <br>

#### Motivação

- Permite que a separação da construção de um objeto complexo da sua representação.
- Permite que uma classe se preocupe com apenas uma parte da construção de um objeto. É util em algoritmos de construção complexos.
    - É usado quando o algoritmo para criar um objeto complexo precisar ser independente das partes que o compõem e da mesma forma como o ele é construido.
- Também suporta substituição dos construtores, permitindo que a mesma ‘interface’ seja usada para construir representações diferentes dos mesmos dados.
    - è usado quando o processo de construção precisar suportar representações diferentes do objeto que vai ser construido.

<hr>

<a id="strategy"></a>
## :dart: Strategy <br>

#### Motivação

- Definir um grupo de algoritmos, encapsular cada um, e fazê-los intercambiáveis através de uma ‘interface’. 
- Assim permitindo que eles mudem independentemente entre os clientes que os utilizam. 

<hr>

<a id="chainOfResponsibility"></a>
## :bomb: Chain of Responsibility <br>

#### Motivação

- Evita dependência do remetente(cliente) de uma requisição ao seu destinatário.
- Evita acoplar o remetente de uma requisição ao seu destinatário ao dar a mais de um objeto a oportunidade de servir a requisição.
- Compõe os objetos em cascata e passa a requisição pela corrente até que um objeto sirva.

<hr>


<a id="factoryMethod"></a>
## :star2: Factory Method <br>

#### Motivação

- Definir uma ‘interface’ para criar um objeto, mas deixa as subclasses decidirem que classe instanciar.
- Criar uma instância de várias classes derivadas.

<hr>


<a id="abstractFactory"></a>
## :star2: Abstract Factory <br>

#### Motivação

- Fornecer uma ‘interface’ para criação de famílias de objetos relacionados ou dependentes sem especificar as suas classes concretas.
- Cria uma instância de várias famílias de classes.

<hr>

<a id="prototype"></a>
## :station: Prototype <br>

#### Motivação

- Especifica os objetos a serem criados usados uma instância do protótipo e criar objetos pela cópia deste protótipo.
- Uma instância a ser copiada ou clonada.

<hr>

<a id="bridge"></a>
## :bridge_at_night: Bridge

#### Motivação

- Separar o objeto de sua representação e de usa implementação, separando ele em objeto, implementação e a sua abstração.

<hr>

<a id="proxy"></a>
## :part_alternation_mark: Proxy

#### Motivação

- Fornece um substituto (surrogate) ou marcador da localização de outro objeto para controlar o acesso ao mesmo.
- Faz um objeto ser representado por outro.

<hr>

<a id="composite"></a>
## :open_hands: Composite

#### Motivação

- Compor objetos em estruturas de árvore para representarem hierarquias partes do todo.
- O composite permite aos clientes tratarem de maneira uniforme objetos individuais e composições de objetos.

<a id="facade"></a>
## :tada: Façade

<hr>

#### Motivação

- Fornecer uma ‘interface’ unificada para um conjunto de ‘interfaces’ num subsistema.
- Façade define uma ‘interface’ de nível mais alto que torna o subsistema mais fácil de ser usado.
- Uma única classe representa um subsistema inteiro.

<hr>

<a id="flyweight"></a>
## :balloon: Flyweight

#### Motivação

- Usa o compartilhamento para suportar eficientemente grandes quantidades de objetos de granularidade fina.

<hr>

<a id="command"></a>
## :balloon: Command

#### Motivação

- Encapsular uma solicitação como um objeto, desta forma permitindo parametrizar clientes com diferentes solicitações.
- Enfileirar ou fazer o registro de solicitações e suportar operações que podem ser desfeitas.
- Encapsular comandos como um objeto.

<hr>

<a id="state"></a>
## :smile: State

#### Motivação

- Permite a um objeto alterar seu comportamento quando o seu estado interno muda. O objeto parecera ter mudado sua classe.
- Alterar o comportamento de um objeto quando seu estado muda.

<hr>

<a id="observer"></a>
## :flushed: Observer

#### Motivação

- Definir uma dependência um-para-muitos entre objetos, de maneira que quando um objeto muda de estado todos os seus dependentes são notificados e atualizados automaticamente.

<hr>

<a id="mediator"></a>
## :eyes: Mediator

#### Motivação

- Definir um objeto que encapsula a forma como um conjunto de objetos interage O Mediator promove o acoplamento fraco ao evitar que os objetos se refiram uns aos outros explicitamente e permite variar as suas interações independentemente.
- Definir uma comunicação simplificada entre as classes.

<hr>

<a id="templateMethod"></a>
## :eyes: Template Method

#### Motivação

- Definir o esqueleto de um algoritmo numa operação, postergando alguns passos para a subclasse esse padrão permite que subclasses definam certos passos de um algoritmo sem mudar a estrutura do mesmo.

<hr>

<a id="interpreter"></a>
## :suspect: Interpreter

#### Motivação

- Dada uma linguagem, definir uma representação para a sua gramática com um interpretador que usa representação para interpretar sentenças da linguagem.
- Uma forma de incluir elementos da linguagem num programa.
- Usa classes para representar cada regra de uma gramática (expressão regular).

<hr>

<a id="memento"></a>
## :trollface: Memento

#### Motivação

- Sem violar o encapsulamento, capturar e externalizar um estado interno de um objeto, de maneira que o objeto possa ser restaurado para este estado mais tarde.
