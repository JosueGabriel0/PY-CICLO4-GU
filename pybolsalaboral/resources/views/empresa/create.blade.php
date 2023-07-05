@include('navigation-menu')

<form action="{{ url('/empresa')}}" method="post" enctype="multipart/form-data">
@csrf
@include('empresa.form',['modo'=>'Crear']);

</form>
