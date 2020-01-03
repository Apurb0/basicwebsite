
@extends('layouts.app')

@section('content')

<style type="text/css">
	
body{

	background:url(https://cdn.wallpapersafari.com/54/75/IXc0V2.jpg);
}

img{

  width: 80%;
  height: 50%;

}

</style>



   <h1>Home</h1>


<p>
 

</p>

<img src="http://www.guoguiyan.com/data/out/41/68729037-community-wallpapers.png">


@endsection


@section('sidebar')

   @parent
   
   <p>This is appended to the sidebar</p>
    @endsection