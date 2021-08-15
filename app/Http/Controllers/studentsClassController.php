<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\student_class;

class studentsClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_class = student_class::all();
        return view('school.classes.studentClass')->with('student_class',$student_class);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'studentClass'=>'required',       
        ]);
        
        $studentClass = new student_class();
          $studentClass-> user_Id = Auth::user()->id;
          $studentClass-> session_id ="1";
          $studentClass-> studentClass = $request->input('studentClass');
          $studentClass-> status = "0";
          $studentClass->save();
        return back()->with('success','Student Class Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'studentClass'=>'required',       
        ]);
          $id = $request->input('class_ID');
          $studentClass = student_class::find($id);
          $studentClass-> user_Id = Auth::user()->id;
          $studentClass-> session_id ="1";
          $studentClass-> studentClass = $request->input('studentClass');
          $studentClass-> status = "0";
          $studentClass->save();
        return back()->with('success','Student Class Created Successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
