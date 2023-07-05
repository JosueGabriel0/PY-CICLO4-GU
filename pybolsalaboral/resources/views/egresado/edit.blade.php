@include('navigation-menu')

<form action="{{ url('/egresado/'.$egresado->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('egresado.form',['modo'=>'Editar']);
</form>

