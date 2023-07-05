@include('navigation-menu')

<form action="{{ url('/trabajo/'.$trabajo->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('trabajo.form',['modo'=>'Editar']);
</form>

