<?php

    $js = ['menu'];
    if (count($js) > 0) {echo '<!-- Scrypts -->';};
    for ($i = 0; $i < count($js); $i++) {
        echo '<script src="/JS/' . $js[$i] . '.js?t=' . date('YmdHis') . '"></script>';
    };

?>