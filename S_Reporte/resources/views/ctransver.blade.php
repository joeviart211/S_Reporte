<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Placeholder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-transv')}}">
                    @csrf
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required="true">

                    <br>



            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</x-app-layout>
