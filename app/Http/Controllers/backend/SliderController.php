<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Model\Slider;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use Image;


class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(request()->ajax())
        {
            $data = Slider::latest()->get();
            return datatables()->of($data)
                    ->addColumn('action', function($data){
                        $button = '';
                        

                            $button .= '<button type="button" id="'.$data->id.'" class="edit btn btn-primary btn-sm mr-1"><i class="fa ft-edit"></i>&nbsp;Update</button>';
                            $button .= '<button type="button" id="'.$data->id.'" class="delete btn btn-danger btn-sm mr-1"><i class="fa ft-trash"></i>&nbsp;Delete</button>';

                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $url1=asset("$data->image");
                      
                        $button = '<img src='.$url1.' width="100" height="100" class="img-thumbnail" />';
                        

                        return $button;
                    })

                    ->rawColumns(['action', 'image'])
                    ->make(true);
        }
        return view('backend.pages.slider.index');
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
        
         $rules = array(
            'title'    =>  'required',

        );


        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = new Slider();
      


        // image load one with original image

         $image = $request->file('image');
        if ($image) {
            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
           
             // upload original image start here
             $upload_path1 = 'public/frontend/images/slide/';
             $image_url1 = $upload_path1 . $image_full_name;

            Image::make($image)->save($image_url1);
             // upload original image end here


             $data->image = $image_url1;

        }

        $data->title = $request->title;

        $success = $data->save();

        if($success){
             return response()->json(['success' => 'Data Added successfully.']);
        }
        else{
             return response()->json(['success' => 'Data Added Failed.']);
        }
    
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
        if(request()->ajax())
        {
            $data = Slider::findOrFail($id);
            return $data;
        }
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
        $rules = array(
            'title'    =>  'required',

        );


        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        // update id start
        $id = $request->updateId;
        $data =  Slider::find($id);
        //end update id


        // image load one with original image

         $image = $request->file('image');
        if ($image) {

            //delete image
            if(!empty($data->image)){

                $imgPath =$data->image;
                $delImg = unlink($imgPath);
            }

            // end delete image process


            $image_name = Str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
           
             // upload original image start here
             $upload_path1 = 'public/frontend/images/slide/';
             $image_url1 = $upload_path1 . $image_full_name;

            Image::make($image)->save($image_url1);
             // upload original image end here


             $data->image = $image_url1;

        }

        //end   image load one with original image




      //save data database in rooms table

        $data->title = $request->title;


        $success = $data->save();

        if($success){
             return response()->json(['success' => 'Data Update successfully.']);
        }
        else{
             return response()->json(['success' => 'Data Update Failed.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(request()->ajax()){

  

            $data = Slider::findOrFail($id); //find id here

            $imgName1 =$data->image;
            if(!empty($imgName1)){
                unlink($imgName1);
            }
      

            $success = $data->delete();
            if($success){
                return 'Deleted';
            }else{
                return 'Error';
            }
        } 
    }
}
