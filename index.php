<!DOCTYPE html>
<!--Integrantes: Daniel Alarcón, Adalberth Baeza, Jorge Campos.-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Web3</title>
    <script src="JS/ValidacionRut.js"></script>
    <link href="CSS/EstiloRut.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <form>
        <div class="form">
          <h1>Validacion de Rut</h1>
          <label>RUT:</label>
          <input type="text" id="rut" name="rut" required oninput="checkRut(this)" placeholder="Ingrese RUT"><br/>
          <br/>
          <button type="submit">Verificar </button>
        </div>
    </form>
</body>
</html>
