@include('navigation-menu')

<form action="{{ url('/institucion/'.$institucion->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('institucion.form',['modo'=>'Editar']);
</form>

