<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Venu;

class VenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venus=Venu::latest('id')->get();
        //return $profiles;
        return view('admin.venu.venu-list',compact(['venus']));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:venus,name',
            'mobile' => 'required|digits:11',
            'cost' => 'required|numeric',
            'capacity' => 'required|numeric',
            'address' => 'required',
            'image' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
       
          if ($validator->passes())
          {
            $path='public/admin/image/venu';
            if(!Storage::exists($path)){
                Storage::makeDirectory($path);
            }
             $img=$request->file('image');
            // return uniqid('img_',true).$img->getClientOriginalName();
            $product_name=uniqid('img_',true).$img->getClientOriginalName();
            $img->storeAs($path,$product_name);
            //return $product_name;
            $data = $request->all();

            $data['image'] ='storage/app/'.$path.'/'.$product_name;
           // return $data;
            $phots=Venu::create($data);
             if(!$request->ajax())
            {
              session()->flash('msg','Profile create successfully');
              return redirect()->back();
            }
            return \Response::json(['success'=>'Data is successfully added','photos'=>$phots]);
          }
           if(!$request->ajax())
            {
              return redirect()->back()->withErrors($validator)->withInput();
            }
          return \Response::json(['success'=>false,'errors'=>$validator->errors()->all()]);
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
          $venu = Venu::find($id);
          return view('admin.venu.venu-edit',compact(['venu']));

        if($photo){
            return response()->json($photo, 200);
        }else {
            return response()->json('Data not found');
        }
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
         $validator = Validator::make($request->all(), [
             'name' => 'required|unique:venus,name,'.$id,
            'mobile' => 'required|digits:11',
            'cost' => 'required|numeric',
            'capacity' => 'required|numeric',
            'address' => 'required',
            'image' =>  ($request->file('image'))?'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048':'',
          ]);
       
       
          if ($validator->passes())
          {
             $path='public/admin/image/venu';
            if(!Storage::exists($path)){
                Storage::makeDirectory($path);
            }
             $product_name='';
            $form_data = $request->except(['_token','_method']);;
            if ($request->file('image')) {
            $img=$request->file('image');
            $product_name=uniqid('img_',true).$img->getClientOriginalName();
            $img->storeAs($path,$product_name);
            $form_data['image']='storage/app/'.$path.'/'.$product_name;
            $pfl=Venu::find($id);
              unlink($pfl->image);
            }
              
             $phots=Venu::whereId($id)->update($form_data);
             if(!$request->ajax())
            {
              session()->flash('msg','Data update successfully');
              return redirect()->back();
            }
            return \Response::json(['success'=>'Data is successfully update','poc'=>$phots]);
          }
          //return 'not access';
          if(!$request->ajax())
            {
              return redirect()->back()->withErrors($validator)->withInput();
            }
          return \Response::json(['success'=>false,'errors'=>$validator->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $product=Venu::find($id);
         unlink($product->image);
        $product->delete();
        
        session()->flash('msg','Data Deleted successfully');
        return redirect()->back();
    }
}
