<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;
use App\Models\EventType;
use App\Models\Food;
use App\Models\Payment;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hires=Reservation::with('user','drink','eventtype','food.venu')->latest('id')->get();
        //return $hires;
        return view('admin.order.order-list',compact(['hires']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payments=Payment::all();
        $hires=Reservation::with('user','drink','eventtype','food.venu')->where('user_id',Auth::id())->latest('id')->get();
        //return $hires;
        return view('admin.my-order.my-order-list',compact(['hires','payments']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice=Reservation::with('user','drink','eventtype','food.venu')->find($id);
        //return $invoice;
        return view('admin.invoice.invoice',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         Hire::whereId($id)->update(['process'=>'completed']);
        session()->flash('msg','Order approved');
        return redirect()->back();
    }
     public function orderSattus(Request $request,$id)
    {
       
        Reservation::whereId($request->id)->update(['process'=>$request->process]);
        session()->flash('msg','Status updated');
         return back();
    }
public function completeTransaction(Request $request)
{
    //return $request;
    
         $validator=Validator::make($request->all(),[
            'payment' => 'required',
            'transaction_id' =>($request->payment=='Cash_in')?'':'required',
        ]);
         if ($validator->fails())
        {
            if(!$request->ajax())
            {
              return redirect()->back()->withErrors($validator)->withInput();
            }
            return response()->json(array(
                'success'=>false,
                'errors' => $validator->getMessageBag()->toArray()),400);
        }else
        {
              Reservation::whereId($request->id)->update($request->except(['_token','_method','id']));
             if(!$request->ajax())
            {
              session()->flash('msg','Data update successfully');
              return redirect()->back();
            }
          return response()->json(['msg'=>'Data update successfully'],200);

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
