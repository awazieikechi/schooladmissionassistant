
namespace App\Http\Controllers\API;

use App\Course;
use App\User;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiCourseController extends Controller
{


        public function getCourses(Request $request, Course $course){

         $validatedData = $request->validate([
        'coursename' => 'required|max:255',
        'institution' => 'nullable|max:255',
        'city' => 'nullable|max:255',
        'state' => 'nullable|max:255'
    ]);
            
            
             }

}