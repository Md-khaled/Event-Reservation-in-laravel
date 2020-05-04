<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\EventType;

class EventTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $EventTypes=EventType::latest('id')->get();
        //return $profiles;
        return view('admin.event.eventtype-list',compact(['EventTypes']));
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
            'type' => 'required|unique:event_types,type',
            'image' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
       
          if ($validator->passes())
          {
            $path='public/admin/image/event';
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
            $phots=EventType::create($data);
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
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enenttype = EventType::find($id);
          return view('admin.event.eventtype-edit',compact(['enenttype']));

        if($enenttype){
            return response()->json($enenttype, 200);
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
            'type' => 'required|unique:event_types,type,'.$id,
            'image' =>  ($request->file('image'))?'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048':'',
          ]);
       
       
          if ($validator->passes())
          {
             $path='public/admin/image/event';
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
            $pfl=EventType::find($id);
              unlink($pfl->image);
            }
              
             $phots=EventType::whereId($id)->update($form_data);
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
         $product=EventType::find($id);
         unlink($product->image);
        $product->delete();
        
        session()->flash('msg','Data Deleted successfully');
        return redirect()->back();
    }
}
