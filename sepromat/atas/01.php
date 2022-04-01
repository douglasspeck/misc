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
                <span class="tag">22/03/2022</span>
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
                        <li>Gustavo</li>
                        <li>Gustavo Claudino</li>
                        <li>Laura</li>
                        <li>Pedro</li>
                        <li>Sofia</li>
                        <li>Stephany</li>
                    </ul>
                </div>
            </details>
        </section>
        <section>
            <h2>Informações Gerais sobre a SeProMat</h2>
            <ul>
                <li>Essa é a IV SeProMat. Os eventos de 2020 e 2021 eram SeProWeb.</li>
                <li><strong>Gestão Renovada:</strong> Somente Gustavo e Pedro se mantiveram da gestão passada.</li>
                <li><strong>Data:</strong> A SeProMat vai acontecer, a princípio, na primeira semana do segundo semestre (da segunda à sexta).</li>
                <li><strong>Horário:</strong> Palestras à noite, possivelmente workshops à tarde.
                    <ul>
                        <li>Uma palestra + Uma roda de conversa por dia.</li>
                    </ul>
                </li>
                <li><strong>Local:</strong> Auditório do IMECC</li>
                <li><strong>Custo:</strong> R$35 a R$50
                    <ul><li>O valor, além das palestras, garante o direito a uma caneca e uma camiseta do evento.</li></ul>
                </li>
            </ul>
        </section>
        <section>
            <h2>Áreas de Gestão da SeProMat</h2>
            <ul>
                <li><strong>Patrocínio:</strong> Responsável por arrecadar fundos através de patrocinadores e com a Unicamp. Os fundos serão destinados, em especial, para o coffee break.
                    <ul>
                        <li>No fim, esse grupo fica também responsável pelos certificados.</li>
                    </ul>
                </li>
                <li><strong>Comunicação:</strong> Responsável por entrar em contato com os palestrantes e manter a comunicação interna do grupo.
                    <ul>Esse grupo é responsável pelas atas.</ul>
                </li>
                <li><strong>Divulgação:</strong> Responsável pela comunicação com o público, através do meio digital (Instagram) e do meio físico (cartazes e afins).</li>
            </ul>
        </section>
        <section>
            <h2>Possíveis Temas</h2>
            <ul>
                <li><strong>Palestras:</strong>
                    <ul>
                        <li>Novo Ensino Médio</li>
                        <li>Gamificação</li>
                        <li>Ensino e Tecnologia</li>
                        <li>Defasagem do Ensino na Pandemia</li>
                    </ul>
                </li>
                <li><strong>Rodas de Conversa:</strong>
                    <ul>
                        <li>Iniciação Científica (<abbr title="Iniciação Científica">IC</abbr>) com Rita</li>
                        <li>Museu Exploratório da Unicamp</li>
                        <li>Editoração e Criação de Material Didático com Julia</li>
                        <li>Caminhos para o Intercâmbio</li>
                        <li>Como estimular o Pensamento Olímpico
                            <ul><li>Pro-Olímpico (<abbr title="Instituto de Matemática Pura e Aplicada">IMPA</abbr>)</li></ul>
                        </li>
                        <li>O desafio das minorias no Ensino da Matemática</li>
                    </ul>
                </li>
                <li><strong>Workshops:</strong>
                    <ul>
                        <li>Museu Exploratório da Unicamp</li>
                    </ul>
                </li>
            </ul>
        </section>
    </main>
    <?php include '../../assets/php/scripts.php' ?>
</body>
</html>