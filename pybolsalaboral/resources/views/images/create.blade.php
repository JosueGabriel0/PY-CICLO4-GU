@include('navigation-menu')

<form action="{{ url('/images')}}" method="post" enctype="multipart/form-data">
@csrf
@include('images.form',['modo'=>'Crear']);

</form>
