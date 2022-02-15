<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
    <script>

      </script>
      <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3.5cm 1cm 1cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            background-color: #FFDE59;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: #FFDE59;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
  </head>
  <body>

    <header>
      <br>
      <h1><strong>Listado de estudiantes</strong></h1>
  </header>
  <main>
        <div>
        <table class="table table-striped text-center" style="margin-top: 100px">
            <thead>
                <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Fecha de nacimiento</th>
                <th>Padres</th>
                <th>Alergias</th>
                <th>Medico</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($reportes as $datos) 
            <tr>
                <td>{{ $datos->nombres }}</td>
                <td>{{ $datos->apellidos }}</td>
                <td>{{ $datos->edad }}</td>
                <td>{{ $datos->fecha_nacimiento }}</td>
                <td>{{ $datos->padres_familia->nombres }} {{ $datos->padres_familia->apellidos }}</td>
                <td>{{ $datos->alergias }} </td>
                <td>{{ $datos->medico }} </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
  </main>
  <footer>
      <h3><strong>Juan Sebastian Murcia Zuñiga</strong></h3>
  </footer>

  </body>
</html>