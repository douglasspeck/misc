<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'EL213 – Libras e Ensino de Surdos';
        $keywords = '';
        $resources = [];
        include '../assets/php/head.php';
    ?>
<body>
    <?php include '../assets/php/header.php' ?>
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
                        <li><strong>Prático:</strong> Conhecimentos básicos de Libras:
                            <ul>
                                <li>Utilizar repertório da Libras para comunicação básica/inicial.</li>
                                <li>Habilidades de compreensão e produção em Libras.</li>
                            </ul>
                        </li>
                        <li><strong>Teórico:</strong>
                            <ul>
                                <li>Compreender as implicações das especificidades sociohistóricas e linguísticas da surdez para a docência na educação básica.</li>
                                <li>Educação de Surdos <span class="arr-r"></span> a disciplina não serve apenas para aprender Libras, mas para aprender as metodologias de ensino que devem ser aplicadas no ensino de alunos surdos.</li>
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
            <h2>Introdução</h2>
            <section>
                <h3>Prática de Libras</h3>
                <section>
                    <h4>Sinais Estudados</h4>
                    <ul>
                        <?php
                            $sinais = ['olá','nome', 'idade'];
                            include '../assets/php/sinais.php';
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
                    <blockquote class="high-quote">
                        <p>Libras é uma língua visual, gestual e espacial</p>
                    </blockquote>
                    <ul>
                        <li>Alfabeto Manual</li>
                        <li>Sinais</li>
                        <li>Classificadores</li>
                    </ul>
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
                <picture>
                    <img src="../assets/img/legal-recognition-of-sign-languages.png" alt="Infográfico apresentando o reconhecimento legal das línguas de sinais ao redor do mundo."></img>
                    <legend>Infográfico apresentando o reconhecimento legal das línguas de sinais ao redor do mundo. <strong>Fonte:</strong> <a href="https://wfdeaf.org/news/the-legal-recognition-of-national-sign-languages/" target="_blank"><abbr title="World Federation of the Deaf">WFD</abbr></a></legend>
                </picture>
                <section>
                    <h4>Convenção Internacional sobre os Direitos das Pessoas com Deficiência (<abbr title="Convention on the Rights of Persons with Disabilities">CRPD</abbr>)</h4>
                    <ul class="flowchart">
                        <li><strong>182</strong> Estados Partes ratificaram a CRPD</li>
                        <li><strong>62</strong> reconheceram oficialmente suas línguas de sinais nacionais através de um instrumento legal</li>
                        <li><strong>66%</strong> dos Estados Partes da CRPD ainda não cumpriram suas obrigações <cite>WFD</cite></li>
                    </ul>
                </section>
                <blockquote class="high-quote">Visibilidade ≠ Reconhecimento</blockquote>
            </section>
        </section>
        <section>
            <h2>O surdo e a surdez</h2>
            <p>Referência Bibliográfica: <a href="libras-que-lingua-e-essa.php">Libras? que língua é essa?</a></p>
            <section>
                <h3>Aspectos biológicos da audição</h3>
                <ul>
                    <li>O pavilhão auditivo concentra as ondas sonoras em direção ao canal auditivo.</li>
                    <li>O som passa pelo canal auditivo e faz vibrar a membrana timpânica.</li>
                    <li>Essa membrana movimenta os ossículos que transmitem o movimento para a cóclea.</li>
                    <li>A cóclea transforma a vibração mecânica em impulsos elétricos.</li>
                </ul>
                <p><strong>Vídeo: </strong><a href="https://www.youtube.com/watch?v=FLUwYCHFVas" target="_blank" title="Vídeo sobre como a audição funciona">Como funciona a Audição?</a></p>
                <section>
                    <h4>Aspectos biológicos da surdez</h4>
                    <p>Uma das principais características da surdez é a sua variabilidade.</p>
                    <p>Às vezes, no ambiente escolar, os professores têm acesso à ficha médica (laudo) dos alunos surdos, onde pode constar:</p>
                    <ul>
                        <li>Lateralidade (unilateral ou bilateral);</li>
                        <li>Grau de surdez;</li>
                        <li>Uso de tecnologias assistivas;
                            <ul>
                                <li>Os aparelhos auditivos servem para amplificar os sons do ambiente, reduzindo os efeitos da perda auditiva.</li>
                                <li>Por outro lado, o implante coclear é um processador auditivo, isto é, ele recebe o som ambiente e transforma o mesmo em impulsos elétricos que são aplicados na cóclea.</li>
                                <li>Há também o Sistema FM, que transmite sem fio a fala do professor (captada por um microfone de lapela) para o aparelho do aluno diretamente.</li>
                                <li>É importante constar que, mesmo com o uso de tecnologias, a comunicação oral de pessoas surdas ainda é dificultada.</li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </section>
            <section>
                <h3>Aspectos da aprendizagem surda</h3>
                <p>Para melhorar a participação de alunos surdos em sala de aula, algumas medidas podem ser tomadas:</p>
                <ul>
                    <li>Sempre comunicar-se de frente para a turma;</li>
                    <li>Posicionar o aluno mais à frente no mapa de sala;</li>
                </ul>
                <p>Quanto à <strong>Leitura Labial</strong>, é uma ferramenta usada por poucaspessoas e com muitos agravantes:</p>
                <ul>
                    <li>Pelos faciais;</li>
                    <li>Dicção (lacunas na dicção)</li>
                    <li>Fonemas com a mesma estrutura ("bato"/"pato")</li>
                </ul>
                <section>
                    <h4>Aprendizagem incidental</h4>
                    <p>São informações obtidas sem que haja a intenção de ensinar. Ocorre, em especial, na primeira infância (até os 7 anos).</p>
                    <p>Crianças ouvintes acabam associando informações faladas pelas pessoas ao redor, mas crianças surdas, evidentemente, não conseguem processar essas informações. Por conta disso, é fundamental que a surdez seja identificada o mais cedo possível, para que a criança possa ser educada de maneira apropriada.</p>
                </section>
                <section>
                    <h4><strong><dfn>Modelo clínico-terapêutico</dfn></strong></h4>
                    <ul>
                        <li>Enxerga a surdez como uma <strong>deficiência/problema</strong>, encarando o surdo como alguém incapacitado.</li>
                        <li>Por ser vista como doença, a surdez é tratada com <strong>reabilitação auditiva</strong>.</li>
                        <li>São feitas intervenções tecnológicas e cirúrgicas para tentar "normalizar" os surdos.</li>
                        <li>É defendida a <strong>Educação Especial</strong>, isto é, a segregação dos alunos surdos e educação dos mesmos à parte.</li>
                    </ul>
                </section>
                <section>
                    <h4><strong><dfn>Modelo socioantropológico</dfn></strong></h4>
                    <ul>
                        <li>Enxerga a surdez como uma <strong>diferença linguística e cultural</strong>.</li>
                        <li>Há elementos culturais que diferenciam as pessoas surdas e compõem uma identidade própria.</li>
                        <li>É defendida a <strong>Educação Bilíngue</strong>, isto é, o uso da língua de sinais unida à língua oral.</li>
                    </ul>
                </section>
            </section>
        </section>
        <section>
            <h2>Aspectos da Gramática da Libras</h2>
            <p>Referência Bibliográfica: <a href="../assets/DOCS" title="Libras – uma introdução – capítulo 4" target="_blank">Aspectos da gramática da Libras</a></p>
            <ul>
                <li>Novamente há um relato da história da Língua de Sinais até os dias de hoje.</li>
                <li>No Brasil, a língua de sinais fora proibida por um tempo e foi oficializada em 2002, tendo sua regulamentação somente em 2005.</li>
                <li>O primeiro curso de Letras/Libras teve início em 2006, na modalidade de ensino àdistância, com dois tipos de formação:
                    <ul>
                        <li><strong>Licenciatura: </strong>formação de professores de Libras</li>
                        <li><strong>Bacharelado: </strong>formação de intérpretes de Libras</li>
                    </ul>
                </li>
                <li>Em 2009 o curso passou a ser ofertado na modalidade presencial, na <abbr title="Universidade Federal de Santa Catarina">UFSC</abbr></li>
                <li>Em 2010 foram oficializadas as profissões de intérprete e tradutor de Libras.</li>
            </ul>
            <section>
                <h3 id="aula-3-1">A língua de sinais tem gramática?</h3>
                <ul>
                    <li>William Stokoe</li>
                    <li>Linguística Cartesiana</li>
                    <li>Nome antigo, proposto por Stokoe, para a fonologia das línguas de sinais: quirologia (<i>quir-</i> do grego, significa mão)</li>
                    <li>Par mínimo: contraste de dois itens lexicais ("palavras") com base em um único componente.</li>
                </ul>
                <section>
                    <h4>Parâmetros de sinalização:</h4>
                    <ul>
                        <li>Configuração de mão (CM)
                            <ul>
                                <li>Formato da mão</li>
                                <li>Existem, atualmente, 64 numerações para as configurações de mão. O número 4, por exemplo,possui a configuração de mão [58].</li>
                            </ul>
                            <img src="../assets/img/libras-configuracoes-de-mao.png" alt="Montagem demonstrando todas as configurações de mão da Libras" height="400">
                        </li>
                        <li>Ponto de articulação (PA) ou locação (L)
                            <ul>
                                <li>Onde o sinal é realizado</li>
                                <li>A maior parte é realizada no chamado <strong>Espaço Neutro</strong>, que é o espaço de sinalização</li>
                            </ul>
                        </li>
                        <li>Movimento (M): indicado por uma seta</li>
                        <li>Orientação da <strong>palma</strong> da mão (O)
                            <ul>
                                <li>flexão de verbos</li>
                                <li>negativa ("querer" e "não querer", por exemplo)</li>
                            </ul>
                        </li>
                        <li>Expressões não-manuais (ENM)
                            <ul>
                                <li>Acompanham o sinal</li>
                                <li>Normalmente estão associados a emoções e sentimentos</li>
                                <li>Alguns morfemas possuem ENM como parâmetro. Nesse caso, se eu mudar a ENM ou não fizer a mesma, deixa de ser um morfema e passa a ser uma sentença. Por exemplo: se eu fizer o sinal FELIZ sem ENM, eu estou dizendo, ironicamente, que "estou feliz".</li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <section>
                    <h4>Marcadores não manuais</h4>
                    <p>Além dos parâmetros de sinalização, há um uso extensivo de <strong>marcadores não manuais</strong>. Diferente das línguas orais, onde entonação, velocidade, expressões faciais, entre outros, são traços <strong>paralinguísticos</strong>, nas línguas de sinais as expressões faciais e corporais são <strong>elementos gramaticais</strong> que compõem a estrutura da língua. Nesse caso, podem atuar como um componente lexical, seja <q>uma referência pronominal, uma partícula negativa, um advérbio, um modificador ou uma marca de aspecto.</q> <cite>Ferreira Brito, 1995:240</cite>.</p>
                </section>
                <section>
                    <h4>Semelhanças entre as línguas orais e de sinais</h4>
                    <p>A nível estrutural, todas as línguas são combinações de unidades simples.</p>
                    <blockquote>
                        <p>
                            Portanto, para compreender a gramática de uma língua, é preciso apreender e estudar as regras de formação e de combinação de seus elementos, e também perceber os diferentes contextos de uso de determinados sinais.
                        </p>
                        <cite>Góes, A. M. <i lang="la">et al</i></cite>
                    </blockquote>
                    <section>
                        <h5>Sistemas combinatórios discretos</h5>
                        <ul class="flowchart">
                            <li>Sentenças e frases</li>
                            <li>Palavras</li>
                            <li>Morfemas</li>
                            <li>Fonemas</li>
                        </ul>
                    </section>
                </section>
                <section>
                    <h4>Diferenças entre as línguas orais e de sinais</h4>
                    <p>Via de regra, as línguas de sinais incorporam as unidades <strong>simultaneamente</strong>, enquanto as línguas orais tendem a organizar essas unidades <strong>sequencialmente</strong>. Isso se deve, é claro, ao canal de comunicação de cada língua.</p>
                </section>
            </section>
            <section>
                <h3>Sinais Estudados</h3>
                <ul>
                    <li>Sinais de Família/Parentesco</li>
                    <li>Verbos mais usados</li>
                    <li>Conectivo "e" é substituído por "TAMBÉM"</li>
                    <li>Profissão/prática</li>
                    <li>Profissional</li>
                    <li>Curso/cursar</li>
                    <li>Disciplina/Matéria</li>
                    <li>Licenciatura</li>
                    <li>Professor</li>
                    <li>Morar/Casa</li>
                    <li>Cidade</li>
                    <li>Bairro</li>
                    <li>Rua</li>
                    <li>Avenida</li>
                    <li>País</li>
                    <li>Barão Geraldo</li>
                    <li>Campinas</li>
                    <li>São Paulo</li>
                    <li>Junto</li>
                    <li>Gato</li>
                    <li>Cachorro</li>
                    <li>Dia/Data</li>
                    <li>Aniversário</li>
                    <li>Nascimento</li>
                    <li>Festa</li>
                </ul>
            </section>
            <section>
                <h3>Recomendações de Conteúdo</h3>
                <ul>
                    <li><strong>Filme:</strong> The Sound of Metal</li>   
                    <li><strong>Série:</strong> Crisálida</li> 
                    <li><strong>Filme:</strong> Coda (No Ritmo do Coração)</li>
                </ul>
            </section>
        </section>
        <section>
            <h2>Primeira aula presencial</h2>
            <p>
                As aulas presenciais de Libras diferenciam-se das aulas remotas por dois principais fatores: a dificuldade de sinalizar (que acontece nas aulas remotas e não acontece nas presenciais) e a interatividade (que é muito maior presencialmente).
            </p>
            <blockquote class="high-quote">
                <p>Agora  as coisas vão se misturar um pouco mais</p>
            </blockquote>
            <section>
                <h3>Pronomes interrogativos</h3>
            </section>
        </section>
        <section>
            <h2>Língua vs. Linguagem</h2>
            <p>A <dfn>Linguagem</dfn> é a capacidade humana de produzir, desenvolver e compreender a Língua.</p>
            <p>A <dfn>Língua</dfn>, por sua vez, é o "conjunto organizado de elementos (sons e gestos) que possibilitam a comunicação. Surge em sociedade e pode manifestar-se através de sons ou gestos.</p>
            <section>
                <h3>Níveis linguísticos da Libras</h3>
                <ul>
                    <li><strong>fonológicos</strong> <span class="arr-r"></span> construção de fonemas
                        <ul>
                            <li>movimentos circulares <span class="arr-r"></span> repetição</li>
                            <li>movimentos repetitivos <span class="arr-r"></span> plural</li>
                        </ul>
                    </li>
                    <li><strong>morfológicos</strong> <span class="arr-r"></span> construção de palavras/morfemas
                        <ul>
                            <li>Verbos ancorados</li>
                        </ul>
                    </li>
                    <li><strong>sintáticos</strong> <span class="arr-r"></span> formação de frases
                        <ul>
                            <li><q>Eu favoreço o uso da ordem</q></li>
                            <li>Sujeito-Verbo-Objeto</li>
                            <li>Expressões não-manuais
                                <ul>
                                    <li>Podem concordar com o movimento</li>
                                    <li>Podem expressar negação</li>
                                    <li>Podem expressar confirmação</li>
                                    <li>Podem expressar interrogação
                                        <ul>
                                            <li>Perguntas de sim/não <span class="arr-r"></span> franze a testa e abaixa a cabeça</li>
                                            <li>Perguntas em geral (incluindo com pronomes interrogativos) <span class="arr-r"></span> ergue a cabeça</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>É comum na libras a chamada <strong>topicalização</strong>, onde desloca-se o elemento principal de uma sentença para o começo da mesma, de modo a destacá-lo.</li>
                        </ul>
                    </li>
                    <li><strong>semânticos</strong> <span class="arr-r"></span> sentido</li>
                    <li><strong>pragmáticos</strong> <span class="arr-r"></span> contexto</li>
                </ul>
            </section>
            <section>
                <h3>Análise contrastiva</h3>
                <ul>
                    <li>expressões faciais/corporais <strong>não</strong> são elementos paralinguísticos</li>
                    <li>o sujeito nem sempre é marcado</li>
                    <li>não usamos alguns elementos, como artigos, preposições e verbos de ligação</li>
                    <li>movimento e direção</li>
                </ul>
            </section>
        </section>
        <section>
            <h2>Verbos em Libras</h2>
            <section>
                <h3>Direcionalidade</h3>
                <p>Na Libras, os verbos podem ser direcionais ou não-direcionais, de acordo com a concordância do verbo na sentença.</p>
                <ul>
                    <li><strong>direcionais:</strong> possuem concordância</li>
                    <li><strong>não-direcionais:</strong> não possuem concordância, normalmente estão ancorados no corpo</li>
                    <li><strong>incorporação da negação:</strong> alguns verbos podem incorporar a negação da sentença, mudando seu sinal</li>
                </ul>
            </section>
            <section>
                <h3>Formação de frases</h3>
                <ul class="flowchart">
                    <li>sujeito</li>
                    <li>verbo</li>
                    <li>objeto</li>
                </ul>
                <p>Para indicar sujeito e objeto, utilizamos do <strong>apontamento</strong> (que também é usado em alguns pronomes). Além disso, é possível a construção de um <strong>cenário</strong>, onde posicionamos esses elementos.</p>
                <p>É comum na Libras, também, a criação de um <strong>referente imaginário</strong>, isto é, utiliza-se o apontamento em direção a um espaço "vazio" do espaço neutro, indicando que aquela posição denota um determinado sujeito ou objeto.</p>
                <p>Na formação</p>
                <p>Toda sentença em Libras possui um "foco", o qual denominamos de <strong>escopo</strong>. O escopo é o ponto de maior intensidade do tom da sentença. Isto é, as ENM relacionadas à sentença (interrogação, negação, etc) devem ser mais fortes no escopo ou devem partir do mesmo.</p>
            </section>
            <section>
                <h3>Noções temporais</h3>
                <p>Os verbos em Libras <strong>não possuem variação temporal</strong>.</p>
                <p>As noções temporais em Libras podem ser apontadas através da inclinação do corpo:</p>
                <ul>
                    <li>Os fenômenos narrados no presente são sinalizados com o corpo ereto</li>
                    <li>Os fenômenos narrados no passado são sinalizados com o corpo levemento inclinado para trás.</li>
                    <li>Os fenômenos narrados no futuro são sinalizados com o corpo levemento inclinado para frente.</li>
                </ul>
                <section>
                    <h4>Passado</h4>
                    <ul>
                        <li>ONTEM</li>
                        <li>ANTEONTEM</li>
                        <li>PASSADO</li>
                        <li>JÁ</li>
                        <li>HÁ-MUITO-TEMPO</li>
                    </ul>
                </section>
                <section>
                    <h4>Presente</h4>
                    <ul>
                        <li>AGORA/HOJE</li>
                    </ul>
                </section>
                <section>
                    <h4>Futuro</h4>
                    <ul>
                        <li>AMANHÃ</li>
                        <li>FUTURO</li>
                        <li>DEPOIS</li>
                        <li>PRÓXIMO</li>
                    </ul>
                </section>
            </section>
        </section>
    </main>
    <?php include '../assets/php/scripts.php' ?>
</body>
</html>