<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")
<div class="form_design">


      @if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              
              {{session()->get('message')}}
              
            </div>
            @endif


      <h1 style="text-align: center; padding-bottom:15px">Add Chef Data</h1>

  	<form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
  		
  		@csrf

		<div class="div_design">
			
			<label>Name</label>
			<input style="color:blue;" type="text"  name="name" required="" placeholder="Enter name">


		</div>
		<div class="div_design">
			
			<label>Speciality</label>
			<input style="color:blue;" type="text"  name="speciality" required="" placeholder="Enter the speciality">


		</div>


		<div class="div_design">
			
			
			<input  type="file"  name="image" required="" >


		</div>

		<div class="div_design">
			
			
			<input style="color:blue;" class="btn btn-primary" type="submit"  value="Add Chefs">


		</div>




  	</form>

    <br>


<div>

  	<table bgcolor="black">
  		
  		<tr>
  			<th style="padding:30px; ">Chef Name</th>
  			<th style="padding:30px; ">Speciality</th>
  			<th style="padding:30px; ">Image</th>
  			<th style="padding:30px; ">Action</th>
  			<th style="padding:30px; ">Action2</th>

  		</tr>


@foreach($data as $data)

  		<tr align="center">
  		
  			<td>{{$data->name}}</td>
  			<td>{{$data->speciality}}</td>
  			<td><img class="image_size" src="/chefimage/{{$data->image}}"></td>
  			<td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>


  			<td><a onclick="return confirm('Are You Sure To Delete This')" href="{{url('/deletechef',$data->id)}}">Delete</a></td>
  		</tr>

  		@endforeach




  	</table>

  </div>

  
  </div>

</div>
<br><br>
 

   @include("admin.adminscript")


  </body>
</html>