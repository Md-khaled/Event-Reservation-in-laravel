<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Helpers\StringHelper;
use App\Models\EventType;
use App\Models\Venu;
use App\Models\Food;
use App\Models\Decoration;
use App\Models\Equipment;
use App\Models\Drink;
use App\Models\Reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth')->only(['store']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo('sdsd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return $request;

          $todayDate = date('Y-m-d');
        //return $todayDate;
      $validator = Validator::make($request->all(), [
            'event_type_id' => 'required',
            'food_id' => 'required',
            //'phone' => 'required',
            //'address' => 'required',
              //'start_date' => 'required|date_format:Y-m-d|after_or_equal:'.$todayDate,
            //'category_id' => 'required',
            'start_date' => 'required|date_format:Y-m-d|after_or_equal:now',
            'guest' => 'required',
            'total' => 'required',
          ],
          [
            'food_id.required'=>'Venu field is required',
          ]
      );

          if ($validator->passes())
          {
             $datas=$request->all();
              if ($request->has('food')) {
           
        $foodtype =json_encode($request->food);
        $datas['foodtype']=$foodtype;
        }
        $datas['end_date']=$request->start_date;
        //return $datas;
             //$dd=Carbon::parse($request->start_date)->addDays($request->nday-1);

            //$dd=$dd->format('Y-m-d');
           //return $dd;
            $startTime=$request->start_date;
            $endTime=$request->start_date;
//             $eventsCount = Hire::where(function ($query) use ($startTime, $endTime) {
//  $query->where(function ($query) use ($startTime, $endTime) {
//     $query->where('start_date', '>=', $startTime)
//             ->where('end_date', '<', $startTime);
//     })
//     ->orWhere(function ($query) use ($startTime, $endTime) {
//         $query->where('start_date', '<', $endTime)
//                 ->where('end_date', '>=', $endTime);
//     });
// })->count();
            //     $eventsCount = Hire::where('start_date','<=', $request->start_date)
            // ->where('end_date','>=', $request->end_date)
            //  ->count();
             $eventsCount = Reservation::where('start_date','<=', $startTime)
             ->where('end_date','>=', $endTime)->orwhereBetween('start_date', array($startTime, $endTime))->orwherebetween('end_date', [$startTime,$startTime])->get();
                //return $eventsCount;
                if (!$eventsCount) {
                     if(!$request->ajax())
                    {
                      session()->flash('msg','Given dates already booked.Choose another date');
                      return redirect()->back();
                    }
                    return \Response::json(['success'=>'Given dates already booked.Choose another date']);
                }else{
                    $request->request->add(['end_date' =>$request->start_date]);
             Reservation::create($request->except(['dinner','lunch','breakfast','submit']));
             //return $datas;
             if(!$request->ajax())
            {
              session()->flash('msg','Order created.Please visit your dashoard');
              return redirect()->back();
            }
            return \Response::json(['success'=>'Order created.Please visit your dashoard']);
      
                }

                }
          //return 'not access';
          if(!$request->ajax())
            {
              return redirect()->back()->withErrors($validator)->withInput();
            }
          return \Response::json(['success'=>false,'errors'=>$validator->errors()->all()]);
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventid=$id;
        $venus=Food::with('venu')->get();
        $eventtypes=EventType::all();
        $decorations=Decoration::all();
        $drinks=Drink::all();
        $equipments=Equipment::all();
        $user= new Food;
        $table = $user->getTable();
        $columns  = \Schema::getColumnListing($table);
        //$columns = Schema::getColumnListing('foods'); 
       /* foreach ($venus as $key => $value) {
            foreach ($value as $ke => $value) {
                echo($ke);
            }
            
        }*/
        $reservations=Reservation::all();
        //return $reservations;
        return view('frontend.reservation.reservation',compact(['eventtypes','venus','eventid','columns','decorations','drinks','equipments','reservations']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
