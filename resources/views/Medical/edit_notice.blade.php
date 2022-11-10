

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 style="color:brown"><b>Update Notice</b>
                   
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update_notice/'.$med->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""><b>Notice</label>
                            <input type="text" name="headline" value="{{$med->headline}}" class="form-control">
                            @error('headline')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Details</label>
                            <input type="text" name="details" value="{{$med->details}}" class="form-control">
                            @error('details')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Notice</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

