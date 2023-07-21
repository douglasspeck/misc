<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Semana do Professor de Matemática';
        $description = 'Registros pessoais do curso de Licenciatura em Matemática na Unicamp';
        $keywords = '';
        $resources = [];
        $pass = true;
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
                <span class="tag">Projetos</span>
                <span class="subject">SeProMat – Semana do Professor de Matemática</span>
            </h1>
            <details class="header-details">
                <summary>Membros</summary>
                <div class="details-content">
                    <?php 
                        $membros = [
                            'Patrocínio' => [
                                /* [nome, apelido] */
                                ['Gustavo Claudino', 'Gustavo'],
                                ['Felipe', 'Felipe'],
                                ['Pedro', 'Pedro'],
                                ['Bruno Marques', 'Queijo']
                            ],
                            'Comunicação' => [
                                ['Douglas', 'Doug'],
                                ['Laura', 'Laura'],
                                ['Ana', 'Chefa'],
                                ['Sofia', 'Sofia']
                            ],
                            'Divulgação' => [
                                ['Duda', 'Duda'],
                                ['Gustavo', 'Gustavo'],
                                ['Stephany', 'Stephany']
                            ]
                        ];
                        echo '<ul>';
                        foreach ($membros as $categoria => $cat) {
                            echo '<li><strong>' . $categoria . '</strong><ul>';
                            foreach ($cat as $cat => $membro) {
                                echo '<li ' . 'title="' . $membro[0] . '">' . $membro[1] . '</li>';
                            }
                            echo '</ul></li>';
                        }
                        echo '</ul>';
                    ?>
                </div>
            </details>
        </header>
        <section>
            <h2>Atas, em ordem cronológica</h2>
            <ul>
                <?php 
                
                $atas = scandir('atas/');
                $atas = array_slice($atas, 2);

                foreach($atas as $ata) {
                    echo '<li><a href="atas/'.$ata.'" target="_blank">Ata ' . basename($ata, '.php') . '</a></li>';
                }
                
                ?>
            </ul>
        </section>
        </main>
    <?php include '../../assets/php/scripts.php' ?>
</body>
</html>