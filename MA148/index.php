<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'MA148 – Fundamentos da Matemática';
        $keywords = '';
        $resources = [];
        include '../assets/php/head.php';
    ?>
<body>
    <?php include '../assets/php/header.php' ?>
    <main>
        <header>
            <h1>
                <span class="tag">MA148</span>
                <span class="subject">Fundamentos da Matemática</span>
            </h1>
            <details class="header-details">
                <summary>Professora Laura Rifo</summary>
                <div class="details-content">
                    <p></p>
                </div>
            </details>
        </header>
        <section>
            <h2>Aula introdutória</h2>
            <ul>
                <li><strong>livro:</strong> Stewart, I. <i lang="en">Foundations of Mahematics</i></li>
                <li>Escrever matemática é importante para manter o ritmo do pensamento</li>
                <li>A linguagem usada por um professor deve ser clara para o aluno (por exemplo: algebrização).
                    <blockquote>
                        <p>Em matemática, o que importa são as <strong>noções</strong> e não as <strong>notações</strong></p>
                        <cite>Gauss</cite>
                    </blockquote>
                </li>
                <li><strong>livro:</strong> Álgebra em Quadrinhos
                    <ul>
                        <li>de acordo com a professora, deveria ser livro-texto</li>
                        <li>Faz parte de uma coleção que inclui dois livros de mesma linguagem porém sobre Cálculo e Estatística</li>
                    </ul>
                </li>
            </ul>
            <section>
                <h3>O que você acha que um professor de matemática deve saber?</h3>
                <ul>
                    <li>Comunicação
                        <ul>
                            <li>Ativa: fala, escuta</li>
                            <li>Passiva: escrita</li>
                        </ul>
                    </li>
                    <li>Dar exemplos</li>
                    <li>Dinâmica de ensino</li>
                    <li>Provocar/estimular identificação com o conteúdo matemático</li>
                    <li>Lidar com diferenças</li>
                    <li>Criar exercícios/problemas</li>
                    <li>Transmitir o conhecimento/raciocínio</li>
                    <li>Geometria Diferencial (bruh)</li>
                    <li>Conteúdo matemático</li>
                    <li>Norma culta</li>
                    <li>Linguagens Inclusivas</li>
                    <li>História da Matemática</li>
                    <li>Desenhar</li>
                    <li>Usar instrumentos (compasso, etc), inclusive digitais</li>
                    <li>Demonstrar</li>
                    <li>Contextualizar o conteúdo</li>
                    <li>Montar plano de aula</li>
                    <li>Respeitar o nível/tempo de aprendizagem</li>
                    <li>Estar aberto a aprender</li>
                    <li>Conhecer a <dfn><abbr title="Base Nacional Curricular Comum">BNCC</abbr></dfn> (Base Nacional Curricular Comum)</li>
                    <li>Material de divulgação de matemática</li>
                    <li>Estimular a autonomia</li>
                </ul>
            </section>
            <section>
                <h3>Que tipo de conhecimento usamos?</h3>
                <ol tupe="i">
                    <li>conhecimento de conteúdo matemático a ser ensinado;</li>
                    <li>conhecimento de conteúdo pedagógico/didático:
                        <ul>
                            <li>identificar sinais</li>
                            <li>horizonte de conhecimento</li>
                            <li>pesquisa matemática</li>
                            <li>dúvida <span class="arr-r"></span> formulação <span class="arr-r"></span> raciocínio</li>
                        </ul>
                    </li>
                    <li>o <strong>fazer</strong> matemática (horizonte matemático)</li>
                    <li>currículo de ensino (O que ensinar? Quando? Como?)</li>
                </ol>
            </section>
            <section>
                <h3>Resolução de problemas</h3>
                <ol type="i">
                    <li>ler e entender o problemas
                        <ul>
                            <li>o que está sendo pedido?</li>
                            <li>o que conheço?</li>
                        </ul>
                    </li>
                    <li>criar estratégias de resolução
                        <ul>
                            <li>"fuçar" o problema
                                <ul>
                                    <li>buscar exemplos/casos específicos</li>
                                    <li>diagramar/fluxogramar</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>formalização do raciocínio</li>
                    <li>auto-correção (verificar a solução)</li>
                </ol>
            </section>
        </section>
        <section>
            <h2>Números Naturais</h2>
            <p>São usados desde a infância para contar objetos.</p>
        </section>
        <section>
            <h2>Para Soltar a Mão</h2>
            <section>
                <h3>Mostre que 3 não tem raízes quadradas racionais.</h3>
                <section>
                    <h4>Definições</h4>
                    <p>Vamos demonstrar que \(3\) não possui raízes quadradas racionais através de uma prova por contradição.</p>
                    <p>\( \textbf{A}:\Leftrightarrow 3\) possui raízes racionais.</p>
                </section>
            </section>
<!--
    $ \neg\textbf{A}:\Leftrightarrow 3$ não possui raízes racionais.

    \subsubsection{demonstração}

    Definição de raízes:
    \begin{equation}
        \textbf{A} \Rightarrow q^2 = 3 \mid q \in \mathbb{Q}
    \end{equation}

    Definição de racionais:
    \begin{equation}
        \Rightarrow q = \frac{m}{n} \mid m,n \in \mathbb{N} \Rightarrow \left(\frac{m}{n}\right)^2 = 3
    \end{equation}

    De acordo com o \textbf{Teorema Fundamental da Aritmética}, todo número inteiro diferente de $-1$, $0$ e $1$ pode ser escrito como o produto de números primos. Logo, 
    \begin{equation*}
        m = \prod_{k=1}^{r} p_{k}^{a_{k}},~n = \prod_{k=1}^{r} p_{k}^{b_{k}}
    \end{equation*}

    onde $p_{k}$ é o \textit{k-ésimo} primo e $a_{k},b_{k}$ são inteiros positivos. Logo,
    \begin{equation}
        \left( \frac{m}{n} \right)^2 = \prod_{k=1}^{r} \left( \frac{p_{k}^{a_{k}}}{p_{k}^{b_{k}}} \right)^2 = \prod_{k=1}^{r} \left( p_{k}^{a_{k}-b_{k}} \right)^2 = \prod_{k=1}^{r} p_{k}^{2\left( a_{k}-b_{k} \right)}
    \end{equation}

    Reescrevemos o expoente dos fatores primos, tal que:
    \begin{equation}
        a_k,b_k \in \mathbb{N} \Rightarrow c_k=a_k-b_k \mid c_k \in \mathbb{Z}
    \end{equation}

    Logo:
    \begin{equation}
        (3) \wedge (4) \Rightarrow \left( \frac{m}{n} \right)^2 = \prod_{k=1}^{r} p_{k}^{2c_k}
    \end{equation}

    Isso é, $q^2$ pode ser escrito como o produto de primos com expoentes pares. Sendo $3$ um número primo, ele é o único fator dele próprio. Logo, de acordo com o \textbf{Princípio da Unicidade da Decomposição} (apontado no Teorema Fundamental da Aritmética), temos que:
    \begin{equation}
        (2) \wedge (5) \Rightarrow 3 = 3^{2c} \Rightarrow 2c = 1 \Rightarrow c = \frac{1}{2} \Rightarrow c \notin \mathbb{Z}
    \end{equation}

    Assim sendo, $(6)$ contradiz $(4)$, o que nos permite escrever:
    \begin{equation*}
        [~(4) \Rightarrow (6)~] \wedge [~(4) \Leftrightarrow \neg (6)~] \Rightarrow \neg (4)
    \end{equation*}

    Logo:
    \begin{equation*}
        [~\textbf{A} \Rightarrow (4)~] \wedge \neg (4) \Rightarrow \neg \textbf{A}
    \end{equation*}

    $\therefore 3$ não possui raízes racionais. \qed{}

    \subsection{Mostre que $5$ não tem raízes quadradas racionais.}

    \subsubsection{definições}

    Vamos demonstrar que $5$ não possui raízes quadradas racionais através de uma prova por contradição.

    $ \textbf{B}:\Leftrightarrow 5$ possui raízes racionais.

    $ \neg\textbf{B}:\Leftrightarrow 5$ não possui raízes racionais.

    \subsubsection{demonstração}

    Definição de raízes:
    \begin{equation}
        \textbf{B} \Rightarrow q^2 = 5 \mid q \in \mathbb{Q}
    \end{equation}

    Definição de racionais:
    \begin{equation}
        \Rightarrow q = \frac{m}{n} \mid m,n \in \mathbb{N} \Rightarrow \left(\frac{m}{n}\right)^2 = 5
    \end{equation}

    $\textbf{B} \Rightarrow (3) \Rightarrow (4) \Rightarrow (5)$

    Sendo $5$ um número primo, ele é o único fator dele próprio. Logo, de acordo com o \textbf{Princípio da Unicidade da Decomposição} (apontado no Teorema Fundamental da Aritmética), temos que:
    \begin{equation}
        (8) \wedge (5) \Rightarrow 5 = 5^{2c} \Rightarrow 2c = 1 \Rightarrow c = \frac{1}{2} \Rightarrow c \notin \mathbb{Z}
    \end{equation}

    Assim sendo, $(9)$ contradiz $(4)$, o que nos permite escrever:
    \begin{equation*}
        [~(4) \Rightarrow (9)~] \wedge [~(4) \Leftrightarrow \neg (6)~] \Rightarrow \neg (4)
    \end{equation*}

    Logo:
    \begin{equation*}
        [~\textbf{B} \Rightarrow (4)~] \wedge \neg (4) \Rightarrow \neg \textbf{B}
    \end{equation*}

    $\therefore 5$ não possui raízes racionais. \qed{}

    \subsection{Mostre que \sfrac{3}{4} não tem raízes quadradas racionais}

    \subsubsection{definições}
    Vamos demonstrar que \sfrac{3}{4} não possui raízes quadradas racionais através de uma prova por contradição.

    Já demonstramos no exercício anterior que $3$ não possui raízes racionais. É deste ponto que iremos partir.

    $ \textbf{C}:\Leftrightarrow$ \sfrac{3}{4} possui raízes racionais.

    $ \neg\textbf{C}:\Leftrightarrow$ \sfrac{3}{4} não possui raízes racionais.

    \subsubsection{demonstração}

    Definição de raízes:
    \begin{equation}
        \textbf{C} \Rightarrow q^2 = \frac{3}{4} \mid q \in \mathbb{Q}
    \end{equation}

    Definição de racionais:
    \begin{equation}
        \Rightarrow q = \frac{m}{n} \mid m,n \in \mathbb{N} \Rightarrow \left(\frac{m}{n}\right)^2 = \frac{3}{4}
    \end{equation}

    Manipulando a equação:
    \begin{equation}
        \Rightarrow \frac{m^2}{n^2} = \frac{3}{4} \Rightarrow \frac{4m^2}{n^2} = 3 \Rightarrow \left(\frac{2m}{n}\right)^2 = 3
    \end{equation}

    Sabendo que o produto de dois números naturais é um número natural, podemos constatar que $2m$ é natural. Além disso, a razão de dois números naturais é um número racional. Nesse caso, $\frac{2m}{n}$ é racional.

    Logo, sabendo que $3$ não possui raízes racionais, dizer que $\left(\frac{2m}{n}\right)^2 = 3$ é um absurdo.

    Em suma:

    \begin{equation*}
    [~\textbf{C} \Rightarrow (12) \wedge \neg (12)~] \Rightarrow \neg \textbf{C}
    \end{equation*}

    $\therefore \dfrac{3}{4}$ não possui raízes racionais. \qed{}
-->
        </section>
        <section>
            <h2>Sequências</h2>
            <p><dfn>Sequênicas</dfn> são listas <strong>ordenadas</strong> de elementos.</p>
            <p>Trabalhamos com sequências numéricas</p>
            <section>
                <h3>Notação</h3>
                <p>\( \left(a_n\right)_{n\in\mathbb{N}} = \left(a_{1},a_{2},a_{3},\dots\right) \)</p>
                <p>Podemos descever uma sequência através de um termo geral \(a_{n}\).</p>
            </section>
            <section>
                <h3>Exemplos</h3>
                <ol>
                    <li>
                        <p>
                            \( a_n = n \)
                        </p>
                        <p>Sequência de números naturais</p>
                    </li>
                    <li>
                        <p>\( a_n = 2n - 1 \)</p>
                        <p>Sequência de números ímpares</p>
                    </li>
                    <li>
                        <p>\( a_n = \left(-1\right)^{n}, n \ge 1 \)</p>
                        <p>\( \left(-1,1,-1,1,\dots\right) \)</p>
                    </li>
                    <li>
                        <p>\( \{ a_0=0; a_1=0.2; a_n=0.25, n \ge 2 \)</p>
                        <p>Sequência de expansão decimal de \(\frac{1}{4}\)</p>
                    </li>
                    <li>
                        <p>\( a_n = \left( \sum_{k=0}^{n} \frac{1}{10^k} \cdot 6 \right) - 6\)</p>
                        <p>\( \left(0, 0.6, 0.66, 0.666, \dots \right) \)</p>
                    </li>
                </ol>
            </section>
            <section>
                <h3>Um exemplo para lidar com operações</h3>
                <p>\( a_n=\left(\frac{1}{2}\right)^n l, n \ge 1 \)</p>
                <p>\( b_n=\left(\frac{1}{2}\right)^n l, n \ge 1 \)</p>
                <p><strong>Lição de casa:</strong> \(c_n = a_n\) para todo \(n\in\mathbb{N}\)</p>
            </section>
        </section>
        </main>
    <?php include '../assets/php/scripts.php' ?>
</body>
</html>