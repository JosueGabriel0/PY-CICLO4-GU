@include('navigation-menu')

<form action="{{ url('/persona')}}" method="post" enctype="multipart/form-data">
@csrf
@include('persona.form',['modo'=>'Crear']);

</form>
