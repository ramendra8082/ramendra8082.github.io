@extends('layouts.page')

@section('pagecontent')

<div class="row">
	<div class="col col-sm-4"></div>
	<div class="col col-sm-4">
		{!!Form::open(['url'=>'verify'])!!}
		<div class="form-group">
			{!! Form::label('Email') !!}
			{!! Form::text('email',null,['placeholder'=>'Email','class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Submit',['class'=>'btn btn-primary','name'=>"submit"]) !!}
		</div>
		{!!Form::close()!!}

	</div>
</div>

@stop