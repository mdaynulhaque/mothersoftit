<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Student;
use DataTables;



class PagesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	//dashboard
    public function index()
    {
         if(request()->ajax())
        {
            $data = Student::whereDay('created_at', now()->day);
            return datatables()->of($data)
                    ->addColumn('action', function($data){
                        $button = '';
                        

                            $button .= '<button type="button" id="'.$data->id.'" class="view btn btn-primary btn-sm mr-1"><i class="fa ft-edit"></i>&nbsp;View</button>';
                            

                        return $button;
                    })
    

                    ->rawColumns(['action'])
                    ->make(true);
        }
    	
    	return view('backend.pages.index');
    }
    public function view_student($id)
    {
        if(request()->ajax())
        {
            $data = Student::findOrFail($id);
            return $data;
        }
    }
    // view all student
    public function viewAll($id){
        if(request()->ajax())
        {
            $data = Student::findOrFail($id);
            return $data;
        }
    }
    
}
