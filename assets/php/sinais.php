<?php

    if ($sign_list_type == 'paragraph') {
        echo '<p><a class="" href="sinais?s=' . $sinais[0] . '" target="sinais">' . $sinais[0] . '</a>';
        for ($i = 1; $i < count($sinais); $i++) {
            echo ', <a class="" href="sinais?s=' . $sinais[$i] . '" target="sinais">' . $sinais[$i] . '</a>';
        };
        echo '</p>';
    } else {
        for ($i = 0; $i < count($sinais); $i++) {
            echo '<li><a class="" href="sinais?s=' . $sinais[$i] . '" target="sinais">' . $sinais[$i] . '</a></li>';
        };
    }

?>