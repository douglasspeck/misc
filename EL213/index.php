<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'EL213 – LIBRAS e Ensino de Surdos';
        $keywords = '';
        $resources = [];
        include '../PHP/head.php';
    ?>
<body>
    <?php include '../PHP/header.php' ?>
    <main>
        <header>
            <h1>
                <span class="tag">EL213</span>
                <span class="subject">Libras e Ensino de Surdos</span>
            </h1>
            <details class="header-details">
                <summary>Professora Aryane Santos Nogueira</summary>
                <div class="details-content">
                    <p>Doutora em Linguística Aplicada na área de Multiculturalismo, Plurilinguismo e Educação Bilíngue.<br>Formada em fonoaudiologia, especializada em surdez, especializada em educação de surdos</p>
                </div>
            </details>
        </header>
        <section>
            <h2>Informações sobre a disciplina</h2>
            <ul>
                <li><strong>PADs:</strong> Emanuelli e Davi;</li>
                <li>Essa disciplina é uma disciplina sob o processo de pesquisa (por isso tivemos que assinar o <abbr title="Termo de Consentimento e Livre Esclarecimento">TCLE</abbr>).</li>
                <li><strong class="upper">Objetivos:</strong>
                    <ol>
                        <li><strong>Prático:</strong> Conhecimentos básicos de LIBRAS:
                            <ul>
                                <li>Utilizar repertório da LIBRAS para comunicação básica/inicial.</li>
                                <li>Habilidades de compreensão e produção em LIBRAS.</li>
                            </ul>
                        </li>
                        <li><strong>Teórico:</strong>
                            <ul>
                                <li>Compreender as implicações das especificidades sociohistóricas e linguísticas da surdez para a docência na educação básica.</li>
                                <li>Educação de Surdos <span class="arr-r"></span> a disciplina não serve apenas para aprender LIBRAS, mas para aprender as metodologias de ensino que devem ser aplicadas no ensino de alunos surdos.</li>
                            </ul>
                        </li>
                    </ol>
                </li>
                <li><strong class="upper">Critérios de Aprovação:</strong>
                    <ul>
                        <li>Ter feito todas as 03 atividades avaliativas;</li>
                        <li>Ter atingido, pelo menos, média 5,0;</li>
                        <li>Ter, pelo menos, 75% de frequência na disciplina (equivale a 03 faltas);</li>
                    </ul>
                </li>
            </ul>
            <section>
                <h3>Links Úteis</h3>
                <ul>
                    <li><a href="https://www.ines.gov.br/dicionario-de-libras/" target="_blank">Dicionário de Libras (<abbr title="Instituto Nacional de Educação de Surdos">INES</abbr>)</a></li>
                    <li><a href="https://sistemas.cead.ufv.br/capes/dicionario/?cadastros=tudo-bem&term=temas&value=cumprimentos" target="_blank">Dicionário de Libras (<abbr title="Universidade Federal de Viçosa">UFV</abbr>)</a></li>
                </ul>
            </section>
        </section>
        <section>
            <h2>Aula 1: Introdução</h2>
            <section>
                <h3>Prática de LIBRAS</h3>
                <section>
                    <h4>Sinais Estudados</h4>
                    <ul>
                        <?php
                            $sinais = ['olá','nome', 'idade'];
                            include '../PHP/sinais.php';
                        ?>
                    </ul>
                </section>
                <section>
                    <h4>Informações Adicionais</h4>
                    <ul>
                        <li>Na <dfn>datilologia</dfn> (soletração <strong>manual</strong>), os sinais são, via de regra, feitos com a palma da mão <strong>para a frente</strong>.
                            <ul>
                                <li>Os números, por outro lado, são sinalizados, via de regra, com a palma da mão virada <strong>para trás</strong>.</li>
                                <li>Ainda quanto aos números, é importante atentar-se ao fato de que há <strong>varios modelos numéricos</strong>, que diferenciam os números "comuns" de quantidades.</li>
                            </ul>
                        </li>
                        <li>Na datilologia, é possível fazer um movimento de dentro para fora ou manter a mão parada.
                            <ul>
                                <li>No caso da repetição de letras, é feito um movimento de <strong>arrastar</strong> (de dentro para fora, mais comum) ou de repetição (aproximação e afastamento, menos comum).</li>
                            </ul>
                        </li>
                        <li>No caso de palavras/nomes compostos, usa-se o sinal de <a href="sinais/espaço.php" target="sinais">Espaço</a>.</li>
                        <li>Para representar a acentuação, "desenha-se" o acento <strong>após</strong> a letra.</li>
                        <li>É importante atentar-se ao <strong><dfn>Espaço de sinalização</dfn></strong>, que é a área visual em que devemos produzir os sinais.</li>
                        <li>Entonação é apontada por expressões faciais <strong>e corporais</strong>.
                            <ul>
                                <li>
                                    No caso de uma <strong>pergunta</strong>, o padrão é franzir a testa e movimentar a cabeça.
                                </li>
                            </ul>
                        </li>
                        <li>Via de regra, dá pra suprimir o "eu" (e outros pronomes da primeira pessoa) das frases, porque <strong>o corpo que sinaliza já é o do indivíduo</strong>.</li>
                    </ul>
                    <blockquote class="high-quote">Libras é uma língua visual, gestual e espacial</blockquote>
                </section>
            </section>
            <section>
                <h3>A surdez em números</h3>
                <ul>
                    <li>1,5 bilhões de pessoas no mundo possuem algum grau de perda auditiva.
                        <ul>
                            <li>80% vivem em países de baixa e média renda.</li>
                        </ul>
                    </li>
                    <li>9,6 milhões de pessoas com deficiência auditiva no Brasil (~5%).</li>
                    <li>2,1 milhões são surdes ou escutam muito pouco.</li>
                    <li>5 em cada 1000 bebês nascem com perda auditiva ou adquirem após o nascimento.
                        <ul>
                            <li>mais de 90% nascem em famílias ouvintes.</li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section>
                <h3>Minorias linguísticas?</h3>
                <p>Quais os cursos de ação necessários para o fortalecimento desses grupos?</p>
                <ul>
                    <li>Mobilização do próprio grupo.</li>
                    <li>Legislação.</li>
                    <li>Educação do entorno <span class="arr-r"></span> educar a sociedade como um todo.</li>
                </ul>
                <blockquote class="high-quote">Visibilidade ≠ Reconhecimento</blockquote>
            </section>
        </section>
        <section>
            <h2>Aula 2: O surdo e a surdez</h2>
            <p>Referência Bibliográfica: <a href="libras-que-lingua-e-essa.php">Libras? que língua é essa?</a></p>
            <section>
                <h3>Surdo ou deficiente auditivo?</h3>
            </section>
            <section>
                <h3>Aspectos biológicos da surdez</h3>
                <ul>
                    <li>O pavilhão auditivo concentra as ondas sonoras em direção ao canal auditivo.</li>
                    <li>O som passa pelo canal auditivo e faz vibrar a membrana timpânica.</li>
                    <li>Essa membrana movimenta os ossículos que transmitem o movimento para a cóclea.</li>
                    <li>A cóclea transforma a vibração mecânica em impulsos elétricos.</li>
                </ul>
            </section>
        </section>
    </main>
    <?php include '../PHP/scripts.php' ?>
</body>
</html>