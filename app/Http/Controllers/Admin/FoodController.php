<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Helpers\StringHelper;
use App\Models\Venu;
use App\Models\Food;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $venus=Venu::select('id','name')->get();
        $foods=Food::latest('id')->get();
        //return $products;
        return view('admin.food.food-list',compact(['venus','foods']));
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
            'venuid' => 'required|unique:foods,venu_id',
            'breakfast' => 'required|numeric',
            'lunchnormal' => 'required|numeric',
            'lunchdeluxe' => 'required|numeric',
            'lunchroyal' => 'required|numeric',
            'dinnernormal' => 'required|numeric',
            'dinnerdeluxe' => 'required|numeric',
            'dinnerroyal' => 'required|numeric',
          ]);
       
          if ($validator->passes())
          {
           $data['venu_id']=$request->venuid;
       $data['breakfast']=$request->breakfast;
       $data['lunch_normal']=$request->lunchnormal;
       $data['lunch_deluxe']=$request->lunchdeluxe;
       $data['lunch_royal']=$request->lunchroyal;
       $data['dinner_normal']=$request->dinnernormal;
       $data['dinner_deluxe']=$request->dinnerdeluxe;
       $data['dinner_royal']=$request->dinnerroyal;
            
             Food::create($data);
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
         $venus=Venu::select('id','name')->get();
         $food = Food::find($id);
          return view('admin.food.food-edit',compact(['venus','food']));

        if($food){
            return response()->json($food, 200);
        }else {
            return response()->json('Task not found');
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
            'venu_id' => 'required|unique:foods,venu_id,'.$id,
            'breakfast' => 'required|numeric',
            'lunch_normal' => 'required|numeric',
            'lunch_deluxe' => 'required|numeric',
            'lunch_royal' => 'required|numeric',
            'dinner_normal' => 'required|numeric',
            'dinner_deluxe' => 'required|numeric',
            'dinner_royal' => 'required|numeric',
          ]);
       
          if ($validator->passes())
          {
            
             Food::whereId($id)->update($request->except(['_token','_method']));
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
        $product=Food::find($id);
        $product->delete();
        
        session()->flash('msg','Data Deleted successfully');
        return redirect()->back();
    }
}
