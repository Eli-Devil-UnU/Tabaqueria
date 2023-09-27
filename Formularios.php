<DOCTYPE! html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Catálogo de Tabaquería</title>
</head>
<body class="hello">
  <header class="header-with-images">
    <img src="/DAWeb_Proyecto/Imagenes/Logo.jpg" alt="Imagen Izquierda" class="header-image left-image">
    <a href="index.php"><h1>Tobacconist #128</h1></a>
    <img src="/DAWeb_Proyecto/Imagenes/Logo.jpg" alt="Imagen Derecha" class="header-image right-image">
  </header>

  
 <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head> 
  <body>
    <div id="nave"><br>
     <div id="nave_wrapper"><br>
       <ul>
         <li><a href="index.php">Inicio</a></li>
         <li><a href="mision.html">Mision</a></li>
         <li><a href="vision.html">Vision</a></li>
         <li><a href="Direccion.html">Direccion</a></li>
         <li><a href="WebMaster.html">WebMaster</a></li>
       </ul>
     </div>
  </div>
  <div id="nave"><br>
     <div id="nave_wrapper"><br>
       <ul>
         <li><a href="Formularios.php">Formularios</a></li>
         <li><a href="Tablas.php">Tablas</a></li>
       </ul>
     </div>
  
      <header>

      <style>
        /* Estilos para la caja de fondo gris */
        .formulario-caja {
            background-color: #ff9900; /* Color de fondo gris */
            padding: 20px; /* Espaciado interno para el contenido */
            border-radius: 10px; /* Borde redondeado */
            width: 400px; /* Ancho de la caja */
            margin: 0 auto; /* Centrar horizontalmente */
        }

        /* Estilos para los campos de entrada */
        label {
            display: block; /* Mostrar etiquetas en líneas separadas */
            margin-bottom: 10px; /* Espaciado inferior entre etiquetas */
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%; /* Ancho completo */
            padding: 10px; /* Espaciado interno */
            margin-bottom: 15px; /* Espaciado inferior entre campos */
        }

        input[type="submit"] {
            background-color: #007bff; /* Color de fondo del botón */
            color: #fff; /* Color de texto del botón */
            padding: 10px 20px; /* Espaciado interno del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Borde redondeado */
            cursor: pointer; /* Cambiar el cursor al pasar el ratón */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Cambiar color de fondo al pasar el ratón */
        }
    </style>

      <h1>Formulario articulos</h1>
        
        <div class="formulario-caja">
        <form method="POST" action="procesar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" required><br><br>

        <label for="id_articulo">Id_Articulo:</label>
        <input type="text" name="id_articulo" id="id_articulo" required><br><br>

        <label for="descriocion">Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" required><br><br>

        <label for="cadusidad">Cadusidad:</label>
        <input type="text" name="cadusidad" id="cadusidad"><br><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria"><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" id="cantidad"><br><br>

        <label for="merma">Merma:</label>
        <input type="text" name="merma" id="merma"><br><br>

        <input type="submit" value="Enviar">
        </form>
        </div>

        <br><br>

        <h1>Formulario Clientes</h1>    
        
        <div class="formulario-caja">
        <form method="POST" action="procesar.php">
        <label for="nombre">INE:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="valor">Nombre:</label>
        <input type="text" name="valor" id="valor" required><br><br>

        <label for="id_articulo">Apellido1:</label>
        <input type="text" name="id_articulo" id="id_articulo" required><br><br>

        <label for="descriocion">Apellido2:</label>
        <input type="text" name="descripcion" id="descripcion" required><br><br>

        <label for="cadusidad">F_Nacimiento:</label>
        <input type="text" name="cadusidad" id="cadusidad"><br><br>

        <label for="categoria">Cuenta:</label>
        <input type="text" name="categoria" id="categoria"><br><br>

        <label for="cantidad">N_Cliente:</label>
        <input type="text" name="cantidad" id="cantidad"><br><br>

        <label for="merma">N_Telefono:</label>
        <input type="text" name="merma" id="merma"><br><br>

        <input type="submit" value="Enviar">
        </form>
        </div>

        <br><br>

        <h1>Formulario Cuentas</h1>    
        
        <div class="formulario-caja">
        <form method="POST" action="procesar.php">
        <label for="nombre">N_Cliente:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="valor">Cliente:</label>
        <input type="text" name="valor" id="valor" required><br><br>

        <label for="id_articulo">Transacciones:</label>
        <input type="text" name="id_articulo" id="id_articulo" required><br><br>

        <label for="descriocion">N_Cuenta:</label>
        <input type="text" name="descripcion" id="descripcion" required><br><br>

        <label for="cadusidad">Saldo:</label>
        <input type="text" name="cadusidad" id="cadusidad"><br><br>

        <label for="categoria">Deuda:</label>
        <input type="text" name="categoria" id="categoria"><br><br>

        <label for="cantidad">Credito:</label>
        <input type="text" name="cantidad" id="cantidad"><br><br>

        <label for="merma">Rango:</label>
        <input type="text" name="merma" id="merma"><br><br>

        <input type="submit" value="Enviar">
        </form>
        </div>

        <br><br>

        <h1>Formulario Empleados</h1>    
        
        <div class="formulario-caja">
        <form method="POST" action="procesar.php">
        <label for="nombre">N_Empleado:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="valor">N_Sucursal:</label>
        <input type="text" name="valor" id="valor" required><br><br>

        <label for="id_articulo">Sueldo:</label>
        <input type="text" name="id_articulo" id="id_articulo" required><br><br>

        <label for="descriocion">Productividad:</label>
        <input type="text" name="descripcion" id="descripcion" required><br><br>

        <label for="cadusidad">D_Descanso:</label>
        <input type="text" name="cadusidad" id="cadusidad"><br><br>

        <label for="categoria">Transacciones:</label>
        <input type="text" name="categoria" id="categoria"><br><br>

        <label for="cantidad">Nombre:</label>
        <input type="text" name="cantidad" id="cantidad"><br><br>

        <label for="merma">Puesto:</label>
        <input type="text" name="merma" id="merma"><br><br>

        <input type="submit" value="Enviar">
        </form>
        </div>

        <br><br>

        <h1>Formulario Sucursal</h1>    
        
        <div class="formulario-caja">
        <form method="POST" action="procesar.php">
        <label for="nombre">N_sucursal:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="valor">Direccion:</label>
        <input type="text" name="valor" id="valor" required><br><br>

        <label for="id_articulo">Supervisor:</label>
        <input type="text" name="id_articulo" id="id_articulo" required><br><br>

        <label for="descriocion">N_Empleados:</label>
        <input type="text" name="descripcion" id="descripcion" required><br><br>

        <label for="cadusidad">Proveedor:</label>
        <input type="text" name="cadusidad" id="cadusidad"><br><br>

        <label for="categoria">V_Diaria:</label>
        <input type="text" name="categoria" id="categoria"><br><br>

        <label for="cantidad">V_Semanal:</label>
        <input type="text" name="cantidad" id="cantidad"><br><br>

        <label for="merma">V_Mensual:</label>
        <input type="text" name="merma" id="merma"><br><br>

        <input type="submit" value="Enviar">
        </form>
        </div>

      </header>

  <footer>
      <a href="WebMaster.html"><h1 class="texto">Jose Elias Melendez Portillo 5°J</h1></a>
  </footer>
</body>
</html>