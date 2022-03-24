<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Semana do Professor de Matemática';
        $keywords = '';
        $resources = [];
        include '../PHP/head.php';
    ?>
<body>
    <?php include '../PHP/header.php' ?>
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
                                ['Queijo', 'Queijo']
                            ],
                            'Comunicação' => [
                                ['Douglas', 'Doug'],
                                ['Laura', 'Laura'],
                                ['Ana', 'Chefa']
                            ],
                            'Divulgação' => [
                                ['Duda', 'Duda'],
                                ['Gustavo', 'Gustavo'],
                                ['Stephane', 'Stephane']
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
        </main>
    <?php include '../PHP/scrypts.php' ?>
</body>
</html>