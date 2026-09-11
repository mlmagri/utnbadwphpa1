<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora de Promedios</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Calculadora de promedios</h1>

  <form method="get">
      <div>
        <label for="nombre">Ingresa el nombre del estudiante:</label>
        <input type="text" id="nombre" placeholder="Juan Pérez" name="nombre"/>
      </div>

      <div>
        <label for="nota1">Ingresa nota Primer Trimestre:</label>
        <input type="number" id="nota1" min="1" max="10" pLaceholder="10" name="nota1"/>
      </div>

      <div>
        <label for="nota2">Ingresa nota Segundo Trimestre:</label>
        <input type="number" id="nota2" min="1" max="10" pLaceholder="10" name="nota2"/>
      </div>
        
      <div>
          <label for="nota3">Ingresa nota Tercer Trimestre:</label>
          <input type="number" id="nota3" min="1" max="10" pLaceholder="10" name="nota3"/>
      </div>
      <button type="submit">Enviar</button>
    </form>

    <?php 
      function promedio($nota1, $nota2, $nota3){
        $suma = $nota1 + $nota2 + $nota3;
        $promedio = $suma / 3;
        return $promedio;
      } 

      if( isset($_GET['nombre']) && isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])){
        $nombre = $_GET['nombre'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];

        if($nota1 !== '' && $nota2 !== '' && $nota3 !== ''){        
          echo '<h1>Nombre del Estudiante: ' . $nombre . '</h1>';
          echo '<p>Nota Primer Trimestre: ' . $nota1 . '</p>';
          echo '<p>Nota Segundo Trimestre: ' . $nota2 . '</p>';
          echo '<p>Nota Tercer Trimestre: ' . $nota3 . '</p>';
          $resultadoPromedio = promedio($nota1, $nota2,$nota3);
          echo "<h2>Promedio del estudiante: " . $resultadoPromedio . '</h2>';

          switch (true) {
            case ($resultadoPromedio >= 7):$estado = "Aprobado";
              break;
            case ($resultadoPromedio >= 4):$estado = "Rinde Examen Final";
              break;
            default:
              $estado = "Reprobado";
              break;    
          }

          echo "<h2>Estado: " .$estado . "</h2>";
        } else {
          echo "<p>Por favor, completa todas las notas.</p>";
        
      }
         
      } else{
        echo '<p>Estamos aguardando a que completes el formulario..</p>';
      }
        
    ?>


</body>

  <footer>
    <p>© 2026 - UTN - BA - Desarrollo web con PHP y Wordpress</p>
  </footer>
  
</html>
