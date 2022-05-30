@include('includes.header')
<h2>Manage Users</h2>
  <div class="responsive-table">

      <table class="table bg-white table-bordered">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">First Name</th>
               <th scope="col">Last  Name</th>
               <th scope="col">E-mail</th>
               <th scope="col">Edit Details</th>  
         </thead>
         <tbody  id="">
         	@foreach($userdata as $key => $data)
         	<tr>
         		<td>{{$data->id}}</td>
         		<td id="first_name">{{$data->name}}</td>
         		<td>{{$data->lastname}}</td>
         		<td>{{$data->email}}</td>
         		<td><button data-bs-toggle="modal" data-id="{{$data->id}}" data-bs-target="#exampleModal" class="partner-btn">Edit</button></td>
         	</tr>
         	 @endforeach
         </tbody>
      </table>
      @include('includes/manage_users.edit_details_popup')
         </div>	
   <script type="text/javascript">
   $('td .partner-btn').click(function(e){
         var id = $(this).attr('data-id');
         // alert(first_name);
         $("#exampleModal #user_id").val(id);
      });
  </script>
@include('includes.footer')