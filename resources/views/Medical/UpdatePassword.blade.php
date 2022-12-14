@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            @if (session('nstatus'))
                <h6 class="alert alert-danger">{{ session('nstatus') }}</h6>
            @endif
            
            <div class="card">
            <div class="card-header">
                    <h4 style="color: brown"><b>
                    Change Password</b>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('edit-password')}}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>E-Mail</label>
                            <input type="text" name="email" value="{{session()->get('email')}}" class="form-control" readonly>
                            @error('email')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="">New Password</label>
                            <input type="password" name="ncode" value="" class="form-control">
                            @error('ncode')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Type the New Password again</label>
                            <input type="password" name="code" value="" class="form-control">
                            @error('code')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                       
                        </div>
                        <div>
                        <div class="form-group mb-3">
                        
                        <button type="submit" class="btn btn-success float-end"><b>Update</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>