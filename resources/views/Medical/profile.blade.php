
@include('Medical.bootstrap')
<div class="container p-4 ">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(0, 102, 102)"> <b>My Profile</b>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered fs-6" >
                        
                        <tbody>
                            @foreach ($user as $item)
                            
                               <tr><th>Customer's Name</th> <td><b>{{ $item->name }}</b></td>  
                               <td rowspan="4">
                                <img src="{{ asset('public/Image/'.$item->image) }}"
                                    style="height: 175px; width: 160px; background-color: white">
                                </td> </tr>                     
                               <tr> <th>Email</th> <td>{{ $item->email }}</td></tr>
                               <tr><th>Phone</th> <td>+880{{ $item->phone }}</td></tr>
                               <tr> <th>NID</th><td>{{ $item->nid }}</td></tr>
                               <tr><th>Address</th><td>{{ $item->address }}</td> 
                              </tr>                              
                               <tr>  <th>Gender</th><td>{{ $item->gender }}</td></tr>
                               <tr> <th>Age</th><td>{{ $item->age }}</td></tr>
                               <tr> <th>Education</th><td>{{ $item->edu }}</td></tr>
                               
                               
                            
                            @endforeach
                            <td></td>
                            <td align= "right">
                            <a href="{{ url('e-profile/'.$item->id) }}" class="btn btn-success btn-sm"><b>Update Profile</a>
                            <td>
                            <tr>
                            <td></td>
                            <td align= "right">
                            <a href="{{ url('e-password') }}" class="btn btn-dark btn-sm"><b>Update Password</a>
                            <td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>

                </div>
               
            </div>
        </div>
    </div>
</div>



