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
              Edit Book
          </div>
          <form action="{{route('books.update',$book->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="card-body">
              <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input  type="text" value="{{old('title',$book->title)}}" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" id="title" />
                  @error('title')
                  <span class="invalid-feedback">{{$message}}</span>
                    
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="author" class="form-label">Author</label>
                  <input  type="text" value="{{old('author',$book->author)}}" class="form-control @error('author') is-invalid @enderror" placeholder="Author"  name="author" id="author"/>
                  @error('author')
                  <span class="invalid-feedback">{{$message}}</span>
                    
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="author" class="form-label">Description</label>
                  <textarea name="description" id="description" class="form-control summernote" placeholder="Description" cols="30" rows="5">{{old('description',$book->description)}}</textarea>
              </div>

              <div class="mb-3">
                  <label for="Image" class="form-label">Image</label>
                  <input type="file" class="form-control @error('author') is-invalid @enderror" name="image" id="image" accept="image/*"/>
                  @error('image')
                  <span class="invalid-feedback">{{$message}}</span>
                    
                  @enderror
                  <br>
                  <img src="{{asset('uploads/books/thumb/'.$book->image)}}" alt="" class="w-25">
              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Status</label>
                  <select name="status" id="status" class="form-control">
                      <option {{($book->status == 1) ? 'selected' : ''}} value="1">Active</option>
                      <option {{($book->status == 0) ? 'selected' : ''}} value="0">Deactive</option>
                  </select>
              </div>
              
              <button type="submit" class="btn btn-primary mt-3">Update</button>                     
          </div>
        </form>
      </div>  
      </div>
  </div>       
</div>
  
@endsection