<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div>
    <table class="table">
    <thead>
        <tr>


          <th scope="col">Transversalidad</th>

          <th scope="col"> </th>

          <th scope="col"></th>


        </tr>

    </thead>
        <tbody>
        <tr>
        @foreach($transversalidades as $transversalidad)

        <th>
            {{$transversalidad->nombre}}
        </th>


        <th><a href="{{ route('transversalidad.update',$transversalidad->eje)}}" class="btn btn-primary">Editar</a>
        {{-- cambiar a iconos --}}
        <th>
            <form action="{{ route('transversalidad.destroy', $transversalidad->eje)}}" method="post">
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
