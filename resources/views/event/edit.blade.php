@extends('layout')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/calendar') }}">Home</a></li>
			<li><a href="{{ url('/reservations') }}">Events</a></li>
			<li class="active">Edit - {{ $event->title }}</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		
		@if($errors)
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		@endif

		<form action="{{ url('reservations/' . $event->id) }}" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT" />
			<div class="form-group @if($errors->has('name')) has-error has-feedback @endif">
				<label for="room">Room to reserve</label>
				<div class="form-group @if($errors->has('time')) has-error @endif">
					<label for="time">Time</label>
					<div class="input-group">
						<select name="room" class="form-group-control">
							<option selected value="1">Table Space</option>
							<option value="2">Desk Space</option>
							<option value="3">Small Office</option>
							<option value="4">Mid-sized Office</option>
							<option value="5">Small Meeting Room</option>
						</select>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group @if($errors->has('time')) has-error @endif">
				<label for="time">Time</label>
				<div class="input-group">
					<input type="text" class="form-control" name="time" placeholder="Select your time"  value="{{ $event->reservation_start_at . ' - ' . $event->reservation_end_at }}">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
                    </span>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection

@section('js')
	<script src="{{ url('js/daterangepicker.js') }}"></script>
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