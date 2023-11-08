<?php

    $active_page = str_replace('.php', '', $_SERVER['REQUEST_URI']);
    $active_page = str_replace('/', '', $active_page);

    echo '
        <header id="menu">
        <div id="menu-tag" onclick="toggleMenu()">
            <span class="h-bar"></span>
            <span class="h-bar"></span>
            <span class="h-bar"></span>
        </div>
        <a href="../" title="Página Inicial">tresdoug</a>
        <nav>';
    
            for ($i = 0; $i < count($pages); $i++) {
                
                echo '<a href="../../' . $folder_path . $pages[$i][1];

                echo '" class="menu';

                if ($pages[$i][1] == $active_page || $pages[$i][1] == '/' && $active_page == '') { echo ' active'; }

                echo '"';

                if ($pages[$i][0] !== '') { echo ' title="' . $pages[$i][0] . '"'; }

                echo '>' . $pages[$i][2] . '</a>';

            };
    
    echo '</nav>
    </header>';

?>