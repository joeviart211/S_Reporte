<div>
    <table class="table">
    <thead>
        <tr>


          <th scope="col">Transversalidad</th>

          <th scope="col"> Editar</th>

          <th scope="col">Borrar</th>


        </tr>

    </thead>
        <tbody>
        <tr>
        @foreach($transversalidades as $transversalidad)

        <th>
            {{$transversalidad -> nombre}}
        </th>

        <th><a href="{{ route('transversalidad.update',$transversalidad->id)}}" class="btn btn-primary">Edit</a>
        {{-- cambiar a iconos --}}
        <th>
            <form action="{{ route('transversalidad.destroy', $transversalidad->id)}}" method="post">
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
