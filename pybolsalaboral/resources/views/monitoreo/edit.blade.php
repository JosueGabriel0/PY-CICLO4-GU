@include('navigation-menu')

<form action="{{ url('/monitoreo/'.$monitoreo->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    @include('monitoreo.form',['modo'=>'Editar']);
</form>

