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
        {{ $modo }} postulaciones</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="pos_ruta_cv">Ruta CV</label>
                <input type="file" name="pos_ruta_cv"
                    value="{{ isset($postulacion->pos_ruta_cv) ? $postulacion->pos_ruta_cv : old('pos_ruta_cv') }}" id="pos_ruta_cv"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="pos_puntaje">Puntaje</label>
                <input type="text" name="pos_puntaje"
                    value="{{ isset($postulacion->pos_puntaje) ? $postulacion->pos_puntaje : old('pos_puntaje') }}"
                    id="pos_puntaje"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="pos_estado">Estado</label>
                <input type="text" name="pos_estado"
                    value="{{ isset($postulacion->pos_estado) ? $postulacion->pos_estado : old('pos_estado') }}"
                    id="pos_estado"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="pos_eg_id">Egresado ID</label>
                <input type="text" name="pos_eg_id"
                    value="{{ isset($postulacion->pos_eg_id) ? $postulacion->pos_eg_id : old('pos_eg_id') }}" id="pos_eg_id"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="pos_tra_id">Trabajo ID</label>
                <input type="text" name="pos_tra_id"
                    value="{{ isset($postulacion->pos_tra_id) ? $postulacion->pos_tra_id : old('pos_tra_id') }}" id="pos_tra_id"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

        </div>

        <div class="flex justify-end mt-6">

            <a href="{{ url('postulacion/') }}"
                class=" mr-5 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600">Regresar</a>

            <input
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600"
                type="submit" value=" {{ $modo }} datos">
        </div>
    </form>
</section>
