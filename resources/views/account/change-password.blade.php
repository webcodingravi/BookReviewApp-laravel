@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row my-5">
      <div class="col-md-3">
          @include('layouts.sidebar')
      </div>
      <div class="col-md-9">
        <div class="col-md-12">
        @include('alertMessage.alertMessage')
      </div>
          <div class="card border-0 shadow">
              <div class="card-header text-white">
                  Change Password
              </div>
              <form action="" method="post" name="updatePassword" id="updatePassword">
                @csrf
              <div class="card-body">
                  <div class="mb-3">
                      <label for="old_password" class="form-label">Old Password</label>
                      <input type="password" class="form-control" placeholder="Old Password" name="old_password" id="old_password" />
                      <p></p>
                  </div>
                  <div class="mb-3">
                      <label for="new_password" class="form-label">New Password</label>
                      <input type="password" class="form-control" placeholder="New Password"  name="new_password" id="new_password"/>
                      <p></p>

                  </div>
                  <div class="mb-3">
                      <label for="confirm_password" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" placeholder="Confirm Password"  name="confirm_password" id="confirm_password"/>
                      <p></p>

                  </div>
                  <button class="btn btn-primary mt-2">Update</button>                     
              </div>
            </form>
          </div>                
      </div>
  </div>       
</div>
  
@endsection

@section('customJs')
<script>
$("#updatePassword").submit(function(event) {
  event.preventDefault();
   $.ajax({
          url: '{{route("account.processUpdatePassword")}}',
          type: 'post',
          data: $(this).serializeArray(),
          dataType: 'json',
          success: function(response) {
            if(response.status == true) {
              $("#old_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html('');
              $("#new_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html('');
              $("#confirm_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html('');
               
              window.location.href="{{route('account.updatePassword')}}";


               
            }else{
              if(response.errors['old_password']) {
                $("#old_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html(response.errors['old_password']);
              }else{
                $("#old_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html('');

              }
              if(response.errors['new_password']) {
                $("#new_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html(response.errors['new_password']);
              }else{
                $("#new_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html('');

              }

              if(response.errors['confirm_password']) {
                $("#confirm_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html(response.errors['confirm_password']);
              }else{
                $("#confirm_password").addClass('is-invalid').siblings("P").addClass("invalid-feedback").html('');

              }
            }
          }
   });
});
</script>
  
@endsection