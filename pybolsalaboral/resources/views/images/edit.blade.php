@include('navigation-menu')

<form action="{{ url('/images/'.$images->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('images.form',['modo'=>'Editar']);
</form>

