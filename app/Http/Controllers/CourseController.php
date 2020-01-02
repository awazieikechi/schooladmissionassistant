<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
     
    public function __construct()
    {
       $this->middleware('verified');
    }
 
    public function index()
    {
       $id = Auth::id();
       $user = \App\User::find($id);

       
    	if (Auth::check())
		{
            return view ('pages.course', [
                 'user' => $user
            	]);
		}
       
        else { return view ('/');}

    }
    
    public function getCourse(){
        $id = Auth::id();
        $users_courses= \App\Course::query()
                        ->where('user_id', $id)
                        ->select(['id','user_id', 'course_name', 'amount', 'postutme_score','ssce_requirements' ]);   
                                        
                          
                            return Datatables::of($users_courses)
                            
                            ->make();
                            
                            dd($user_courses);
    }

      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'course_name' => 'required|max:255',
        'amount' => 'nullable|numeric',
        'postutme_score' => 'nullable|numeric',
        'ssce_requirements' => 'nullable|min:3|max:1000'
    ]);
    
         $user = User::find(Auth::id());
            
         $user->courses()->create([
                   'course_name'   => $validatedData['course_name'],
                   'amount' => $validatedData['amount'],
                   'postutme_score' => $validatedData['postutme_score'],
                   'ssce_requirements' => $validatedData['ssce_requirements']
            ]);
             
             
        return redirect ('/course')->with('success' , 'Your Course has been successfully added!');
            
    
    
    }

    
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $validatedData = $request->validate([
        'course_name' => 'required|max:255',
        'amount' => 'nullable|numeric',
        'postutme_score' => 'nullable|numeric',
        'ssce_requirements' => 'nullable|min:3|max:1000'
    ]);
    
         $user = User::find(Auth::id());
         $user->courses()->updateorCreate([
            'user_id'   => Auth::user()->id,
            'course_name'   => $validatedData['course_name'],
            ],
                [
                  
                   'amount' => $validatedData['amount'],
                   'postutme_score' => $validatedData['postutme_score'],
                   'ssce_requirements' => $validatedData['ssce_requirements']
            ]);
             
             
        return redirect ('/course')->with('success' , 'Your Course has been successfully Updated!');
            
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Course $course)
    {
        $id = $request->input('id2');
        $user_course= \App\Course::find($id);
        
         $user_course->delete();
        return redirect ('/course')->with('success' , 'Your Course has been successfully Deleted!');
    }
}
