<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Country;
use App\Models\Admin\Course;
use App\Models\Admin\CourseProgram;
use App\Models\Admin\IntakeMonth;
use App\Models\Admin\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    // function to show course list page
    public function courseList()
    {
        $courses = Course::all();
        return view('admin.course.course-list', compact('courses'));
    }
    
    // function to show add course page
    public function addCourse()
    {
        $countries      = Country::all();
        $universities   = University::all();
        $coursePrograms = CourseProgram::all();
        $intakeMonths   = IntakeMonth::all();
        return view('admin.course.add-new-course', compact('countries','universities','coursePrograms','intakeMonths'));
    }

    // function to save new course
    public function saveCourse(Request $request)
    {
        $request->validate([
            'university_id'       => 'required|exists:universities,id',
            'country_id'          => 'required|exists:countries,id',
            'course_program_id'   => 'required|exists:course_programs,id',
            'intake_month_id'     => 'required|array',
            'course_name'         => 'required|string|max:255',
            'application_fee'     => 'required|string|max:255',
            'tuition_fee_per_year'=> 'required|string|max:255',
            'program_length'      => 'required|string|max:255',
            'course_details'      => 'required',
        ]);

        DB::beginTransaction();
        try {
        
            $course = new Course();
            $course->university_id        = $request->university_id;
            $course->country_id           = $request->country_id;
            $course->course_program_id    = $request->course_program_id;
            $course->intake_month_id      = json_encode($request->intake_month_id);
            $course->course_name          = $request->course_name;
            $course->application_fee      = $request->application_fee;
            $course->tuition_fee_per_year = $request->tuition_fee_per_year;
            $course->program_length       = $request->program_length;
            $course->course_details       = $request->course_details;
            $course->save();
            
            DB::commit();
            Alert::success('Success', 'Course added successfuly');
            return redirect()->back();
        }catch (\Exception $e) {
            DB::rollback();
            Alert::error('Error', 'Failed to added course. Please try again.');
            return redirect()->back();
        }
    }

    // function to edit course
    public function editCourse($id)
    {
        $countries      = Country::all();
        $universities   = University::all();
        $coursePrograms = CourseProgram::all();
        $intakeMonths   = IntakeMonth::all();
        $course         = Course::findOrFail($id);
        $course->intake_month_ids = json_decode($course->intake_month_id, true) ?? [];
        return view('admin.course.edit-course', compact('countries','universities','coursePrograms','intakeMonths','course'));
    }
    
    // function to update course
    public function updateCourse(Request $request, $id)
    {
           $request->validate([
            'university_id'       => 'required|exists:universities,id',
            'country_id'          => 'required|exists:countries,id',
            'course_program_id'   => 'required|exists:course_programs,id',
            'intake_month_id'     => 'required|array',
            'course_name'         => 'required|string|max:255',
            'application_fee'     => 'required|string|max:255',
            'tuition_fee_per_year'=> 'required|string|max:255',
            'program_length'      => 'required|string|max:255',
            'course_details'      => 'required',
        ]); 
        DB::beginTransaction();
        try {
            $course = Course::findOrFail($id);
            $course->university_id        = $request->university_id;
            $course->country_id           = $request->country_id;
            $course->course_program_id    = $request->course_program_id;
            $course->intake_month_id      = json_encode($request->intake_month_id);
            $course->course_name          = $request->course_name;
            $course->application_fee      = $request->application_fee;
            $course->tuition_fee_per_year = $request->tuition_fee_per_year;
            $course->program_length       = $request->program_length;
            $course->course_details       = $request->course_details;
            $course->update();
            DB::commit();
            Alert::success('Success', 'Course updated successfuly');
            return redirect()->back();
        }catch (\Exception $e) {
            DB::rollback();
            Alert::error('Error', 'Failed to update course. Please try again.');
            return redirect()->back();
        }
    }
                                                                   
    // function to delete course
    public function deleteCourse($id)
    {
        try {
            $course = Course::findOrFail($id);
            $course->delete();
            Alert::success('Success', 'Course deleted successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Failed to delete course. Please try again.');
            return redirect()->back();
        }
    }
}   
