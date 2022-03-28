<?php

    $js = ['menu'];
    if (count($js) > 0) {echo '<!-- Scrypts -->';};
    for ($i = 0; $i < count($js); $i++) {
        echo '<script src="/assets/js/' . $js[$i] . '.js?t=' . date('YmdHis') . '"></script>';
    };

    /* MathJax */
    echo '<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>';

?>