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
                Books
            </div>
            <div class="card-body pb-0">    
                <div class="d-flex justify-content-between">       
                <a href="{{route('books.create')}}" class="btn btn-primary">Add Book</a> 
                 
                    <form action="" method="get">
                    <div class="d-flex">
                    <input type="text" name="keyword" value="{{Request::get('keyword')}}" class="form-control" placeholder="Keyword">
                    <button type="submit" class="btn btn-primary ms-2">Search</button>
                    <a href="{{route('books.index')}}" class="btn btn-secondary ms-2">Clear</a> 
                    </div>
                </form>
                    
                
                 
            </div> 
                <table class="table  table-striped mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th width="150">Action</th>
                        </tr>
                        <tbody>
                            @if ($books->isNotEmpty())
                            @foreach ($books as $book)
                            @php
                            if($book->reviews_count > 0) {
                              $avgRating = $book->reviews_sum_rating/$book->reviews_count;
          
                            }else{
                              $avgRating = 0;
                            }
          
                            $avgRatingPer = ($avgRating*100)/5;
                            @endphp

                            <tr>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{number_format($avgRating,1)}} ({{($book->reviews_count > 1) ? $book->reviews_count.' Reviews' : $book->reviews_count.' Review'}})</td>
                                <td>
                                    @if ($book->status == 1)
                                        <span class="badge rounded-pill bg-success">Active</span>
                                        @else
                                        <span class="badge rounded-pill bg-danger">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- <a href="#" class="btn btn-success btn-sm"><i class="fa-regular fa-star"></i></a> --}}
                                    <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="deleteBook({{$book->id}})" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr> 
                            @endforeach
                                @else
                                <tr><td colspan="5">
                                    Books Not Found
                                </td>
                                </tr>
                            @endif
                        
                        </tbody>
                    </thead>
                </table>   
                <nav aria-label="Page navigation " >
                  {{$books->links('pagination::bootstrap-5')}}
                  </nav>                  
            </div>
            
        </div>   
      </div>
  </div>       
</div>
  
@endsection

@section('customJs')
<script>
    function deleteBook(id) {
        var url = '{{route("books.destroy","ID")}}';
        var newUrl = url.replace("ID",id);
        if(confirm("Are you sure you want to delete?")) {
            $.ajax({
                url: newUrl,
                type:'delete',
                data: {
                    "_token" : "{{csrf_token()}}"
                },
                success:function(response) {
                    window.location.href="{{route('books.index')}}";
                }
            });
        }
    }
</script>

@endsection