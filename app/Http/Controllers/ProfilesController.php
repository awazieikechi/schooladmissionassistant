<?php

namespace App\Http\Controllers;

use App\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
   
     public function __construct()
    {
       $this->middleware('verified');
    }

         /*************************************************************************************/
                       
                       /* Profile Page for User*/

         /*************************************************************************************/
                                     
    public function index(Request $request){

      // Find User

       $id = Auth::id();
       $user = \App\User::find($id);

       
    	if (Auth::check())
		{
            return view ('profiles.index', [
                 'user' => $user
            	]);
		}
       
        else { return view ('/');}


    }
   
     /*************************************************************************************/
                       
               
               /* Edit Profile page for User*/

    /*************************************************************************************/
                       
     
     public function edit(){

     $user = User::find(Auth::user()->id);
     return view ('profiles.edit', [
         'user' => $user
    	]);
		
    }   

 /*************************************************************************************/
                       
               
               /* Update Profile page for User*/

    /*************************************************************************************/
                              
    
    public function update(User $user){
      
      //  Update Profile   
        $user_data = request()->validate([
           'institution' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phonenumber' => ['required', 'numeric', 'min:11'],
            'institution_address' => ['required', 'string', 'max:255'],
            'institution_website' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
        ]);
          
                 	
    	auth()->user()->update($user_data);
    	return redirect ('/profile')->with('success', 'Your Profile has been successfully updated!');
    }

     
}
