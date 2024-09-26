<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos da Feira Tecnológica</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/projeto.css">
    <?php
            include('../assets/components/head.php')
        ?>
</head>
<body>
        <?php
            include('../assets/components/header.php')
         ?>
     
     <div class="header">
             <h1 class="H1">Projetos da Feira Tecnológica</h1>
    </div>         

    <div class="search-container">
        <input type="text" placeholder="Pesquisar projeto..." class="search-bar">
    </div>

    <div class="filter-container">
        <button class="filter-button" id="openFilter">Filtro</button> 
        <div class="filter-modal" id="filterModal" style="display: none;">
            <h4>Curso</h4>
            <select class="filter-select">
                <option value="" disabled selected>Selecione o curso</option>
                <option value="Administração">Administração</option>
                <option value="Logística">Logística</option>
                <option value="Recursos Humanos">Recursos Humanos</option>
                <option value="Informática">Informática</option>
                <option value="Contabilidade">Contabilidade</option>
                <option value="Química">Química</option>
            </select>

            <h4>Série</h4>
            <select class="filter-select">
                <option value="" disabled selected>Selecione a série</option>
                <option value="1º Ano">1º Ano</option>
                <option value="2º Ano">2º Ano</option>
                <option value="3º Ano">3º Ano</option>
                <option value="1º Módulo">1º Módulo</option>
                <option value="2º Módulo">2º Módulo</option>
                <option value="3º Módulo">3º Módulo</option>
            </select>

            <div class="filter-buttons">
                <button class="apply-button">Aplicar</button>
                <button class="clear-button">Limpar</button>
            </div>
        </div>
    </div>

    <script src="../assets/js/projeto.js"></script>
</body>
</html>