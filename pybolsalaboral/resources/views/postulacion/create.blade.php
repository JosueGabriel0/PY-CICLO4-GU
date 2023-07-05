@include('navigation-menu')

<form action="{{ url('/postulacion')}}" method="post" enctype="multipart/form-data">
@csrf
@include('postulacion.form',['modo'=>'Crear']);

</form>
