<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\Contact;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // all student
    public function student()
    {
    	if(request()->ajax())
        {
            $data = Student::latest()->get();
            return datatables()->of($data)
                    ->addColumn('action', function($data){
                        $button = '';
                        

                            $button .= '<button type="button" id="'.$data->id.'" class="view btn btn-primary btn-sm mr-1"><i class="fa ft-edit"></i>&nbsp;view</button>';
                            

                        return $button;
                    })
    

                    ->rawColumns(['action'])
                    ->make(true);
        }
    	return view('backend.pages.student');
    }
    public function store(Request $request)
    {
       
    	$student=new Student;
    	$student->name=$request->name;
    	$student->fname=$request->fname;
    	$student->mname=$request->mname;
    	$student->preaddress=$request->preaddress;
    	$student->peraddress=$request->peraddress;
    	$student->office=$request->office;
    	$student->nid=$request->nid;
    	$student->occupation=$request->occupation;
    	$student->dob=$request->dob;
    	$student->nation=$request->nation;
    	$student->blood=$request->blood;
    	$student->gender=$request->gender;
    	$student->email=$request->email;
    	$student->phone=$request->phone;
    	$student->gphone=$request->gphone;
    	$student->relationship=$request->relationship;
    	$student->school1=$request->school1;
    	$student->school2=$request->school2;
    	$student->school3=$request->school3;
    	$student->school4=$request->school4;
    	$student->board1=$request->board1;
    	$student->board2=$request->board2;
    	$student->board3=$request->board3;
    	$student->board4=$request->board4;
    	$student->year1=$request->year1;
    	$student->year2=$request->year2;
    	$student->year3=$request->year3;
    	$student->year4=$request->year4;
    	$student->cgpa1=$request->cgpa1;
    	$student->cgpa2=$request->cgpa2;
    	$student->cgpa3=$request->cgpa3;
    	$student->cgpa4=$request->cgpa4;
    	$student->rname=$request->rname;
    	$student->rnumber=$request->rnumber;
    	$student->batch=$request->batch;
    	$student->rid=$request->rid;
    	$student->rrelationship=$request->rrelationship;

    
    	$student->save();
    	return redirect()->route('welcome');
	
    }
    

    // contact view
    public function contact(){
    	$contacts=Contact::orderBY('id','desc')->get();
    	return view('backend.pages.contact',compact('contacts'));
    }

    // contact store
    public function contac_store(Request $request)
    {
    	$contact=new Contact;
    	$contact->name=$request->name;
    	$contact->email=$request->email;
    	$contact->subject=$request->subject;
    	$contact->message=$request->message;
    	$contact->save();
    	return back();
    }

}
