<div>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">Id</th>

          <th scope="col">Transversalidad</th>
        </tr>

    </thead>
        <tbody>
        <tr>
        @foreach($transversalidades as $transversalidad)
        <th>
            {{ $transversalidad -> id }}
        </th>
        <th>
            {{$transversalidad -> nombre}}
        </th>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
