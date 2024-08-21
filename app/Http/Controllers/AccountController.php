<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Auth\Notifications\ResetPassword;

class AccountController extends Controller
{
    // This method will show register page
    public function register() {
      return view('account.register');
    }


    // This method will registor a user
    public function processRegister(Request $request) {
      $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
      ]);

      if($validator->fails()) {
        return redirect()->route('account.register')->withInput()->withErrors($validator);
      }

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();

      return redirect()->route('account.login')->with('success','You have registerd successfully');
      
    }


    public function login() {
       return view('account.login');
    }

    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
            'password' => 'required'

        ]);

        if($validator->fails()) {
            return redirect()->route('account.login')->withInput()->withErrors($validator);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('account.profile');
              
        }else{
           return redirect()->route('account.login')->with('error','Either Email/Password is incorrect');
        }
    }


    // This method will show user profile page
    public function profile() {

        $user = User::findOrFail(Auth::user()->id);

        return view('account.profile',[
            'user' => $user
        ]);
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('account.login');
    }

    // This method will update user profile
    public function updateProfile(Request $request) {

        $rules =  [
                 'name' => 'required',
                 'email' => 'required|email|unique:users,email,'.Auth::user()->id.',id',

        ];

        if(!empty($request->image)) {
            $rules['image'] = 'image';
        }

     
      $validator = Validator::make($request->all(), $rules);

      if($validator->fails()) {
        return redirect()->route('account.profile')->withInput()->withErrors($validator);
      }

        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

       

        // Here we will upload image
        if(!empty($request->image)) {
          // delete old image here
          File::delete(public_path("uploads/profile/".$user->image));
          File::delete(public_path("uploads/profile/thumb/".$user->image));

          
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time(). '.'.$ext;
        $image->move(public_path("uploads/profile"), $imageName);
        $user->image = $imageName;
        $user->save();

  
        // create profile Pic thumb
        $ImageLocation = public_path().'/uploads/profile/'.$imageName;
        $imagePath = Image::read($ImageLocation);
        $imageSave = public_path('/uploads/profile/thumb/');
        $imagePath->cover(150,150);
        $imagePath->save($imageSave.$imageName);
        
        
    } 

      return redirect()->route('account.profile')->with('success', 'Profile Updated successfully');


    }

    public function myReviews() {
      $reviews = Review::with('book')->where('user_id', Auth::user()->id);
      $reviews = $reviews->orderBy('created_at', 'DESC');

         if(!empty($request->keyword)) {
          $reviews = $reviews->where('review', 'like', '%'.$request->keyword.'%');
         }

         $reviews = $reviews->paginate(10);

       return view('account.my-reviews.my-reviews',[
        'reviews' => $reviews
       ]);
    }

    // This method will show edit review page
    public function edit(string $id) {
      $review = Review::with('book')->where(['id' => $id, 'user_id' => Auth::user()->id])->first();

      return view('account.my-reviews.edit-reviews',[
        'review' => $review 
      ]);

    }
   
    public function updateReview(Request $request, string $id) {
      $review = Review::findOrFail($id);
       $validator = Validator::make($request->all(), [
           'review' => 'required',
           'rating' => 'required'
       ]);

       if($validator->fails()) {
          return redirect()->route('account.myReview-edit',$id)->withInput()->withErrors($validator);
       }
       $review->review = $request->review;
       $review->rating = $request->rating;
       $review->save();
     
      return redirect()->route('account.myReview')->with('success', 'Review updated successfully');
    }


    
    public function deletReview(Request $request) {
      $id = $request->id;

      $review = Review::findOrFail($id);

      if($review == null) {
        session()->flash('error', 'Review not found.');
        return response()->json([
             'status' => false
        ]);
      }
      
        $review->delete();

        session()->flash('success', 'Review deleted successfully.');
        return response()->json([
             'status' => true
        ]);
     
    }



    // This method will show update password page
    public function updatePassword() {
      return view('account.change-password');
    }

    public function processUpdatePassword(Request $request) {
        $validator = Validator::make($request->all(),[
               'old_password' => 'required',
               'new_password' => 'required',
               'confirm_password' => 'required|same:new_password'
        ]);

          if($validator->fails()) {
            return response()->json([
              'status' => false,
              'errors' => $validator->errors()
            ]);

          }
           if(Hash::check($request->old_password, Auth::user()->password) == false) {
            session()->flash('error', 'Your old password not correct');
              return response()->json([
                  'status'=> true
              ]);
           }

           $user = User::find(Auth::user()->id);
           $user->password = Hash::make($request->new_password);
           $user->save();

           session()->flash('success', 'Password updated successfully');
           return response()->json([
             'status' => true
           ]);

  
    }

    public function forgotPassword() {
      return view('account.forgot-password'); 
    }


    public function processForgotPassword(Request $request) {
      $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:users,email'
      ]);

      if($validator->fails()) {
        return redirect()->route('account.forgotPassword')->withInput()->withErrors($validator);
      }

      $token = Str::random(60);
      DB::table('password_reset_tokens')->where('email',$request->email)->delete();

      DB::table('password_reset_tokens')->insert([
          'email' => $request->email,
          'token' => $token,
          'created_at' => now()

      ]);

      // Send email here
      $user = User::where('email',$request->email)->first();

      $mailData = [
        'token' => $token,
        'user' => $user,
        'subject' => 'You have requested to change your password'
      ];

      Mail::to($request->email)->send(new ResetPasswordEmail($mailData));

      return redirect()->route('account.forgotPassword')->with('success','Reset Password email has been sent to your inbox.');
    }


    public function resetPassword($tokenString) {
      $token = DB::table('password_reset_tokens')->where('token',$tokenString)->first();
      if($token == null) {
        return redirect()->route('account.forgotPassword')->with('error', 'Invalid token');
      }


       return view('account.reset-password',[
        'tokenString' => $tokenString
       ]);
    }

    public function processResetPassword(Request $request) {

            $token = DB::table('password_reset_tokens')->where('token',$request->token)->first();


            if($token == null) {
            return redirect()->route('account.resetPassword')->with('error','Invalid token.');
        }

   
          $validator = Validator::make($request->all(),[
                'new_password' => 'required',
                'confirm_password' => 'required|same:new_password'
          ]);

          if($validator->fails()) {
            return redirect()->route('account.resetPassword',$request->token)->withInput()->withErrors($validator);
          }

          User::where('email',$token->email)->update([
              'password' => Hash::make($request->new_password) 
          ]);

          return redirect()->route('account.login')->with('success', 'You have successfully changed your password');
    }
}
