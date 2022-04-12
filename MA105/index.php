<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'MA105 – Matemática Elementar';
        $keywords = '';
        $resources = [];
        include '../assets/php/head.php';
    ?>
<body>
    <?php include '../assets/php/header.php' ?>
    <main>
        <header>
            <h1>
                <span class="tag">MA105</span>
                <span class="subject">Matemática Elementar</span>
            </h1>
            <details class="header-details">
                <summary>Professor Mahendra</summary>
                <div class="details-content">
                    <p></p>
                </div>
            </details>
        </header>
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
            Funções são
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
        </main>
    <?php include '../assets/php/scripts.php' ?>
</body>
</html>
