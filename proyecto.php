<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Sonda registro</title>
  <img src="" alt="">
  <div class="banner">
  <img class="banner-img1" src="SONDA.jpg"alt="">
  
  
</div>

  

</div>
  <section class="formulario-texto-cab">
 
 
</section>
</head>


<body>



<form action="validar.php" method="POST">
<?php if (!empty($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>

<section class="formulario-input" >

   <h4>Formulario Registro</h4>
    
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de usuario" required >
    
    
    <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Contraseña" required>
    
    
    

   
    <input class="submit" type="submit" value="Registrar">

    
    </form>
  </section>
  <style>
  footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
    </style>
  <footer>
        <p>© 2023 SONDA. Todos los derechos reservados. Plataforma Integral de Desarrollo para los Centros de <br> Gestión y Reducción de Riesgo <a href="info.html">CGRR.</a></p>
    </footer>
</body>
</html>