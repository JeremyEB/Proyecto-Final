<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vademecum</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="Imagenes/ImagenNuevaParaIcono.ico" type="image/x-icon">
    <!-- CSS only   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 
</head>
<body>
    <header class="Header-Container">
        <img src="Imagenes/Cruz_FarmaciaNew.png" title="Cruz" class="Img1">
        <h1>Vademecum</h1>
    </header>
    <nav class="nav-main">
        <ul class="nav-menu">
            <a href="Index.html" class="Enlace"><li>Inicio</li></a>
            <a href="Sobre_Nosotros.html" class="Enlace"><li>Sobre Nosotros</li></a>
            <a href="Contacto.html" class="Enlace"><li>Contactos</li></a>
            <a href="Producto.html" class="Enlace"><li>Productos</li></a>
        </ul>
    </nav>
      <?php
      $Componente = $_POST['Componente'];

      if ($Componente == "Azitromicina") {
        echo '
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Laboratorio</th>
                <th scope="col">Presentacion</th>
                <th scope="col">Concentracion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Azitrom</th>
                <td>Ethical</td>
                <td>PASTILLA/SUSPENSION</td>
                <td>500MG PAST, 200MG JBE</td>
                </tr>
                <tr>
                <th scope="row">Azitromicina</th>
                <td>MK</td>
                <td>PASTILLA/SUSPENSION</td>
                <td>500MG PAST, 800MG JBE</td>
                </tr>
                <tr>
                <th scope="row">Azitromicina</th>
                <td>IF</td>
                <td>PASTILLA/SUSPENSION</td>
                <td>500MG PAST, 200MG JBE</td>
                </tr>
                <tr>
                <th scope="row">Azitromicina</th>
                <td>Gary</td>
                <td>PASTILLA/SUSPENSION</td>
                <td>500MG PAST, 200MG JBE</td>
                </tr>
            </tbody>
        </table>
        ';
      }
      elseif ($Componente == "Acetaminofen") {
        echo '
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Laboratorio</th>
                <th scope="col">Presentacion</th>
                <th scope="col">Concentracion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Sinedol</th>
                <td>Sued</td>
                <td>PASTILLA/JARABE/GOTAS</td>
                <td>500MG PAST, 250MG JBE</td>
                </tr>
                <tr>
                <th scope="row">Sinedol Ultra</th>
                <td>Sued</td>
                <td>Pastilla</td>
                <td>750MG</td>
                </tr>
                <tr>
                <th scope="row">Dolenol</th>
                <td>*</td>
                <td>PASTILLA/JARABE</td>
                <td>500MG PAST, 250MG Jarabe</td>
                </tr>
                <tr>
                <th scope="row">Dolenol Ultra</th>
                <td>*</td>
                <td>Pastilla</td>
                <td>250MG JBE</td>
                </tr>
                <tr>
                <th scope="row">Acetaminofen</th>
                <td>MK</td>
                <td>PAST/JBE</td>
                <td>500MG PAST, 250MG JARABE</td>
                </tr>
                <tr>
                <th scope="row">Acetaminofen</th>
                <td>ROWE</td>
                <td>PASTILLA/JARABE/SUPOSITORIO</td>
                <td>500MG PAST, 250MG JBE, 100MG SUPOSITORIO</td>
                </tr>
                <tr>
                <th scope="row">Acetaminofen</th>
                <td>IF</td>
                <td>PAST/JBE</td>
                <td>500 PAST, 250MG JBE</td>
                </tr>
            </tbody>
        </table>
        ';
      }
      elseif ($Componente == "Aciclovir") {
        echo '
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Laboratorio</th>
                <th scope="col">Presentacion</th>
                <th scope="col">Concentracion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Poviral</th>
                <td>Roemmers</td>
                <td>PAST/CREMA/SUSP</td>
                <td>400MG/800MG PAST, 400MG CREMA</td>
                </tr>
                <tr>
                <th scope="row">Zovirax</th>
                <td>GSK(GlaxoSmithKline)</td>
                <td>CREMA</td>
                <td>400MG</td>
                </tr>
                <tr>
                <th scope="row">Aciclovir</th>
                <td>IF</td>
                <td>PAST/CREMA</td>
                <td>400MG/800MG PAST, 400MG CREMA</td>
                </tr>
                <tr>
                <th scope="row">Aciclovir</th>
                <td>Inmenol</td>
                <td>JBE</td>
                <td>400MG</td>
                </tr>
            </tbody>
        </table>
        ';
      }
      elseif ($Componente == "Losartan") {
        echo '
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Laboratorio</th>
                <th scope="col">Presentacion</th>
                <th scope="col">Concentracion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Blosar</th>
                <td>Cardiotech Pharmaceutical</td>
                <td>PAST</td>
                <td>100MG/50MG/100MG+50MGHCT/50MG+12.5MGHCT PAST</td>
                </tr>
                <tr>
                <th scope="row">Presotan</th>
                <td>Core-Pharma</td>
                <td>PAST</td>
                <td>100MG/50MG/100MG+50MGHCT/50MG+12.5MGHCT PAST</td>
                </tr>
                <tr>
                <th scope="row">Losartan</th>
                <td>Ethical</td>
                <td>PAST</td>
                <td>100MG/50MG/100MG+50MGHCT/50MG+12.5MGHCT PAST</td>
                </tr>
            </tbody>
        </table>
        ';
      }
      
      else{
          echo '<h3>El Componente: "'.$Componente. '"no esta registrado</h3>';
      }

      ?>
</body>
</html>