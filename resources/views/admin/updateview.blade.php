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



  	<div style="position: relative; top: 60px; right: -150px">

      @if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              
              {{session()->get('message')}}
              
            </div>
            @endif

    <h1 style="text-align: center; padding-bottom:15px">Update Food Data</h1>
  		
  		<form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

  			@csrf

  			
  			<div>
  				<label>Title</label>
  				<input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
  			</div>

        <br>

  			<div>
  				<label>Price</label>
  				<input style="color:blue;" type="num" name="price" value="{{$data->price}}" required>
  			</div>

  			
        <br>

  			<div>
  				<label>Description</label>
  				<input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
  			</div>

       <br>

  			<div>
  				<label>old Image</label>
  				<img height="200" width="200" src="/foodimage/{{$data->image}}">
  			</div>

        <br>


  			<div>
  				<label>New Image</label>
  				<input type="file" name="image"  >
  			</div>


        <br>

  			<div>
  				
  				<input style="color: black" class="btn btn-primary" type="submit" value="Save" >
  			</div>


  		</form>



      <div>

  
  </div>

   @include("admin.adminscript")


  </body>
</html>