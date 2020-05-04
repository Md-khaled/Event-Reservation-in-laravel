<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventType;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $eventtypes=EventType::all();
        return view('frontend.home.land',compact(['eventtypes']));
    }
    public function searchByLocation($id)
    {
        $users=[];

        $dists=Category::with(['prices.user.avg'])->has('prices')->get();
        //return $dists;
        foreach ($dists as $user) {
            foreach ($user->prices as $key=>$value) {
                if ($value->user!=null) {
               if ($value->user->district_id==$id) {
                $users[]=$value;
                }
                }
            }
           
        }
        foreach ($users as $user) {
          echo($user->name);
           
        }
       // return $users;
        //$ratings=Rating::where('photographer_id',2)->groupBy('photographer_id')->avg('rating');
        //return $users;
        return view('frontend.search.location',compact(['users']));
    }
}
