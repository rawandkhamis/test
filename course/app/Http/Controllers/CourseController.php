<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $courses=course::all();
     return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $validate=$request->validate([
'name'=>['required'],
'price'=>['required']
       ]);
       course::create([
'name'=>$request->name ,
'price'=>$request->price
       ]);
       return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = course::findOrFail($id)->where('id', $id)->first();
        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        course::findOrFail($id)->update([
            'name'=>$request->new_name ,
          'price'=>$request->new_price
        ]);
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       course::destroy($id);
       return redirect()->route('courses.index');
    }
}
