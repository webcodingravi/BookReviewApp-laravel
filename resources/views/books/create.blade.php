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
          <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
              <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input  type="text" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" id="title" />
                  @error('title')
                  <span class="invalid-feedback">{{$message}}</span>
                    
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="author" class="form-label">Author</label>
                  <input  type="text" value="{{old('author')}}" class="form-control @error('author') is-invalid @enderror" placeholder="Author"  name="author" id="author"/>
                  @error('author')
                  <span class="invalid-feedback">{{$message}}</span>
                    
                  @enderror
              </div>

              <div class="mb-3">
                  <label for="author" class="form-label">Description</label>
                  <textarea name="description" id="description" class="form-control summernote" placeholder="Description" cols="30" rows="5">{{old('description')}}</textarea>
              </div>

              <div class="mb-3">
                  <label for="Image" class="form-label">Image</label>
                  <input type="file" class="form-control @error('author') is-invalid @enderror" name="image" id="image" onChange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])" accept="image/*" />
                  @error('image')
                  <span class="invalid-feedback">{{$message}}</span>
                    
                  @enderror
                  <br>
                  <div class="mb-3">
                    <img src="" id="output" width="200" >
                  </div>

              </div>
              <div class="mb-3">
                  <label for="" class="form-label">Status</label>
                  <select name="status" id="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                  </select>
              </div>
              
              <button type="submit" class="btn btn-primary mt-3">Create</button>                     
          </div>
        </form>
      </div>  
      </div>
  </div>       
</div>
  
@endsection