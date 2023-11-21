<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        $title = 'Mapas de Douglas Speck';
        $description = 'Registros pessoais de minhas viagens e informações aleatórias sobre os lugares em que já estive';
        $keywords = '';
        $resources = [];
        include '../assets/php/head.php';
    ?>
<body>
    <main>
        <h1>Núcleo Campinas</h1>
        <section id="map-menu">
            <input type="radio" name="menu" id="input-IES">
            <label for="input-IES">
                <p>IES</p>
                <ul>
                    <li>Não possui IES</li>
                    <li>1-3 IES</li>
                    <li>4-5 IES</li>
                    <li>6+ IES</li>
                </ul>
            </label>
            <input type="radio" name="menu" id="input-agentes">
            <label for="input-agentes">
                <p>Agentes Parceiros</p>
                <ul>
                    <li>Não possui agentes parceiros</li>
                    <li>1-2 agentes parceiros</li>
                    <li>3-4 agentes parceiros</li>
                    <li>5+ agentes parceiros</li>
                </ul>
            </label>
            <input type="radio" name="menu" id="input-ejs-x-ies">
            <label for="input-ejs-x-ies">
                <p>IES x EJs</p>
                <ul>
                    <li>Nenhuma das IES possui EJs</li>
                    <li>0.0 - 0.2</li>
                    <li>0.2 - 0.4</li>
                    <li>0.4 - 0.6</li>
                    <li>0.6 - 0.8</li>
                    <li>0.8 - 1.0</li>
                </ul>
            </label>
            <button onclick="export_StyledSVG(document.getElementById('nuca'));">Exportar</button>
        </section>
        <?php echo(file_get_contents("../assets/img/nuca.svg")) ?>
    </main>
    <script src="/assets/js/maps.js"></script>
</body>
</html>
