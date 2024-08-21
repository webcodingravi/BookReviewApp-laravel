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
                  Edit My Reviews
              </div>
              <div class="card-body pb-0"> 
                <form action="{{route('account.myReview.updateReview',$review->id)}}" method="post">
                  @csrf
                  @method('put')
                <div class="card-body">
                  <div class="mb-3">
                    <label for="book" class="form-label">Book</label>
                    <div>
                      <strong>{{$review->book->title}}</strong>
                    </div>
                </div>


                    <div class="mb-3">
                        <label for="review" class="form-label">Review</label>
                        <textarea class="form-control summernote" name="review" id="review" cols="30" rows="10">{{old('review',$review->review)}}</textarea>
                        @error('review')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select name="rating" id="rating" class="form-control">
                          <option {{($review->rating == 1) ? 'selected' : ''}} value="1">1</option>
                          <option {{($review->rating == 2) ? 'selected' : ''}} value="2">2</option>
                          <option {{($review->rating == 3) ? 'selected' : ''}} value="3">3</option>
                          <option {{($review->rating == 4) ? 'selected' : ''}} value="4">4</option>
                          <option {{($review->rating == 5) ? 'selected' : ''}} value="5">5</option>

                        </select>
                        @error('rating')
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