<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\District;
use App\Models\Hire;
use App\Models\Photo;
use App\Models\Price;
use App\Models\Reservation;
use BD;
class DashboardController extends Controller
{
     public function index()
    {
    	$countuser= District::withCount('users')->has('users')->get();
	     $totalorder=Reservation::when(Auth::user()->role==2, function ($q) {
    			return $q->where('user_id',Auth::id());
		})->selectRaw("count('process') as total")
	     ->selectRaw("count(case when process = 'pending' then 1 end) as pending")
	     ->selectRaw("count(case when process = 'confirmed' then 1 end) as completed")->first();
	     //return $totalorder;
	     $array[] = ['District', 'Number of user'];
	     $chatuser=user::all();
	     foreach($countuser as $key => $value)
	     {
	      $array[++$key] = [$value->name, $value->users_count];
	     }
	        return view('admin.home.dashboard',compact('array','totalorder'));
	    }
}
