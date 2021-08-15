<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\staff;
use App\monthlyReturn;
use App\stafflist;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = staff::all();
        return view('emis.staff.reg_staff')->with('staff', $staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function monthlyRet()
    {
        $monthlyReturns = monthlyReturn::all();
        return view('emis.monthlyReturns.monthlyRet')->with('monthlyReturns', $monthlyReturns);
    }
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
            'inputSection'=>'required',
            'inputSurname'=>'required',
            'inputFirstName'=>'required',
            'inputSex'=>'required',
            'inputDateOfBirth'=>'required',
            'inputEmail'=>'required',
            'inputPhoneNumber'=>'required',
            'inputFirstAppointment'=>'required',
            'inputConfirmation'=>'required',
            'entryQualification'=>'required',
            'highestQualification'=>'required',
            'lastAppointment'=>'required',
            'inputState'=>'required',
            'inputLGA'=>'required',
            'inputHomeTown'=>'required',
            'inputGradeLevel'=>'required',
            'inputStep'=>'required',
            'inputPSN'=>'required',
            'passport'=>'required',
          ]);
          
          $staff = new staff();
          $staff-> user_id = Auth::user()->id;
          $staff-> session_id = Auth::user()->id;
          $staff-> section_id =$request->input('inputSection');
          $staff-> surName = $request->input('inputSurname');
          $staff-> firstName = $request->input('inputFirstName');
          $staff-> otherName = $request->input('inputOtherName');
          $staff-> sex = $request->input('inputSex');
          $staff-> eMail = $request->input('inputEmail');
          $staff-> dob = $request->input('inputDateOfBirth');
          $staff-> phoneNumber = $request->input('inputPhoneNumber');
          $staff-> firstAppointment = $request->input('inputFirstAppointment');
          $staff-> confirmation = $request->input('inputConfirmation');
          $staff-> entryQualification = $request->input('entryQualification');
          $staff-> highestQualification = $request->input('highestQualification');
          $staff-> lastAppointment = $request->input('lastAppointment');
          $staff-> State = $request->input('inputState');
          $staff-> lga = $request->input('inputLGA');
          $staff-> homeTown = $request->input('inputHomeTown');
          $staff-> gradeLevel = $request->input('inputGradeLevel');
          $staff-> step = $request->input('inputStep');
          $staff-> psn = $request->input('inputPSN');
          $staff-> passport = $request->input('passport');
          $staff-> source = "internalScreening";
          $staff-> status = "0";
          $staff->save();
          return back()->with('success','Staff added successfully!');

    }

    public function monthlyReturns(Request $request)
    {
        $this->validate($request,[
            'year'=>'required',
            'month'=>'required',
            'school'=>'required',
            'name'=>'required',
            'sex'=>'required',
            'dob'=>'required',
            'firstAppointment'=>'required',
            'highestQualification'=>'required',
            'dateOfLastAppt'=>'required',
            'rank'=>'required',
            'classTaught'=>'required',
            'lga'=>'required',
            'state'=>'required',
            'gl'=>'required',
            'yrsInPresentStation'=>'required',
            'yrsInService'=>'required',
            'psn'=>'required',

          ]);
          
          $monthlyReturns = new monthlyReturn();
          $monthlyReturns-> user_id = Auth::user()->id;
          $monthlyReturns-> year = $request->input('year');
          $monthlyReturns-> month = $request->input('month');
          $monthlyReturns-> school = $request->input('school');
          $monthlyReturns-> name = $request->input('name');
          $monthlyReturns-> sex = $request->input('sex');
          $monthlyReturns-> dob = $request->input('dob');
          $monthlyReturns-> firstAppointment = $request->input('firstAppointment');
          $monthlyReturns-> highestQualification = $request->input('highestQualification');
          $monthlyReturns-> dateOfLastAppointment = $request->input('dateOfLastAppt');
          $monthlyReturns-> rank = $request->input('rank');
          $monthlyReturns-> classTaught = $request->input('classTaught');
          $monthlyReturns-> lga = $request->input('lga');
          $monthlyReturns-> state = $request->input('state');
          $monthlyReturns-> gl = $request->input('gl');
          $monthlyReturns-> yrsInPresentStation = $request->input('yrsInPresentStation');
          $monthlyReturns-> yrsInService = $request->input('yrsInService');
          $monthlyReturns-> psn = $request->input('psn');
          $monthlyReturns-> status = "0";
          
          $monthlyReturns->save();
          return back()->with('success','Monthly Return Saved successfully!');

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
        //
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
