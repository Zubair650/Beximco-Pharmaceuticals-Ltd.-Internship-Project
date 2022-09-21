@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
            <div class="card-header">
                    <h4>
                    <a href="{{ url('med') }}" class="btn btn-outline-danger float-end">Lists</a>
                    Add Medicine
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-med') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Medicine's Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Disease</label>
                            <input type="text" name="disease" value="{{old('disease')}}" class="form-control">
                            @error('disease')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Details</label>
                            <input type="text" name="details" value="{{old('details')}}" class="form-control">
                            @error('details')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Price</label>
                            <input type="text" name="price" value="{{old('price')}}" class="form-control">
                            @error('price')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        
                        <div>
                        <div class="form-group mb-3">
                        
                        <button type="submit" class="btn btn-success">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>