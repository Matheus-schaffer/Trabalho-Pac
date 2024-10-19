<?php
$titulo = "Algoritimos";
$imagemSrc = './img/img-algor.png';
include 'nav.php';
?>

<div class="content">



    <h1 class="titulo-conteudo">Algoritimos</h1>

    <div class="box-conteudo">
        <p>Os algoritmos são sequências de instruções que o computador segue para resolver problemas ou realizar tarefas, funcionando como um passo a passo. Por exemplo, ao acessar um site, algoritmos determinam como a página é carregada e como as interações, como cliques em links, são processadas. Em essência, podem ser comparados a uma receita de bolo, que deve ser seguida rigorosamente. No entanto, as "receitas" para computadores são mais literais e objetivas, utilizando uma linguagem específica que as máquinas compreendem para executar cada ação.</p>
    </div>
    <br>
    <br>

    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img id="img-exemplo1" src="./img/img-exemplo-algoritimos.jpeg" alt="">
    <br>
    <br>
    <br>
    <br>

    <h2 class="titulo-conteudo">Comandos de entrada e saída</h2>
    <div class="box-conteudo">
        <p>Em programação C, comandos de entrada e saída (Input/Output) são usados para interagir com o usuário ou com outros dispositivos. Aqui estão os principais:  </p>
    </div>

    <br>
    <br>

    <h2>Entrada</h2>
    <div class="box-conteudo">
        <p>Os comandos de entrada permitem que o programa receba dados do usuário. O mais comum é a função scanf, que lê dados a partir da entrada padrão (normalmente o teclado). </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-2.png" alt="">

    <br>
    <br>
    <br>

    <h2>Saída</h2>
    <div class="box-conteudo">
        <p>Os comandos de saída exibem informações para o usuário. O mais utilizado é a função printf, que imprime dados na saída padrão (normalmente a tela).  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-3.png" alt="">

    <br>
    <br>
    <br>

    <h2 class="titulo-conteudo">Condicional</h2>
    <div class="box-conteudo">
        <p>Uma estrutura condicional permite que um programa tome decisões com base em condições específicas. As condicionais permitem executar diferentes blocos de código dependendo do resultado de uma expressão booleana (verdadeira ou falsa). As condicionais são fundamentais em programação, permitindo a criação de lógicas complexas e a interação do programa com diferentes estados e entradas.  </p>
    </div>

    <br>
    <br>
    <br>

    <h2 class="titulo-conteudo">Principais estruturas condicionais</h2>
    <br>
    <h2>.if</h2>
    <div class="box-conteudo">
        <p>A estrutura mais básica. Se a condição for verdadeira, o bloco de código dentro do if é executado.  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-4.png" alt="">
    <br>
    <br>
    <br>

    <h2>.if-else</h2>
    <div class="box-conteudo">
        <p>Permite executar um bloco de código se a condição for verdadeira e outro se for falsa.  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-5.png" alt="">

    <br>
    <br>
    <br>

    <h2>.else-if</h2>
    <div class="box-conteudo">
        <p>Usado para testar múltiplas condições. Se a primeira condição for falsa, o programa verifica a próxima, e assim por diante.  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-6.png" alt="">

    <br>
    <br>
    <br>

    <h2>.switch</h2>
    <div class="box-conteudo">
        <p>Uma alternativa ao if-else quando se tem várias condições que verificam o mesmo valor. Ele é útil para comparar uma variável a várias constantes.  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-7.png" alt="">

    <br>
    <br>

    <div class="box-conteudo">
        <p>UM EXEMPLO USANDO IF, ELSE-IF & ELSE  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-8.png" alt="">

    <br>
    <br>
    <br>

    <h2 class="titulo-conteudo">Laços de repetição</h2>
    <br>
    <div class="box-conteudo">
        <p>Os laços de repetição (ou loops) são estruturas que permitem executar um bloco de código várias vezes, enquanto uma condição for verdadeira ou até que uma condição seja atendida, eles são fundamentais para automatizar tarefas repetitivas e manipular conjuntos de dados. São uma parte essencial da programação em C e em muitas outras linguagens, permitindo criar soluções mais eficientes e compactas para problemas repetitivos.  </p>
    </div>

    <br>
    <br>
    <br>

    <h2 class="titulo-conteudo">Principais estruturas condicionais</h2>
    <br>
    <h2>.for</h2>
    <div class="box-conteudo">
        <p>Usado quando se sabe o número exato de iterações. É comum para iterar sobre arrays ou executar um bloco de código um número fixo de vezes.  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-9.png" alt="">
    <br>
    <br>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-10.png" alt="">
    <br>
    <br>
    <br>
    <h2>.while</h2>
    <div class="box-conteudo">
        <p>Executa um bloco de código enquanto a condição for verdadeira. A condição é verificada antes de cada iteração.  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-11.png" alt="">
    <br>
    <br>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-12.png" alt="">

    <br>
    <h2>.do-while</h2>
    <div class="box-conteudo">
        <p>Semelhante ao while, mas a condição é verificada após a execução do bloco de código. Isso garante que o código dentro do do seja executado pelo menos uma vez.  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-13.png" alt="">
    <br>
    <br>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-14.png" alt="">

    <br>
    <br>
    <br>

    <h2 class="titulo-conteudo">Controle de laços</h2>
    <br>
    <div class="box-conteudo">
        <p>Você pode controlar a execução de laços com comandos como break (para sair do laço) e continue (para pular para a próxima iteração).  </p>
    </div>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo com break</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-15.png" alt="">
    <br>
    <br>
    <h2 class="sub-titulo-conteudo">Exemplo com continue</h2>
    <img class="img-exemplos-codigo" src="./img/img-exemplo-algoritimos-16.png" alt="">

    <br>
    <br>
    <br>
    <h3>Um pouco mais de algoritmos</h3>

    <div class="card-container">
        <div class="card">
            <img src="./img/livro-algo-c.jpeg" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
                <h5 class="card-title">Algoritmos em linguagem C</h5>
                <p class="card-text">livro discute algoritmos para alguns problemas básicos de computação </p>
                <a href="https://www.ime.usp.br/~pf/algoritmos-livro/slides/SLIDES-A-print.pdf" class="btn btn-primary">Acessar</a>
            </div>
        </div>

        <div class="card">
            <img src="./img/img-video-algor-guana.jpeg" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
                <h5 class="card-title">Introdução a Algoritmos - Gustavo Guanabara</h5>
                <p class="card-text">Video aula do Curso de Algoritmo criado pelo professor Gustavo Guanabara</p>
                <a href="https://www.youtube.com/watch?v=8mei6uVttho&list=PL21rh82DRnmobAWFir6DxPuTOa82myc8_&ab_channel=CursoemV%C3%ADdeo" class="btn btn-primary">Acessar</a>
            </div>
        </div>

        <div class="card">
            <img src="./img/img-site-algo-c.JPG" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
                <h5 class="card-title">dicas de como escrever algoritmos em linguagem C</h5>
                <p class="card-text">Site com algumas dicas</p>
                <a href="https://manoelcampos.gitbooks.io/logica-programacao/content/dicas-linguagem-c.html" class="btn btn-primary">Acessar</a>
            </div>
        </div>
    </div>


</div>


<?php
include 'footer.php';
?>