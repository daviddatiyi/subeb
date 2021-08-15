<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\student_group;

class studentGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_group = student_group::all();
        return view('school.studentGroup.studentGroup')->with('student_group',$student_group);
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
            'studentGroup'=>'required',       
        ]);
        
        $studentGroup = new student_group();
          $studentGroup-> user_Id = Auth::user()->id;
          $studentGroup-> session_id ="1";
          $studentGroup-> studentGroup = $request->input('studentGroup');
          $studentGroup-> status = "0";
          $studentGroup->save();
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
    public function update(Request $request)
    {
        $this->validate($request,[
            'studentGroup'=>'required',       
        ]);
        $id = $request->input('student_group_ID');
        $studentGroup = student_group::find($id);
          $studentGroup-> user_Id = Auth::user()->id;
          $studentGroup-> session_id ="1";
          $studentGroup-> studentGroup = $request->input('studentGroup');
          $studentGroup-> status = "0";
          $studentGroup->save();
        return back()->with('success','Student Class Updated Successfully!');
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
