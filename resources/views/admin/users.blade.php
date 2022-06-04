<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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



  	<div  style="position: relative; top: 60px; right: -150px " >

         @if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              
              {{session()->get('message')}}
              
            </div>
            @endif

    <h1 style="text-align: center; padding-bottom:15px">All User Data</h1>
  		
  		<table bgcolor="black" >
  			
  			<tr>
  				<th style="padding: 30px">Name</th>
  				<th style="padding: 30px">Email</th>
  				<th style="padding: 30px">Action</th>
  			</tr>


  			@foreach($data as $data)
  			<tr align="center" class="table_sty">
  				<td>{{$data->name}}</td>

  				<td>{{$data->email}}</td>

  				@if($data->usertype=="0")
  				<td><a onclick="return confirm('Are You Sure To Delete This')" onclick="return confirm('Are You Sure To Delete This')" href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
  				@else
  				<td><a >Not Allowed</a></td>

        

  				@endif




  			</tr>

  			@endforeach




  		</table>


  	</div>

   </div>


<br><br>
 

   @include("admin.adminscript")


  </body>
</html>


</body>
</html>