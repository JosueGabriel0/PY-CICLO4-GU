@include('navigation-menu')

<form action="{{ url('/postulacion/'.$postulacion->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('postulacion.form',['modo'=>'Editar']);
</form>

