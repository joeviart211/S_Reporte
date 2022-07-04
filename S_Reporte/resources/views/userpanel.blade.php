<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Usuarios") }}
        </h2>
        <x-jet-nav-link href="{{ route('users.create') }}" :active="request()->routeIs('dashboard')">
            {{ __('Nuevo usuario') }}
        </x-jet-nav-link>
    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


        <table class="table">

            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Permisos </th>
                <th scope="col">Fecha de creación</th>

                <th scope="col"> Opciones</th>
              </tr>
            </thead>
            <tbody>

            <tr>
                @foreach($users as $usuario)
                <th>
                    {{ $usuario -> name }}
                </th>
                <th>
                    {{$usuario -> email}}
                </th>
                <th>
                    @if ($usuario ->admin==1)

                    Administrador

                    @else

                    Usuario

                    @endif

                </th>
                <th>
                    {{$usuario -> created_at}}

                </th>
                <th>
                     <a href="{{ route('users.update',$usuario->id)}}">Editar</a>
                </th>
                <th>

                    {{-- <a href="{{ route('report.update',$reporte->id)}}"">Editar</a>
                      <br>
                      <form action="{{ route('reporte.destroy', $reporte->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Borrar</button>
                      </form> --}}
                </th>
            </tr>
                @endforeach



            </tbody>

          </table>
    </div>

</x-app-layout>
