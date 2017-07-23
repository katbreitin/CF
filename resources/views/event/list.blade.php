@extends('layout')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/calendar') }}">Home</a></li>
			<li class="active"><a href="{{ url('/reservations') }}">Events</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		@if($events->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Room</th>
					<th>Reservee</th>
					<th>Start</th>
					<th>End</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1;?>
			@foreach($events as $event)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					@php
                            if($event->room_id == 1)
                            {
                                echo "<td>Table Space Room</td>";
                            }
                            else if($event->room_id == 2)
                            {
                                echo "<td>Desk Space Room</td>";
                            }
                            else if($event->room_id == 3)
                            {
                                echo "<td>Small Office Space Room</td>";
                            }
                            else if($event->room_id == 4)
                            {
                                echo "<td>Midsize Space Room</td>";
                            }
                            else if($event->room_id == 5)
                            {
                                echo "<td>Small Meeting Room</td>";
                            }
                            else
                            {
                                echo "<td>Unknown Meeting Room</td>";
                            }
					@endphp
					<td>{{ $event->user->id }}</td>
					<td><a href="{{ url('reservations/' . $event->id) }}">{{ $event->user->first_name }}</a></td>
					<td>{{ date("g:ia\, jS M Y", strtotime($event->reservation_start_at)) }}</td>
					<td>{{date("g:ia\, jS M Y", strtotime($event->reservation_end_at)) }}</td>
					<td>
						@php
						if(Auth::id() == $event->user->id)
						{
							echo '<a class="btn btn-primary btn-xs" href="reservations/' . $event->id .'/edit">
							<span class="glyphicon glyphicon-edit"></span> Edit</a>
						<form action="reservations/'. $event->id .'" style="display:inline" method="POST">
							<input type="hidden" name="_method" value="DELETE" /> <input type="hidden" name="_token" value="' .csrf_token(). '">' . '
							<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
						</form>';
						}
						@endphp
						
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		@else
			<h2>No event yet!</h2>
		@endif
	</div>
</div>
@endsection
