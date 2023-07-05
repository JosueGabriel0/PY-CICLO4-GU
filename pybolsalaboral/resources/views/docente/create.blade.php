@include('navigation-menu')

<form action="{{ url('/docente')}}" method="post" enctype="multipart/form-data">
@csrf
@include('docente.form',['modo'=>'Crear']);

</form>
