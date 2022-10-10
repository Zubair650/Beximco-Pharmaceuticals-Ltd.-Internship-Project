
@include('Medical.bootstrap')

<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> <b> Disease's Information </b>
                        <a href="{{ url('add-dis') }}" class="btn btn-outline-success float-end"><b>Add Disease</b></a>
                    </h4>
                </div>


                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Medicine</th>
                                <th>Details</th>
                                
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dis as $item)
                            <tr>
                                <td><b>{{ $item->id }}</td>
                                <td><b>{{ $item->name }}</b></td>
                                <td>{{ $item->medicine }}</td>
                                <td>{{ $item->details }}</td>
                                
                                <td>
                                    <a href="{{ url('edit-dis/'.$item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <td>
                                    <a href="{{ url('delete-dis/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>                            
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
