<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Equipment;
class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $equipments=Equipment::latest('id')->get();
        //return $profiles;
        return view('admin.equipment.equipment-list',compact(['equipments']));
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
            'type' => 'required|unique:equipment,type',
            'cost' => 'required|numeric',
          ]);
       
          if ($validator->passes())
          {
            
             Equipment::create($request->all());
             if(!$request->ajax())
            {
              session()->flash('msg','Record create successfully');
              return redirect()->back();
            }
            return \Response::json(['success'=>'Data is successfully added']);
          }
          //return 'not access';
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
         $equipment = Equipment::find($id);
          return view('admin.equipment.equipment-edit',compact(['equipment']));

        if($equipment){
            return response()->json($equipment, 200);
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
             'type' => 'required|unique:equipment,type,'.$id,
            'cost' => 'required|numeric',
          ]);
       
          if ($validator->passes())
          {
            
             Equipment::whereId($id)->update($request->except(['_token','_method']));
             if(!$request->ajax())
            {
              session()->flash('msg','Record update successfully');
              return redirect()->back();
            }
            return \Response::json(['success'=>'Record update successfully']);
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
         $product=Equipment::find($id);
        $product->delete();
        
        session()->flash('msg','Data Deleted successfully');
        return redirect()->back();
    }
}
