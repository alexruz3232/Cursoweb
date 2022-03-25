<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewpoert" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Instalar Bootstrap5</title>
  </head>
  <body>
    <div class="container text-center">
    <h1>Programando con JavaScript</h1><hr>
    <form action="">
      <input type="text" class="form-control" id="objeto1" placeholder="Digita un numero"/>
    +<input type="text" class="form-control" id="objeto2" placeholder="Digita el segundo numero">
<input type="submit" value="Calcular" onclick="Calcular();">
    </form>
    </div>
    <script>
    function Calcular(){
      numero1 = document.get.ElementById('objeto1').value;
      numero2 = document.get.ElementById('objeto2').vale;
      numero1 = parseInt(numero1);
      numero2 = parseInt(numero2);
      suma = numero1 + numero2;
      alert("El resultado es: "+suma);

    }
    </script>
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>
