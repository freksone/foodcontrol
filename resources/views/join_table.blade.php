
<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Menu del dia!</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
     <div class="container">
        <br />
        <h3 align="center">Menu del dia!</h3>
        <br />
      <div class="table-responsive">
       <table class="table table-bordered table-striped">
              <thead>
               <tr>
                   <th>Comida</th>
                   <th>Horario</th>
                   <th>Area</th>
                   <th>Nombre</th>

               </tr>
              </thead>
              <tbody>
              @foreach($data as $row)
               <tr>
                <td>{{ $row->Comida }}</td>
                <td>{{ $row->Horario }}</td>
                <td>{{ $row->Area }}</td>
                <td>{{ $row->Nombre }}</td>
               </tr>
              @endforeach
              </tbody>
          </table>
      </div>
      <div>
        <a class="btn btn-primary" href="{{url('Empleados')}}">Regresar</a>
      </div>
     </div>
    </body>
   </html>

