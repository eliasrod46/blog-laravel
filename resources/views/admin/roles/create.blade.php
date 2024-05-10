@extends('layouts.panel')

@section('title', 'crear rol')

@section('content')
    <div class="text-center py-6">
        <h2 class="text-3xl font-bold pb-6">Crear Rol</h2>
        <div class=" flex flex-col ">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            <div class="mb-10">
                {!! Form::label('name', 'Nombre:', ['class' => 'block text-xl mb-2']) !!}
                {!! Form::text('name', null, [
                    'class' => 'text-black rounded-lg',
                    'placeholder' => 'Ingrese el nombre de la categoria',
                ]) !!}

                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-10">
                <h2>Lista de permisos</h2>

                @foreach ($permissions as $permission)
                    {!! Form::checkbox('permissions[]', $permission->id, null, []) !!}
                @endforeach
                {!! Form::label('name', 'Nombre:', ['class' => 'block text-xl mb-2']) !!}
                {!! Form::text('name', null, [
                    'class' => 'text-black rounded-lg',
                    'placeholder' => 'Ingrese el nombre de la categoria',
                ]) !!}

                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Crear Rol', [
                'class' => 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium',
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('js')
    <script>
        const name = document.getElementById('name');
        const slug = document.getElementById('slug');
        name.addEventListener('input', () => {
            name.value = name.value.match(/[a-zA-Z1-9\s]+/g);
            const valueName = name.value;
            slug.value = valueName.toLowerCase().replace(/\s/g, '-');
        });
    </script>
@endsection
