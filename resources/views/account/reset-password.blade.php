@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row my-5 justify-content-center">
      <div class="col-md-6 mt-5">
        <div class="col-md-12">
        @include('alertMessage.alertMessage')
      </div>
          <div class="card border-0 shadow">
              <div class="card-header text-white">
                Forgot Password
              </div>
              <form action="{{route('account.processResetPassword')}}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{$tokenString}}">
              <div class="card-body">
                  <div class="mb-3">
                      <label for="new_password" class="form-label">New Password</label>
                      <input type="password" value="{{old('new_password')}}" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password"  name="new_password" id="new_password"/>
                     @error('new_password')
                       <span class="invalid-feedback">
                        {{$message}}
                       </span>
                     @enderror

                  </div>
                  <div class="mb-3">
                      <label for="confirm_password" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password"  name="confirm_password" id="confirm_password"/>
                      @error('confirm_password')
                      <span class="invalid-feedback">
                       {{$message}}
                      </span>
                    @enderror

                  </div>
                  <button class="btn btn-primary mt-2">Update</button>                     
              </div>
            </form>
          </div>                
      </div>
  </div>       
</div>
  
@endsection
