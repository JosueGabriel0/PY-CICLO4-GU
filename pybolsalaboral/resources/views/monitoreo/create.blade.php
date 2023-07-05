@include('navigation-menu')

<form action="{{ url('/monitoreo')}}" method="post" enctype="multipart/form-data">
@csrf
@include('monitoreo.form',['modo'=>'Crear']);

</form>
