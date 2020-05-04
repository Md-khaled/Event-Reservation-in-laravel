<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Drink;
class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks=Drink::latest('id')->get();
        //return $profiles;
        return view('admin.drink.drink-list',compact(['drinks']));
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
            'type' => 'required|unique:drinks,type',
            'litter' => 'required|between:0,99.99',
            'cost' => 'required|numeric',
          ]
         
      );
       
          if ($validator->passes())
          {
            
             Drink::create($request->all());
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
         $drink = Drink::find($id);
          return view('admin.drink.drink-edit',compact(['drink']));

        if($drink){
            return response()->json($drink, 200);
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
            'type' => 'required|unique:drinks,type,'.$id,
            'litter' => 'required|between:0,99.99',
            'cost' => 'required|numeric',
          ]);
       
          if ($validator->passes())
          {
            
             Drink::whereId($id)->update($request->except(['_token','_method']));
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
         $product=Drink::find($id);
        $product->delete();
        
        session()->flash('msg','Data Deleted successfully');
        return redirect()->back();
    }
}
