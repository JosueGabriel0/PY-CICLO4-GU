@vite('resources/css/app.css')
<script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>

@include('navigation-menu')

@if (Session::has('mensaje'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex justify-between">

            <div class="flex order-first">

                <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg>

                <p class="font-bold">{{ Session::get('mensaje') }}</p>

            </div>

            <div class="order-last">
                <a href="{{ url('images/') }}" class="text-teal-900 font-bold py-1 px-2 shadow-md rounded-full">
                    <i class="fa-solid fa-x"></i>
                </a>
            </div>

        </div>
    </div>
@endif




<div class="bg-gray-800">
    <div class="py-5">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <div class="flex items-center justify-between">

                    <form action="{{ route('images.index') }}" method="get">
                        <div class="form-row flex">
                            <!--Input de busqueda   -->
                            <div class="col-sm-4 my-1" class="flex items-center p-2 rounded-md flex-1">
                                <label class="w-full relative text-gray-400 focus-within:text-gray-600 block">
                                    <svg class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3"
                                        viewBox="0 0 25 25" fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <x-input type="text" class="form-control" name="texto"
                                        value="{{ $texto }}" class="w-full block pl-14"
                                        placeholder="Buscar images" />
                                </label>
                            </div>

                            <!--Boton buscar   -->
                            <div class="col-auto my-1 ml-4" class="lg:mr-40 mr-10 space-x-8">
                                <button type="submit" value="Buscar"
                                    class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                                    <i class="fa-solid fa-magnifying-glass"></i> <a href="">Buscar</a>
                                </button>
                            </div>

                            <!--Paginacion   -->
                            <div class="col-auto my-1 ml-5">
                                {!! $images->links() !!}
                            </div>

                            <!--Boton PDF   -->
                            <div class="col-auto my-1 ml-32" class="lg:ml-40 ml-10 space-x-8" >
                                <button
                                    class="bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                                    <i class="fa-solid fa-file"></i> <a href="{{ url('images/pdf') }}">PDF</a>
                                </button>
                            </div>

                            <!--Boton nuevo   -->
                            <div class="col-auto my-1 ml-5" class="lg:ml-40 ml-10 space-x-8">
                                <button wire:click="create()"
                                    class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                                    <i class="fa-solid fa-plus"></i> <a href="{{ url('images/create') }}">Registrar
                                        nuevo images</a>
                                </button>
                            </div>

                        </div>
                    </form>



                </div>
                <!--Tabla lista de items   -->
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="w-full divide-y divide-gray-200 table-auto">
                        <thead class="bg-indigo-500 text-white">
                            <tr class="text-left text-xs font-bold  uppercase">
                                <td scope="col" class="px-6 py-3">ID</td>
                                <td scope="col" class="px-6 py-3">url</td>
                                <td scope="col" class="px-6 py-3">imageable_id</td>
                                <td scope="col" class="px-6 py-3">imageable_type</td>
                                <td scope="col" class="px-6 py-3">Acciones</td>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @if (count($images) <= 0)
                                <tr>
                                    <td colspan="11" class="text-xsm font-medium text-center text-white bg-red-600">No
                                        hay resultados</td>
                                </tr>
                            @else
                                @foreach ($images as $image)
                                    <tr class="text-sm font-medium text-gray-900">
                                        <td class="px-6 py-4">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                                {{ $image->id }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">{{ $image->url }}</td>
                                        <td class="px-6 py-4">{{ $image->imageable_id }}</td>
                                        <td class="px-6 py-4">{{ $image->imageable_type }}</td>
                                        <td class="px-6 py-4">
                                            {{-- @livewire('cliente-edit',['cliente'=>$item],key($item->id)) --}}
                                            <x-button onclick="sweetalertD()"
                                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                                                <a href="{{ url('/images/' . $image->id . '/edit') }}">
                                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                                </a>
                                            </x-button>

                                            <!-- Usamos metodos magicos -->
                                            <form action="{{ url('/images/' . $image->id) }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <!--onclick="eliminar(event)"-->
                                                <x-danger-button type="submit"
                                                    onclick="return confirm('¿Quieres Borrar?')"
                                                    class=" focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                    <i class='fas fa-trash'></i>
                                                </x-danger-button>
                                            </form>



                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-3">
                </div>

                <div>
                    {!! $images->links() !!}
                </div>

            </div>
        </div>


    </div>


</div>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    function eliminar(e) {

        e.preventDefaul

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                //this.submit();
                return true

            }
        })

    }
</script>
