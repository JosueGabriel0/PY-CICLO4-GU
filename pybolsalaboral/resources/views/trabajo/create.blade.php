@include('navigation-menu')

<form action="{{ url('/trabajo')}}" method="post" enctype="multipart/form-data">
@csrf
@include('trabajo.form',['modo'=>'Crear']);

</form>
