@include('navigation-menu')

<form action="{{ url('/docente/'.$docente->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('docente.form',['modo'=>'Editar']);
</form>
