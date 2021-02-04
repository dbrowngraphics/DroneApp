@extends('layouts/master')

@section('content')

	<form action="{{ route('pilots.store') }}" method="POST">
		@csrf

		<input type="text" name="first_name" placeholder="First Name" required>

		<input type="text" name="last_name" placeholder="Last Name" required>

		<input type="text" name="email" placeholder="Email" required>

		<select name="certification_id" id="certification_id">
		@foreach ($cert_types as $type)
			
			<option value="{{ $type->id }}">{{ $type->certification_name }}</option>

		@endforeach

		</select>

		<input type="submit">
	</form>

@endsection