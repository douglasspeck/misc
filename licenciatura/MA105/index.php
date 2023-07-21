<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'MA105 – Matemática Elementar';
        $description = 'Registros pessoais do curso de Licenciatura em Matemática na Unicamp';
        $keywords = '';
        $resources = [];
        include '../../assets/php/head.php';
    ?>
<body>
    <?php
        include '../assets/php/pages.php';
        include '../../assets/php/header.php';
    ?>
    <main>
        <header>
            <h1>
                <span class="tag">MA105</span>
                <span class="subject">Matemática Elementar</span>
            </h1>
        </header>
        <section>
            <h2>Docente</h2>
            <p><strong>Nome:</strong> Mahendra Panthee</p>
        </section>
        <section>
            <h2>Sobre o curso</h2>
            <ul>
                <li><strong>Carga horária:</strong> 8 créditos
                    <ul>
                        <li><strong>19h às 21h:</strong> aulas expositivas</li>
                        <li><strong>21h às 23h:</strong> aulas práticas (tutoria com <abbr title="Currículo Didática Matemática: T. Prática">MA705</abbr>)</li>
                    </ul>
                </li>
            </ul>
        </section>
        <section>
            <h2>Teoria de Conjuntos</h2>
            <p>Um <dfn>Conjunto</dfn> é uma coleção de objetos <strong>bem definfidos</strong> chamados de membros ou elementos.</p>
            <p>Conjuntos são denotados por letras maiúsculas.</p>
            <section>
              <h3>Exemplos:</h3>
              <ul>
                <li>\( A = \{a,e,i,o,u\} \)</li>
                <li>\( \mathbb{N} = \{0,1,2,3,...\} \)</li>
                <li>\( \mathbb{Z}^{+} = \{1,2,3,...\} \)</li>
                <li>\( \mathbb{Z} = \{...,-3,-2,-1,0,1,2,3,...\} \)</li>
              </ul>
            </section>
        </section>
        <section>
            <h2>Polinômios</h2>
            <section>
                <h3>Inequações polinomiais</h3>
                <section>
                    <h4>Roteiro para resolver inequações polinomiais</h4>
                    <ol>
                        <li>Encontrar as raízes do polinômio</li>
                        <li>Formar intervalos utilizando as raízes</li>
                        <li>Verificar o sinal em cada intervalo</li>
                        <li>Unir os intervalos que estão de acordo com a inequação</li>
                    </ol>
                </section>
            </section>
        </section>
        <section>
            <h2>Funções</h2>
            <p>Funções são</p>
            <section>
                <h3>Enunciado Formal</h3>
                <p>\( R \subseteq X \times Y \)</p>
                <p>\( A =  \)</p>
            </section>
            <section>
                <h3>Continuidade de funções</h3>
                <p>Funções contínuas \(y=f\left(x\right)\) são aquelas cujo gráfico não possui quebra.</p>
                <section>
                    <h4>Sinal de uma função contínua</h4>
                    <ul>
                        <li>
                            <p>Se \(f\) é uma função contínua, então sempre que \(f\) passa da parte positiva para a parte negativa ela possui raiz \(x\) em que \(f\left(x\right)=0\)</p>
                        </li>
                        <li>
                            <p><strong>OBS:</strong> todos os polinômios são contínuos</p>
                        </li>
                        <li>
                            O gráfico do polinômio é suave, ou seja, não possui quinas.
                        </li>
                    </ul>
                </section>
                <p><strong>OBS:</strong> entre duas raízes consecutivas sempre há um extremo (máx. ou min.) local de \(P\left(x\right)\)</p>
            </section>
        </section>
        <section>
            <h2>Sequências</h2>
            <p><dfn>Sequências</dfn> (\(S\)) são listas ordenadas de elementos de certo conjunto.</p>
            <p>Podem ser definidas como uma função com domínio contido nos números naturais, isto é:</p>
            <p>$$ A=D\left(S\right) = \{a\mid a\in\mathbb{N}\} $$</p>
            <p>Assim, as sequências podem ser denotadas como:</p>
            <p>$$ S = \left( a_1, a_2, a_3, \dots \right) $$</p>
            <p>Se \( A\subset\mathbb{N} \) é finito, digamos, com \( n \) membros, então a sequência é denominada <strong>finita</strong>.</p>
            <blockquote class="high-quote">
                <p>Na matemática, como a gente sempre pensa...</p>
            </blockquote>
            <section>
                <h3>Termo geral</h3>
                <p>Quando há uma lei de formação para as sequências, é possível denotar o chamado <dfn>termo geral</dfn>, que é uma expressão algébrica em função da posição do termo (valor em \( A \)). O termo geral também é chamado de <strong>n-ésimo</strong> termo, pois denota o valor do termo de posição \( n \).</p>
                <section>
                    <h4>Exemplo:</h4>
                    <p>Ache os 3 primeiros termos e o vigésimo termo das sequências:</p>
                    <ol type="a">
                        <li>\( ai = 5i - 100 \)
                            <ul>
                                <li>\( a_1 = 5\left(1\right) - 100 = -95 \)</li>
                                <li>\( a_2 = 5\left(2\right) - 100 = -90 \)</li>
                                <li>\( a_3 = 5\left(3\right) - 100 = -85 \)</li>
                                <li>\( a_20 = 5\left(20\right) - 100 = 0 \)</li>
                            </ul>
                        </li>
                        <li>\( ai = 2^i \)
                            <ul>
                                <li>\( a_1 = 2^{1} = 2 \)</li>
                                <li>\( a_2 = 2^{2} = 4 \)</li>
                                <li>\( a_3 = 2^{3} = 8 \)</li>
                                <li>\( a_20 = 2^{20} = 1048576 \)</li>
                            </ul>
                        </li>
                    </ol>
                </section>
            </section>
            <section>
                <h3>Lei de formação alternativa</h3>
                <p>É possível encontrar o termo geral da sequência conhecendo o n-ésimo termo e seu antecessor.</p>
            </section>
            <section>
                <h3>Fatorial</h3>
                <p>Definimos fatorial de \( n \), denotado por \( n! \) como sendo o produto de todos os naturais de \( 1 \) a \( n \). Isto é: \( n! = \prod_{k=1}^{n} k \)</p>
            </section>
            <section>
                <h3>Progressões Aritméticas</h3>
                <p>Uma sequência (ou progressão) é chamada de <dfn>Progressão Aritmética</dfn> se \( a_n - a_{n-1} = r \) para qualquer índice \(n\) da sequência.</p>
                <p>Essa diferença \(r\) é denominada <strong>razão</strong> da <abbr title="Progressão Aritmética">P.A.</abbr></p>
                <p>$$ a_n = a_1 + \left( n-1\right)r $$</p>
                <section>
                    <h4>Soma dos termos de uma sequência finita</h4>
                    <p>Podemos denotar a soma dos termos de uma sequência finita através de um somatório:</p>
                    <p>$$ \sum_{i=1}^n a_i = a_1 + a_2 + a_3 + \dots + a_n $$</p>
                    <section>
                        <h5>Propriedades:</h5>
                        <ul>
                            <li>\( \sum_{i=1}^n \left(a_i + b_i\right) = \sum_{i=1}^n a_i + \sum_{i=1}^n b_i \)</li>
                            <li>\( \sum_{i=1}^n \left(k \cdot a_i\right) = k \cdot \sum_{i=1}^n a_i \)</li>
                        </ul>
                    </section>
                    <section>
                        <h5>Somatórios notáveis:</h5>
                        <ul>
                            <li>\( \sum_{i=1}^n 1 = n \)</li>
                            <li>\( \sum_{i=1}^n k = kn \)</li>
                            <li>\( \sum_{i=1}^n i = \dfrac{n\left(n+1\right)}{2} \)</li>
                            <li>\( \sum_{i=1}^n i^2 = \dfrac{n\left(n+1\right)\left(2n+1\right)}{6} \)</li>
                        </ul>
                    </section>
                </section>
            </section>
            <section>
                <h3>Progressões Geométricas</h3>
                <p>Uma sequência (ou progressão) é chamada de <dfn>Progressão Geométrica</dfn> se \( \dfrac{a_n}{a_{n-1}} = r \) para qualquer índice \(n\) da sequência.</p>
                <p>\(r\) é denominado <strong>razão</strong> da <abbr title="Progressão Geométrica">P.G.</abbr></p>
                <p>$$ a_n = a_1 \cdot r^{n-1} $$</p>
                <section>
                    <h4>Soma dos termos de uma <abbr title="Progressão Geométrica">P.G.</abbr></h4>
                    <p class="center">\( S_n = \dfrac{a_1\left(r^n-1\right)}{r-1} ~\) ou \(~ S_n = \dfrac{a_n r - a_1}{r-1} \)</p>
                </section>
            </section>
        </section>
        <section>
            <h2>Logaritmo e Exponencial</h2>
            <section>
                <h3>Soluções de Equações Exponenciais e Logarítmicas</h3>
                <ul>
                    <p><strong>Lembretes:</strong></p>
                    <li>\( a > 0 \)</li>
                    <li>A função exponencial é sempre injetiva.</li>
                </ul>
                <section>
                    <h4>Roteiro para resolver equações exponenciais</h4>
                    <ul>
                        <li>Escrava na forma correta a equação</li>
                        <li>Aplique logaritmo em ambos os lados com a base adequada</li>
                        <li>Simplifique usando propriedades</li>
                    </ul>
                </section>
                <section>
                    <h4>Roteiro para resolver equações logarítmicas</h4>
                    <ul>
                        <li>Escrava na forma correta a equação</li>
                        <li>Aplique logaritmo em ambos os lados com a base adequada</li>
                        <li>Simplifique usando propriedades</li>
                    </ul>
                </section>
            </section>
        </section>
        </main>
    <?php include '../../assets/php/scripts.php' ?>
</body>
</html>
