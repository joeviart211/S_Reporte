<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form name="add-post-form" id="add-post-form" method="post" action="{{url('store-user')}}">
        @csrf

        <label for="InputData1">Nombre</label>
        <input type="text" id="name" name="name" class="form-control" required="true">
        <div>
        <label for="InputData1">Correo</label>
        <input type="email" id="email" name="email" class="form-control" required="true">
    </div>
        <br>


    <br>
    <label for="InputData1">Contraeña</label>
    <input type="password" id="password" name="password" class="form-control" required="true"><br>
    <label for="InputData1">Confirmar contraeña</label>
    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="true"><br>
<label for="InputData1">Permisos</label>
<select id="admin"name="admin">
    <option value="">--Seleciona una opcion --</option>
    <option value="1">Administrador</option>
    <option value="0">Usuario</option>

</select>




<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>


</x-app-layout>
