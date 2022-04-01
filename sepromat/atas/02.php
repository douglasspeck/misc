<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Ata ' . basename(__FILE__, '.php');
        $keywords = '';
        $resources = [];
        $pass = true;
        include '../../assets/php/head.php';
    ?>
<body>
    <?php include '../../assets/php/header.php' ?>
    <main>
        <header>
            <h1>
                <span class="tag">31/03/2022</span>
                <span class="subject"><?php echo $title ?></span>
            </h1>
        </header>
        <section>
            <details class="header-details">
                <summary>Membros Presentes</summary>
                <div class="details-content">
                    <ul>
                        <li>Ana</li>
                        <li>Bruno</li>
                        <li>Douglas</li>
                        <li>Duda</li>
                        <li>Felipe</li>
                        <li>Gustavo Claudino</li>
                        <li>Laura</li>
                    </ul>
                </div>
            </details>
        </section>
        <section>
            <h2>Financeiro: o evento será gratuito ou pago?</h2>
            <p>Essencialmente, depende do patrocínio. A princípio decidimos por cobrar (ajuda de custo).</p>
            <section>
                <h3>Patrocínio</h3>
                <p>Para patrocinar o evento, devemos buscar, essencialmente, por editoras (em especial as universitárias). Além disso, podemos tentar ser patrocinados por empresas grandes, como a Coca-cola e a iFood. No caso das editoras, o foco seriam os brindes do evento, enquanto as demais empresas entrariam com ajuda de custo. Algumas das alternativas citadas:</p>
                <ul>
                    <li>Responde Aí</li>
                    <li>Descomplica</li>
                    <li>Feirinha da Unicamp (pensando em vales)</li>
                </ul>
            </section>
            <section>
                <h3>Verba do IMECC</h3>
                <p>Por outro lado, também temos de solicitar verba ao IMECC. Um dos pontos levados em consideração foi a verba remanescente do CAMECC (que está inativo e, portanto, sem custos).</p>
                <p>A Verba do IMECC seria voltada para a parte de alimentação.</p>
                <p>Para entendermos melhor os parâmetros financeiros que o IMECC nos fornece, temos que falar com o professor <strong>Ricardo Martins Miranda</strong>.</p>
            </section>
            <section>
                <h3>Venda de Produtos</h3>
                <p>Outro tópico relacionado ao aspecto financeiro é a venda de produtos exclusivos da SeProMat. Conversando com aqueles que participaram do evento em 2019, descobrimos que o Ingresso da Sepromat já incluía alguns itens em seu valor.</p>
                <p><strong>Possíveis itens (personalizados) para o Kit:</strong></p>
                <ul>
                    <li>Caneca</li>
                    <li>Copo Eco</li>
                    <li>Bloco de Notas</li>
                    <li>Caneta</li>
                </ul>
                <p>Além disso, é possível vendermos camisetas do evento (não inclusas no valor normal do ingresso). Para podermos fazer essa venda de maneira organizada, ela seria feita de maneira prévia, junto aos primeiros lotes de ingressos para o evento. No caso dos últimos lotes, não seria feita a venda, mas teríamos algumas camisetas extra para vender durante o evento.</p>
            </section>
            <section>
                <h3>Inscrições</h3>
                <p>Como supracitado, é importante organizarmos as inscrições com antecedência, para nos organizarmos, principalmente, em relação aos locais do evento.</p>
                <p>A ideia é fazer a venda dos ingressos em lotes (que vão aumentando o preço) e, antes mesmo desse processo, realizar uma pesquisa de interesse em relação ao evento.</p>
                <p>Para a venda de ingressos e inscrição no evento, foi sugerido que entrássemos em contato com a Funcamp.</p>
                <ul>
                    <li><strong>Vantagens:</strong> o processo não fica na nossa mão e o dinheiro não fica na conta pessoal de ninguém.</li>
                    <li><strong>Desvantagens:</strong> o processo fica muito burocrático (para usar o dinheiro em especial) e há uma taxa sobre os ingressos.</li>
                </ul>
            </section>
        </section>
        <section>
            <h2>Local</h2>
            <p>A princípio, o evento acontece no Auditório do IMECC, mas o mesmo possui uma lotação de 100 pessoas (algo entre 80 e 100 pessoas, no momento). A vantagem de utilizar o mesmo é que não há custo de locação, porém temos medo de que hajam mais pessoas interessadas do que o espaço comporta. Nesse caso temos que fazer a pesquisa prévia para poder definir o local.</p>
        </section>
        <section>
            <h2>Certificados</h2>
            <p>Quanto a isso, apenas confirmamos que a presença será aferida através de uma lista.</p>
        </section>
        <section>
            <h2>Site</h2>
            <p>A responsável pelo site, que criou o mesmo, disse que a ferramenta utilizada foi o <strong>Elementor</strong>, que é baseado em WordPress.</p>
        </section>
        <section>
            <h2>Checklist: o que temos por fazer?</h2>
            <ul class="checklist">
                <li>Orçamento Inicial
                    <ul>
                        <li>Conferir a Verba disponibilizada pelo IMECC
                            <ul>
                                <li>Lembrar de meter o miguezão do "faz dois anos que não acontece o evento"</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Definir a data
                    <ul>
                        <li>Conversar com os professores a respeito da data</li>
                    </ul>
                </li>
                <li>Reservar os espaços (Auditório do IMECC)
                    <ul>
                        <li>na Secretaria de Graduação</li>
                    </ul>
                </li>
                <li>Falar com o Ricardo Miranda</li>
                <li>Falar com o Régis sobre os certificados</li>
            </ul>
        </section>
    </main>
    <?php include '../../assets/php/scripts.php' ?>
</body>
</html>