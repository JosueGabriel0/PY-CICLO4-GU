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
        {{ $modo }} egresados</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="eg_codigo">Codigo</label>
                <input type="text" name="eg_codigo"
                    value="{{ isset($egresado->eg_codigo) ? $egresado->eg_codigo : old('eg_codigo') }}" id="eg_codigo"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="eg_anios_experiencia">Anios de experiencia</label>
                <input type="text" name="eg_anios_experiencia"
                    value="{{ isset($egresado->eg_anios_experiencia) ? $egresado->eg_anios_experiencia : old('eg_anios_experiencia') }}"
                    id="eg_anios_experiencia"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="eg_ruta_cv">Ruta del cv</label>
                <input type="file" name="eg_ruta_cv"
                    value="{{ isset($egresado->eg_ruta_cv) ? $egresado->eg_ruta_cv : old('eg_ruta_cv') }}" id="eg_ruta_cv"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="eg_religion">Religion</label>
                <input type="text" name="eg_religion"
                    value="{{ isset($egresado->eg_religion) ? $egresado->eg_religion : old('eg_religion') }}" id="eg_religion"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="eg_especialidad">Especialidad</label>
                <input type="text" name="eg_especialidad"
                    value="{{ isset($egresado->eg_especialidad) ? $egresado->eg_especialidad : old('eg_especialidad') }}" id="eg_especialidad"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="eg_nivel_academico">Nivel academico</label>
                <input type="text" name="eg_nivel_academico"
                    value="{{ isset($egresado->eg_nivel_academico) ? $egresado->eg_nivel_academico : old('eg_nivel_academico') }}" id="eg_nivel_academico"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="eg_ps_id">Persona ID</label>
                <input type="text" name="eg_ps_id" value="{{ isset($egresado->eg_ps_id) ? $egresado->eg_ps_id : old('eg_ps_id') }}"
                    id="eg_ps_id"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="eg_ins_id">Institucion ID</label>
                <input type="text" name="eg_ins_id"
                    value="{{ isset($egresado->eg_ins_id) ? $egresado->eg_ins_id : old('eg_ins_id') }}" id="eg_ins_id"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>



        </div>

        <div class="flex justify-end mt-6">

            <a href="{{ url('egresado/') }}"
                class=" mr-5 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600">Regresar</a>

            <input
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-600"
                type="submit" value=" {{ $modo }} datos">
        </div>
    </form>
</section>
