@include('navigation-menu')

<form action="{{ url('/proveedor/'.$proveedor->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('proveedor.form',['modo'=>'Editar']);
</form>

