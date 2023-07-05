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
        {{ $modo }} trabajos</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="tra_fecha_publicacion">Fecha de publicacion</label>
                <input type="date" name="tra_fecha_publicacion"
                    value="{{ isset($trabajo->tra_fecha_publicacion) ? $trabajo->tra_fecha_publicacion : old('tra_fecha_publicacion') }}"
                    id="tra_fecha_publicacion"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_tipo">Tipo</label>
                <input type="text" name="tra_tipo"
                    value="{{ isset($trabajo->tra_tipo) ? $trabajo->tra_tipo : old('tra_tipo') }}" id="tra_tipo"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_categoria">Categoria</label>
                <!--<input type="text" name="tra_categoria"
                    value="{{ isset($trabajo->tra_categoria) ? $trabajo->tra_categoria : old('tra_categoria') }}"
                    id="tra_categoria"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">-->

                <label class="text-white dark:text-gray-200" for="tra_categoria" for="underline_select" class="sr-only">Seleccione la categoria</label>
                <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer" class="form-select" name="tra_categoria" id="tra_categoria" value="{{ isset($trabajo->tra_categoria) ? $trabajo->tra_categoria : old('tra_categoria') }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option value="Ingenieria">Ingenieria</option>
                    <option value="Empresariales">Empresariales</option>
                    <option value="Salud">Salud</option>

                </select>


            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_descripcion">Descripcion</label>
                <input type="text" name="tra_descripcion"
                    value="{{ isset($trabajo->tra_descripcion) ? $trabajo->tra_descripcion : old('tra_descripcion') }}"
                    id="tra_descripcion"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_salario">Salario</label>
                <input type="text" name="tra_salario"
                    value="{{ isset($trabajo->tra_salario) ? $trabajo->tra_salario : old('tra_salario') }}"
                    id="tra_salario"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_fecha_inicio">Fecha de inicio</label>
                <input type="date" name="tra_fecha_inicio"
                    value="{{ isset($trabajo->tra_fecha_inicio) ? $trabajo->tra_fecha_inicio : old('tra_fecha_inicio') }}"
                    id="tra_fecha_inicio"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_fecha_fin">Fecha de fin</label>
                <input type="date" name="tra_fecha_fin"
                    value="{{ isset($trabajo->tra_fecha_fin) ? $trabajo->tra_fecha_fin : old('tra_fecha_fin') }}"
                    id="tra_fecha_fin"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_requiere_experiencia">Requiere experiencia</label>
                <input type="text" name="tra_requiere_experiencia"
                    value="{{ isset($trabajo->tra_requiere_experiencia) ? $trabajo->tra_requiere_experiencia : old('tra_requiere_experiencia') }}"
                    id="tra_requiere_experiencia"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_datos_contacto">Datos de contacto</label>
                <input type="text" name="tra_datos_contacto"
                    value="{{ isset($trabajo->tra_datos_contacto) ? $trabajo->tra_datos_contacto : old('tra_datos_contacto') }}"
                    id="tra_datos_contacto"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_modalidad_tiempo">Modalidad de tiempo</label>
                <input type="text" name="tra_modalidad_tiempo"
                    value="{{ isset($trabajo->tra_modalidad_tiempo) ? $trabajo->tra_modalidad_tiempo : old('tra_modalidad_tiempo') }}"
                    id="tra_modalidad_tiempo"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_beneficios">Beneficios</label>
                <input type="text" name="tra_beneficios"
                    value="{{ isset($trabajo->tra_beneficios) ? $trabajo->tra_beneficios : old('tra_beneficios') }}"
                    id="tra_beneficios"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_modalidad">Modalidad</label>
                <input type="text" name="tra_modalidad"
                    value="{{ isset($trabajo->tra_modalidad) ? $trabajo->tra_modalidad : old('tra_modalidad') }}"
                    id="tra_modalidad"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_titulo">Titulo</label>
                <input type="text" name="tra_titulo"
                    value="{{ isset($trabajo->tra_titulo) ? $trabajo->tra_titulo : old('tra_titulo') }}"
                    id="tra_titulo"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_antecedentes">Antecedentes</label>
                <input type="text" name="tra_antecedentes"
                    value="{{ isset($trabajo->tra_antecedentes) ? $trabajo->tra_antecedentes : old('tra_antecedentes') }}"
                    id="tra_antecedentes"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_estado">Estado</label>
                <input type="text" name="tra_estado"
                    value="{{ isset($trabajo->tra_estado) ? $trabajo->tra_estado : old('tra_estado') }}"
                    id="tra_estado"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_remunerado">Remunerado</label>
                <input type="text" name="tra_remunerado"
                    value="{{ isset($trabajo->tra_remunerado) ? $trabajo->tra_remunerado : old('tra_remunerado') }}"
                    id="tra_remunerado"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="ps_monto_remuneracion">Monto de remuneracion</label>
                <input type="text" name="ps_monto_remuneracion"
                    value="{{ isset($trabajo->ps_monto_remuneracion) ? $trabajo->ps_monto_remuneracion : old('ps_monto_remuneracion') }}"
                    id="ps_monto_remuneracion"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="tra_ep_id">Empresa ID</label>
                <input type="text" name="tra_ep_id"
                    value="{{ isset($trabajo->tra_ep_id) ? $trabajo->tra_ep_id : old('tra_ep_id') }}" id="tra_ep_id"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

        </div>

        <div class="flex justify-end mt-6">

            <a href="{{ url('trabajo/') }}"
                class=" mr-5 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600">Regresar</a>

            <input
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600"
                type="submit" value=" {{ $modo }} datos">
        </div>
    </form>
</section>
