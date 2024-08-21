<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = Book::orderBy('created_at', 'DESC');

        if(!empty($request->keyword)) {
            $books->where('title', 'like', '%'.$request->keyword.'%');
            $books->orWhere('author', 'like', '%'.$request->keyword.'%');


        }

        $books = $books->withCount('reviews')->withSum('reviews','rating')->paginate(10);

        return view('books.list',[
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
               'title' => 'required',
               'author' => 'required',
               'status' => 'required'
        ];

        if(!empty($request->image)) {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
           return redirect()->route('books.create')->withInput()->withErrors($validator); 
        }

            // save book in DB
            $book = new Book();
            $book->title = $request->title;
            $book->author = $request->author;
            $book->description = $request->description;
            $book->status = $request->status;
            $book->save();

        // uplodad book image here

        if(!empty($request->image)) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;
            $image->move(public_path("uploads/books"),$imageName);
            $book->image = $imageName;
            $book->save();


            // Create thumb
            $imageLocation = public_path().'/uploads/books/'.$imageName;
            $imagePath = Image::read($imageLocation);
            $imageSave = public_path('/uploads/books/thumb/');
            $imagePath->resize(990);
            $imagePath->save($imageSave.$imageName);
        }
        

        return redirect()->route('books.index')->with('success', 'Book added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);

       return view('books.edit',[
        'book' => $book
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        $rules = [
            'title' => 'required',
            'author' => 'required',
            'status' => 'required'
     ];

     if(!empty($request->image)) {
         $rules['image'] = 'image';
     }

     $validator = Validator::make($request->all(), $rules);

     if($validator->fails()) {
        return redirect()->route('books.edit')->withInput()->withErrors($validator); 
     }


       // update book in DB
 
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->status = $request->status;
        $book->save();

        // uplodad book image here

        if(!empty($request->image)) {
        //    old file deleted
        File::delete(public_path('/uploads/books/'.$book->image));
        File::delete(public_path('/uploads/books/thumb/'.$book->image));

        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;
        $image->move(public_path("uploads/books"),$imageName);
        $book->image = $imageName;
        $book->save();


        // Create thumb
        $imageLocation = public_path().'/uploads/books/'.$imageName;
        $imagePath = Image::read($imageLocation);
        $imageSave = public_path('/uploads/books/thumb/');
        $imagePath->resize(990);
        $imagePath->save($imageSave.$imageName);
        }


     return redirect()->route('books.index')->with('success', 'Book Updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        //  old file deleted
        File::delete(public_path('/uploads/books/'.$book->image));
        File::delete(public_path('/uploads/books/thumb/'.$book->image));

        $book->delete();

        session()->flash('success', 'Book deleted successfully');
        return response()->json([
            'status' => true,
            'message' => 'Book deleted successfully'
        ]);
    }


}
