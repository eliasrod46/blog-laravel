<nav class="bg-gray-800  flex flex-col h-auto items-center justify-between gap-2">
    <div class="my-4 mb-8">
        <h1><a href="{{ route('admin.home') }}">Logo</a></h1>
    </div>
    <div class="flex flex-col h-auto items-center justify-between gap-2">
        <!-- users 1 -->
        <div class=" space-x-4 my-1">
            <a href="{{ route('admin.users.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">
                Usuarios</a>
        </div>
        <!-- categories -->
        <div class=" space-x-4 my-1">
            <a href="{{ route('admin.categories.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">
                Categorias </a>
        </div>
        <!-- tags -->
        <div class=" space-x-4 my-1">
            <a href="{{ route('admin.tags.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">
                Etiquetas </a>
        </div>
        <!-- a list of posts  -->
        <div class=" space-x-4 my-1">
            <a href="{{ route('admin.posts.index') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">
                Lista de posts </a>
        </div>
        <!-- create a new Post -->
        <div class=" space-x-4 my-1">
            <a href="{{ route('admin.posts.create') }}"
                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">
                Crear nuevo post </a>
        </div>
    </div>

</nav>
