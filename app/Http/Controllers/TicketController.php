<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use config;
use DB;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        config(['app.name' => 'All tickets']);
        $tickets = Ticket::all();
        $title = "All tickets";
        return view('ticket', compact('tickets','title'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
        config(['app.name' => 'Edit tickets']);
        
        
        return view('editTicket', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
        
        if($request->status != ''){
            $ticket->exists = true;
            $ticket->status = $request->status;
            $ticket->License_plate= $request->lcnsplt ? $request->lcnsplt : "";
            $ticket->save();
            $Response = array(
                'code'=> "100",
                'status'=>"success",
            );
            return json_encode($Response);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
    public function latLngMap(Request $request){
        $tickets = DB::table('tickets')->select('Lang', 'Lat')->get();
        return json_encode($tickets);
    }
}
