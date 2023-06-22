<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Doadores</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Cadastro para Doadores</h1>
        
        @if($error == true)
            <input type="hidden" id="error" value="{{$errorTxt}}">
        @endif

        <div class="div-add-container">
            @include('components.inputs')
        </div>
    </div>

    <div class="div-list-container">
        <h1>Listagem dos Doadores</h1>
        
        <div class="div-list-table-container">
            @include('components.tableList')
        </div>
    </div>


    <div class="div-alert-container">
        <span></span>
    </div>

    <script src="js/script.js"></script>
</body>
</html>