<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\student;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        // $students = DB::table('student')
        

        
        $students = student::all();
      return view('school.reg_Student')->with('students', $students);
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
    public function stores(Request $request)
    {
        $data = request()->validate([
            'surName'=>'required',
            'session_id' => '1',
            'firstName'=>'required',
            'otherName' => '',
            'gender'=>'required',
            'eMail'=>'required',
            'DOB'=>'required',
            'disability'=>'required',
            'phoneNumber'=>'required',
            'state'=>'required',
            'lga'=>'required',
            'homeTown'=>'required',
            'passport'=>'required|mimes:jpg,jpeg,png,bmp|max:20000',
             
        ]);
        
        $imagePath = request('passport')->store('uploads', 'public');
        auth()->user()->students()->Create([
            'surName' => $data['surName'],
            'session_id' => "1",
            'firstName' => $data['firstName'],
            'otherName' => $data['otherName'],
            'gender' => $data['gender'],
            'eMail' => $data['eMail'],
            'DOB' => $data['DOB'],
            'disability' => $data['disability'],
            'phoneNumber' => $data['phoneNumber'],
            'state' => $data['state'],
            'lga' => $data['lga'],
            'homeTown' => $data['homeTown'],
            'passport' => $imagePath
        ]);
        return back()->with('success','Student Registered Successfully!');
    }
        
    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    //         'surName'=>'required',
    //         'firstName'=>'required',
    //         'gender'=>'required',
    //         'eMail'=>'required',
    //         'DOB'=>'required',
    //         'disability'=>'required',
    //         'phoneNumber'=>'required',
    //         'state'=>'required',
    //         'lga'=>'required',
    //         'homeTown'=>'required',
    //         'passport'=>'required|mimes:jpg,jpeg,png|max:20000'
    //       ]);

        //   dd(request()->all());
          
        //   if ($request->file('passport')) {
        //       $file = $request->file('passport');
        //       $filename = date('YmdHi').$file.getClientOriginalName();
        //       $file->move(public_path('studentPassport'), $filename);

        //   }
         
    //       $student = new student();
    //       $student-> user_Id = Auth::user()->id;
    //       $student-> session_id = "0";
    //       $student-> surName = $request->input('surName');
    //       $student-> firstName = $request->input('firstName');
    //       $student-> otherName = $request->input('otherName');
    //       $student-> gender = $request->input('gender');
    //       $student-> eMail = $request->input('eMail');
    //       $student-> DOB = $request->input('DOB');
    //       $student-> disability = $request->input('disability');
    //       $student-> phoneNumber = $request->input('phoneNumber');
    //       $student-> state = $request->input('state');
    //       $student-> lga = $request->input('lga');
    //       $student-> homeTown = $request->input('homeTown');
    //       $student-> passport= $request->input('passport');
    //       $student-> status = "0";
    //       $student->save();
    //       return back()->with('success','Student Registered Successfully!');
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(App\User $user)
    {
        return view('student.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStudent(Request $request)
    {
        
        $this->validate($request,[
            'surName'=>'required',
            'firstName'=>'required',
            'gender'=>'required',
            'eMail'=>'required',
            'DOB'=>'required',
            'disability'=>'required',
            'phoneNumber'=>'required',
            'state'=>'required',
            'lga'=>'required',
            'homeTown'=>'required',
            'passport'=>'required|mimes:jpg,jpeg,png|max:20000'
          ]);

       
        //   if ($request->file('passport')) {
        //       $file = $request->file('passport');
        //       $filename = date('YmdHi').$file.getClientOriginalName();
        //       $file->move(public_path('studentPassport'), $filename);

        //   }
        $imagePath = request('passport')->store('uploads', 'public');
        $id = $request->input('student_ID');
          $student = student::find($id);
          $student-> user_Id = Auth::user()->id;
          $student-> session_id = "0";
          $student-> surName = $request->input('surName');
          $student-> firstName = $request->input('firstName');
          $student-> otherName = $request->input('otherName');
          $student-> gender = $request->input('gender');
          $student-> eMail = $request->input('eMail');
          $student-> DOB = $request->input('DOB');
          $student-> disability = $request->input('disability');
          $student-> phoneNumber = $request->input('phoneNumber');
          $student-> state = $request->input('state');
          $student-> lga = $request->input('lga');
          $student-> homeTown = $request->input('homeTown');
          $student-> passport = $imagePath;
          $student-> status = "0";
          $student->save();
           
          return back()->with('success','Student Record Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function deleteStudenta(Request $request)
    {
        $id = $request->input('studentID');
        $student = student::find($id);
        $student->delete();
        return back()->with('success','Student deleted successfully!');
    }
    public function destroy(student $student)
    {
        $student->delete();
      
        return back()->with('success','Student deleted successfully!');
    }
    // public function deleteStudent(Request $request)
    // {
    //     $id = $request->input('studentID');
    //     $delete = student::find($id);
    //     $delete->delete();
    //     return back()->with('success','Student deleted successfully!');
    // }
}
