<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

  	<base href="/public">
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")


<div class="form_design">

  	<form action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">


      @if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              
              {{session()->get('message')}}
              
            </div>
            @endif

    <h1 style="text-align: center; padding-bottom:15px">Update Chef Data</h1>


  		@csrf
  		
  		<div>
  			<label>Chef Name</label>
  			<input style="color:blue;" type="text" name="name" value="{{$data->name}}">

  		</div>

      <br>

  		<div>
  			<label>Speciality</label>
  			<input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">

  		</div>

      <br>


  		<div>
  			<label>Old Image</label>
  			<img height="200" width="200" src="/chefimage/{{$data->image}}">

  		</div>

      <br>



  		<div>
  			<label>New image</label>
  			<input type="file" name="image">

  		</div>

      <br>

  		<div>
  			
  			<input style="color:blue;" type="submit" value="Update Chef" class="btn btn-primary">

  		</div>








  	</form>

  
  </div>

   @include("admin.adminscript")


  </body>
</html>