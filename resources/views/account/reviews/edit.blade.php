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
              <div class="card-header  text-white">
                  Edit Reviews
              </div>
              <div class="card-body pb-0"> 
                <form action="{{route('account.reviews.updateReview',$review->id)}}" method="post">
                  @csrf
                  @method('put')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="review" class="form-label">Review</label>
                        <textarea class="form-control summernote" name="review" id="review" cols="30" rows="10">{{old('review',$review->review)}}</textarea>
                        @error('review')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                          <option {{($review->status == 1) ? 'selected' : ''}} value="1">Active</option>
                          <option {{($review->status == 0) ? 'selected' : ''}} value="0">Deactive</option>

                        </select>
                        @error('status')
                        <span class="invalid-feedback">{{$message}}</span>
                      @enderror
                     </div>
                   
               
                    <button class="btn btn-primary mt-2">Update</button>                     
                </div>
              </form>             
              </div>
              
          </div>                
      </div>
  </div>       
</div>
  
@endsection