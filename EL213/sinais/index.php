<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Lista de Sinais Estudados';
        $keywords = '';
        $resources = [];
        include '../../PHP/head.php';
    ?>
<body>
    <?php include '../../PHP/header.php' ?>
    <main>
        <header>
            <h1>
                <span class="tag">Lista</span>
                <span class="subject">Sinais Estudados na disciplina</span>
            </h1>
        </header>
        <section>
            <ul>
                <?php
                
                    $sign_list = json_decode(file_get_contents('sinais.json'));
                    foreach ($sign_list->{"sign_list"} as $sign) {
                        echo '<li><details><summary>' . ucfirst($sign->{"sign"}) . '</summary><p>' . $sign->{"content"} . '</p></details></li>';
                    }
                
                ?>
            </ul>
        </section>
        </main>
    <?php include '../../PHP/scripts.php' ?>
</body>
</html>