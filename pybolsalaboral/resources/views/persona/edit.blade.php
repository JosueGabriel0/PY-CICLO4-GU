@include('navigation-menu')

<form action="{{ url('/persona/'.$persona->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('persona.form',['modo'=>'Editar']);
</form>

