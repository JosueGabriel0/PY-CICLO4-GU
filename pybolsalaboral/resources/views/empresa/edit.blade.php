@include('navigation-menu')

<form action="{{ url('/empresa/'.$empresa->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('empresa.form',['modo'=>'Editar']);
</form>

