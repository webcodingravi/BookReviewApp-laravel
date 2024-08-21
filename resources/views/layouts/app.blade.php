<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Review App</title>
    <link href="{{asset('assets/bootstrap-5/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    {{-- summernote editor --}}
    <link rel="stylesheet" href="{{asset('assets/summernote/summernote.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- jquery --}}
    <script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script>
</head>
<body>
    <div class="container-fluid shadow-lg header sticky-top">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h1 class="text-center"><a href="{{route('home')}}" class="h3 text-white text-decoration-none">Book Review App</a></h1>
                <div class="d-flex align-items-center navigation">

                    @if (Auth::check())
                    <a href="{{route('account.profile')}}" class="text-white"><i class="fas fa-user"></i> My Account</a>
                    @else
                    <a href="{{route('account.login')}}" class="text-white"><i class="fas fa-user"></i> Login</a> 
                    <a href="{{route('account.register')}}" class="text-white ps-2"> / Register</a>   
                    @endif
                   
                </div>
            </div>
        </div>
    </div>

   @yield('content')


   <script src="{{asset('assets/bootstrap-5/bootstrap.js')}}"></script>

   <script src="{{asset('assets/summernote/summernote.min.js')}}"></script>
   @yield('customJs')
   <script>
   setTimeout(() => {
  $("#alert-box").fadeOut('slow');
  }, 3000);

  $(document).ready(function() {
        $(".summernote").summernote({
					height:250
				});

      });
      
   </script>

  
</body>
</html>