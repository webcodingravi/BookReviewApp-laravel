@extends('layouts.app')
@section('content')
<section class=" p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                <div class="card border border-light-subtle rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                @include('alertMessage.alertMessage')
                            </div>
                            <div class="col-12">
                                <div class="mb-5">
                                    <h4 class="text-center">Forgot Password</h4>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('account.processForgotPassword')}}" method="post">
                            @csrf
                            <div class="row gy-3 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com">
                                        <label for="email" class="form-label">Email</label>
                                        @error('email')
                                         <span class="invalid-feedback">
                                            {{$message}}
                                         </span>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Send</button>
                                    </div>
                                </div>

                              
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-center">
                                    <a href="{{route('account.login')}}" class="link-secondary text-decoration-none">Login here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection