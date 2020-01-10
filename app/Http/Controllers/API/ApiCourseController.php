<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;

class ApiCourseController extends Controller
{
    //
    
    
    public function getCourses(Request $request, Course $course){

         $validatedData = $request->validate([
        'coursename' => 'required|max:255',
        'type-institution' => 'nullable|max:255',
        'city' => 'nullable|max:255',
        'state' => 'nullable|max:255'
    ]);
                  
    
                 $course = $course->newQuery();
                
                // Search for a course based on their name.
                if ($request->has('coursename')) {
                    $course->where('course_name','LIKE', '%'. $validatedData['coursename'].'%');
                }
                
                
            
                 //  Search for a course based on their institution.
                if ($request->has('type-institution')) {
                    $course->whereHas('User', function ($query) use ($validatedData) {
                        $query->where('institution_type','LIKE', '%'. $validatedData['type-institution'].'%');
                    });
                }
                 
                
                //  Search for a course based on their city.
                if ($request->has('city')) {
                    $course->whereHas('User', function ($query) use ($validatedData) {
                        $query->where('city','LIKE', '%'. $validatedData['city'].'%');
                    });
                }
                
                
                //  Search for a course based on their state.
                if ($request->has('state')) {
                    $course->whereHas('User', function ($query) use ($validatedData) {
                      $query->where('state','LIKE', '%'. $validatedData['state'].'%');
                  
                    });
                }
                
                return $course->join('users', 'users.id', '=', 'user_id')
                              ->select(['users.id', 'users.institution', 'users.institution_website', 'courses.course_name','courses.postutme_score', 'courses.amount', 'courses.ssce_requirements'])
                              ->paginate(10);
                
                return response()->json( [
                      'course'=> CourseResource::collection($course),
                      

                  ]);
                
           }
}