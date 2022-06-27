<div class="input-group">
    <input type="search" class="form-control rounded" placeholder="Buscar" aria-label="Search" aria-describedby="search-addon" />
    <button type="button" class="btn btn-outline-primary">Buscar</button>
  </div>


  <div>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <table class="table">

    <thead>
      <tr>
        <th scope="col">Fuente</th>
        <th scope="col">Fecha</th>
        <th scope="col">Nombre de la situación </th>
        <th scope="col">Transversalidad</th>
        <th scope="col">Detalles</th>
        <th scope="col"> Opciones</th>
      </tr>
    </thead>
    <tbody>

    <tr>
        @foreach($reportes as $reporte)
        <th>
            {{ $reporte -> fuente }}
        </th>
        <th>
            {{$reporte -> fecha}}
        </th>
        <th>
            {{$reporte ->n_situacion}}
        </th>
        <th>
            {{$reporte -> transversalidad}}

        </th>
        <th>
            <a href="detalles/{{$reporte->id}}" target="_blank">a</a>
        </th>
        <th>
            {{-- <a href="{{ route('transversalidad.update',$transversalidad->id)}}" class="btn btn-primary">Edit</a> --}}
            <a href="{{ route('report.update',$reporte->id)}}"">Editar</a>
              <br>
              <form action="{{ route('reporte.destroy', $reporte->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Borrar</button>
              </form>
        </th>
    </tr>
        @endforeach



    </tbody>

  </table>

  </div>
