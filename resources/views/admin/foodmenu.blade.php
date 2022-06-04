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


      <h1 style="text-align: center; padding-bottom:15px">Add Food</h1>
  		
  		<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" style="padding-bottom: 25px;">

  			@csrf

  			
  			<div class="div_design">
  				<label>Title</label>
  				<input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
  			</div>

  			<div class="div_design">
  				<label>Price</label>
  				<input style="color:blue;" type="num" name="price" placeholder="price" required>
  			</div>

  			<div class="div_design">
  				<label>Image</label>
  				<input type="file" name="image"  required>
  			</div>

  			<div class="div_design">
  				<label>Description</label>
  				<input style="color:blue;" type="text" name="description" placeholder="Description" required>
  			</div>

  			<div class="div_design">
  				
  				<input style="color: black" class="btn btn-primary" type="submit" value="Add Food" >
  			</div>


  		</form>



      <div>
        
        <table bgcolor="black">
          <tr>
            <th style="padding: 30px">Food Name</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Description</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Action</th>
          <th style="padding: 30px">Action2</th>
            
          </tr>



          @foreach($data as $data)

          <tr align="center">
            
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img class="image_size" src="/foodimage/{{$data->image}}"></td>

            <td><a onclick="return confirm('Are You Sure To Delete This')" href="{{url('/deletemenu',$data->id)}}">Delete</a></td>

            <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>



         

          @endforeach


        </table>


      </div>







  	</div>


    



</div>

<br><br>
 

   @include("admin.adminscript")


  </body>
</html>