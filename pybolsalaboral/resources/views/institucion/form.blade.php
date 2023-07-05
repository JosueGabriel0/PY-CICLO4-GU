@vite('resources/css/app.css')

@if (count($errors) > 0)

    <div role="alert">
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Requerido
        </div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <p>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </p>
        </div>
    </div>



@endif

<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-2">
    <h1 class="font-bold text-white capitalize dark:text-white font-serif text-center text-2xl mb-14">Formulario para
        {{ $modo }} instituciones</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="ins_num_cedes">Numero de cedes</label>
                <input type="text" name="ins_num_cedes"
                    value="{{ isset($institucion->ins_num_cedes) ? $institucion->ins_num_cedes : old('ins_num_cedes') }}" id="ins_num_cedes"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_num_docentes">Numero de docentes</label>
                <input type="text" name="ins_num_docentes"
                    value="{{ isset($institucion->ins_num_docentes) ? $institucion->ins_num_docentes : old('ins_num_docentes') }}"
                    id="ins_num_docentes"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_anios_actividad">Anios de actividad</label>
                <input type="text" name="ins_anios_actividad"
                    value="{{ isset($institucion->ins_anios_actividad) ? $institucion->ins_anios_actividad : old('ins_anios_actividad') }}" id="ins_anios_actividad"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_num_estudiantes">Numero de estudiantes</label>
                <input type="text" name="ins_num_estudiantes"
                    value="{{ isset($institucion->ins_num_estudiantes) ? $institucion->ins_num_estudiantes : old('ins_num_estudiantes') }}" id="ins_num_estudiantes"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_sitio_web">Sitio web</label>
                <input type="text" name="ins_sitio_web"
                    value="{{ isset($institucion->ins_sitio_web) ? $institucion->ins_sitio_web : old('ins_sitio_web') }}" id="ins_sitio_web"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_nombre">Nombre</label>
                <input type="text" name="ins_nombre"
                    value="{{ isset($institucion->ins_nombre) ? $institucion->ins_nombre : old('ins_nombre') }}" id="ins_nombre"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_direccion">Direccion</label>
                <input type="text" name="ins_direccion" value="{{ isset($institucion->ins_direccion) ? $institucion->ins_direccion : old('ins_direccion') }}"
                    id="ins_direccion"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_correo">Correo</label>
                <input type="text" name="ins_correo"
                    value="{{ isset($institucion->ins_correo) ? $institucion->ins_correo : old('ins_correo') }}" id="ins_correo"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ins_celular">Celular</label>
                <input type="text" name="ins_celular"
                    value="{{ isset($institucion->ins_celular) ? $institucion->ins_celular : old('ins_celular') }}" id="ins_celular"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

        </div>

        <div class="flex justify-end mt-6">

            <a href="{{ url('institucion/') }}"
                class=" mr-5 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600">Regresar</a>

            <input
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600"
                type="submit" value=" {{ $modo }} datos">
        </div>
    </form>
</section>
