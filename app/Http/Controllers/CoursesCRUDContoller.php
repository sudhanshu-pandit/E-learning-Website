<?php
  
namespace App\Http\Controllers;
  
use App\Models\Course;
use Illuminate\Http\Request;
  
class CoursesCRUDContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::latest()->paginate(5);
    
        return view('dashboard.course.index',compact('course'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.course.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Course::create($input);
     
        return redirect()->route('course.index')
                        ->with('success','Course created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($course_id)
    {   
        $course = Course:: where(['id'=>$course_id])->first();
        return view('dashboard.course.show',compact('course'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($course_id)
    {
        $course = Course:: where(['id'=>$course_id])->first();
        return view('dashboard.course.edit',compact('course'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $course->update($input);
    
        return redirect()->route('course.index')
                        ->with('success','Course updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($course_id)
    {
        $course = Course:: where(['id'=>$course_id])->delete();
        return redirect()->route('course.index')
                        ->with('success','Course deleted successfully');
    }
}