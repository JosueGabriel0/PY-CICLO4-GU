@include('navigation-menu')

<form action="{{ url('/institucion')}}" method="post" enctype="multipart/form-data">
@csrf
@include('institucion.form',['modo'=>'Crear']);

</form>
