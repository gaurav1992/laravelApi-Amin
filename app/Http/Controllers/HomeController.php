<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use DB;
use config;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        config(['app.name' => 'Recent ticket']);
        $tickets = Ticket::all()->whereIN("Status", ["inProgress"])->sortByDesc("id");
        $title = "Recent tickets";
        return view('home', compact('tickets','title'));

    }

    public function getDataByHour(){
        
        $data=DB::select( DB::raw("SELECT count(*) as ticketCount,hour( created_at ) as hours FROM tickets where DATE(created_at) = DATE(NOW()) GROUP BY hour( created_at ) , day( created_at )") );
        
        $labels = array();
        $series = array();
        foreach ($data as $key => $value) {
            $series[] = $value->ticketCount;
            $labels[] = $value->hours;
        }
        $response = array (
            'labels'=>$labels,
            'series'=>$series,
        );

        return $response;
    }
    public function statics(){
        config(['app.name' => 'Statistics']);
        return view('statistics');
    }

}
