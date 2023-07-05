@include('navigation-menu')

<form action="{{ url('/egresado')}}" method="post" enctype="multipart/form-data">
@csrf
@include('egresado.form',['modo'=>'Crear']);

</form>
