<?php

    $pages = [
        ['Home', '', 'Página Inicial'],
        ['EL213', 'EL213/', 'Libras e Educação de Surdos'],
        ['EL683', 'EL683/', 'Escola e Cultura'],
        ['MA104', 'MA104/', 'Seminários sobre o Ensino da Matemática'],
        ['MA105', 'MA105/', 'Matemática Elementar'],
        ['MA141', 'MA141/', 'Geometria Analítica e Vetores'],
        ['MA148', 'MA148/', 'Fundamentos da Matemática'],
        ['Semana do Professor de Matemática', 'sepromat/', 'SeProMat']
    ];

    $active_page = str_replace('.php', '', $_SERVER['REQUEST_URI']);
    $active_page = str_replace('/', '', $active_page);

    echo '
        <header id="menu">
        <div id="menu-tag" onclick="toggleMenu()">
            <span class="h-bar"></span>
            <span class="h-bar"></span>
            <span class="h-bar"></span>
        </div>
        <a href="../" title="Página Inicial">Licenciatura<br>em Matemática</a>
        <nav>';
    
            for ($i = 0; $i < count($pages); $i++) {
                
                echo '<a href="../' . $pages[$i][1];

                echo '" class="menu';

                if ($pages[$i][1] == $active_page || $pages[$i][1] == '/' && $active_page == '') { echo ' active'; }

                echo '"';

                if ($pages[$i][0] !== '') { echo ' title="' . $pages[$i][0] . '"'; }

                echo '>' . $pages[$i][2] . '</a>';

            };
    
    echo '</nav>
    </header>';

?>