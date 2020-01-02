<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function index()
    {
        
        // Get User Id
                $id = Auth::id();
                $user = \App\User::find($id);
                
        //Find Users Courses                           
                $usercourses = Course::where('user_id', $id);
        return view('pages.dashboard', compact('usercourses'));
    }
    
     public function destroy()
        
        {
                           auth()->logout();

                         return redirect('/');
          
            
        }
        
         /*************************************************************************************/
                       
                           //Chnage Password View

          /*************************************************************************************/
                       
    
                            public function showChangePasswordForm(){

                               return view('pages.user_change_password');
                             }
    

     /*************************************************************************************/
                       
                        // Change Password Logic

    /*************************************************************************************/
                       
     public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }


     public function getCalender(){
         
         return view('pages.get-calender');
         
     }
}
