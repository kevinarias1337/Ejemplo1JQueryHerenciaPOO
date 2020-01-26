<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <head>
        <title>
            JQuery/Herencia/POO en PHP
        </title>
    </head>

    <script>
    function proceso(txtnumero1, txtnumero2, boton){
        switch(boton){
            case "+":
                var parametros={
                    "txtnumero1":txtnumero1,
                    "txtnumero2":txtnumero2,
                    "btnsumar":boton
                };
            break;
            case "-":
                var parametros={
                    "txtnumero1":txtnumero1,
                    "txtnumero2":txtnumero2,
                    "btnrestar":boton
                };
            break;
            case "*":
                var parametros={
                    "txtnumero1":txtnumero1,
                    "txtnumero2":txtnumero2,
                    "btnmultiplicar":boton
                };
            break;
            case "/":
                var parametros={
                    "txtnumero1":txtnumero1,
                    "txtnumero2":txtnumero2,
                    "btndividir":boton
                };
            break;

        }
        $.ajax({
            data:parametros,
            url: 'calcular.php',
            type: 'post',
            beforeSend:
                function(){
                    $('#resultado').html('Cargando...');
                },
            success: 
                function(response){
                    $('#resultado').html(response);
                }
        });
    }
    </script>

    <body>
        <h2>
            JQuery/Herencia/POO en PHP
        </h2>
        <form name="form1" method="POST">
            Numero 1: <input type="text" name="txtnumero1" id="txtnumero1">
            <br>
            Numero 2: <input type="text" name="txtnumero2" id="txtnumero2">
            <br>
            <input type="button" name="btnsumar" id="btnsumar" value="+" 
            onclick="proceso($('#txtnumero1').val(), $('#txtnumero2').val(), $('#btnsumar').val());">

            <input type="button" name="btnrestar" id="btnrestar" value="-" 
            onclick="proceso($('#txtnumero1').val(), $('#txtnumero2').val(), $('#btnrestar').val());">

            <input type="button" name="btnmultiplicar" id="btnmultiplicar" value="*" 
            onclick="proceso($('#txtnumero1').val(), $('#txtnumero2').val(), $('#btnmultiplicar').val());">

            <input type="button" name="btndividir" id="btndividir" value="/" 
            onclick="proceso($('#txtnumero1').val(), $('#txtnumero2').val(), $('#btndividir').val());">

        </form>
        <span id="resultado"></span>

        <script src="jquery-3.4.1.js"></script>
    </body>
</html>