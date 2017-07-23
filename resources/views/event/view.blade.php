@extends('layout')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/reservations') }}">Events</a></li>
			<li class="active">{{ $event->title }}</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<h2>{{ $event->title }} <small>booked by {{ $person }}</small></h2>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		
		<p>Time: <br>
		{{ date("g:ia\, jS M Y", strtotime($event->reservation_start_at)) . ' until ' . date("g:ia\, jS M Y", strtotime($event->reservation_end_at)) }}
		</p>
		
		<p>Duration: <br>
		{{ $duration }}
		</p>
		
		<p>
			@php
				if(Auth::id() == $event->user->id)
                {
                    echo '<a class="btn btn-primary btn-xs" href="reservations/' . $event->id .'/edit">
                    <span class="glyphicon glyphicon-edit"></span> Edit</a>
                <form action="reservations/'. $event->id .'" style="display:inline" method="POST">
                    <input type="hidden" name="_method" value="DELETE" />
                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </form>';
                }
			@endphp
			
		</p>
		
	</div>
</div>
@endsection

@section('js')
<script src="{{ url('_asset/js') }}/daterangepicker.js"></script>
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		"timePicker": true,
		"timePicker24Hour": true,
		"timePickerIncrement": 15,
		"autoApply": true,
		"locale": {
			"format": "DD/MM/YYYY HH:mm:ss",
			"separator": " - ",
		}
	});
});
</script>
@endsection