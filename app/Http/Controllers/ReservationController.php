<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Reservation;
use DateTime;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

            $events = Reservation::orderBy('reservation_start_at')->get();

        return view('event/list')->with(['page_title'=>'Events', 'events'=>$events]);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $time = explode(" - ", $request->input('time'));

        $reservation 					= new Reservation;
        $reservation->room_id			= $request->input('room');
        $reservation->reservation_start_at 		= $this->change_date_format($time[0]);
        $reservation->reservation_end_at 		= $this->change_date_format($time[1]);
        $reservation->reserved_for_user_id			= Auth::id();
        $reservation->updated_by_user_id			= Auth::id();
//        $reservation->created_at			= NOW();
//        $reservation->updated_at			= NOW();
        $reservation->save();

        $request->session()->flash('success', 'The event was successfully saved!');
        return redirect('reservations/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Reservation::findOrFail($id);

        $first_date = new DateTime($event->reservation_start_at);
        $second_date = new DateTime($event->reservation_end_at);
        $difference = $first_date->diff($second_date);
        $string = $difference->format('%i minutes');
        $person = $event->user->first_name;

        return view('event/view')->with(['page_title'=>'event', 'event'=>$event,'duration'=>$string, 'person'=>$person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Reservation::findOrFail($id);
        $event->reservation_start_at =  $this->change_date_format_fullcalendar($event->reservation_start_at);
        $event->reservation_end_at =  $this->change_date_format_fullcalendar($event->reservation_end_at);

        $data = [
            'page_title' 	=> 'Edit '.$event->title,
            'event'			=> $event,
        ];

        return view('event/edit')->with(['event'=>$event]);
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
        $this->validate($request, [
            'time'	=> 'required'
        ]);

        $time = explode(" - ", $request->input('time'));

        $event 					= Reservation::findOrFail($id);
        $event->room_id = $request->input('room');
        $event->reservation_start_at 		= $this->change_date_format($time[0]);
        $event->reservation_end_at 		= $this->change_date_format($time[1]);
        $event->save();

        return redirect('reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Reservation::find($id);
        $event->delete();

        return redirect('reservations');
    }

    public function change_date_format($date)
    {
        $time = DateTime::createFromFormat('d/m/Y H:i:s', $date);
        return $time->format('Y-m-d H:i:s');
    }

    public function change_date_format_fullcalendar($date)
    {
        $time = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        return $time->format('d/m/Y H:i:s');
    }

    public function format_interval(\DateInterval $interval)
    {
        $result = "";
        if ($interval->y) { $result .= $interval->format("%y year(s) "); }
        if ($interval->m) { $result .= $interval->format("%m month(s) "); }
        if ($interval->d) { $result .= $interval->format("%d day(s) "); }
        if ($interval->h) { $result .= $interval->format("%h hour(s) "); }
        if ($interval->i) { $result .= $interval->format("%i minute(s) "); }
        if ($interval->s) { $result .= $interval->format("%s second(s) "); }

        return $result;
    }
}
