@extends('layouts.dashboard')

@section('dashboardcontent')



<div class="row">
	<div class="col col-md-5">
		<div class="profile">
			<img src="{{$user->imgUrl}}" class="profileImage">
		<p>Name : <b>{{$user->name}}</b></p>
		<p>Email : <b>{{$user->email}}</b></p>
		<p>Username : <b>{{$user->username}}</b></p>
		<p>Registered : <b>{{$user->created_at->diffForHumans()}}</b></p>
		<a href="#" class="btn btn-primary" id="EditProfile">Edit Profile</a>
		<a href="#" class="btn btn-primary" id="ChangePassword">Change Password</a>
		</div>
	</div>
	<div class="col col-md-5">

		<div id="EditProfileForm">
			<h1>Edit Profile</h1>
			{!!Form::model($user,['url'=>'dashboard/'.$user->username,'method'=>'patch','files' => true])!!}
			<div class="form-group">
			{!! Form::text('name',null,['placeholder'=>'Name','class'=>'form-control']) !!}
			</div>

			<div class="form-group">
			{!! Form::text('username',null,['placeholder'=>'Username','class'=>'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Image') !!}
			    {!! Form::file('imgUrl', null,['class'=>'btn btn-primary']) !!}
			</div>

		    <div class="form-group">
		        <button type="submit" class="btn btn-primary form-control">Update</button>
		    </div>
			{!! Form::close() !!}
			<a href="#" class="btn btn-warning pull-right canceledit">Cancel</a>
		</div>

		<div id="ChangePasswordForm">
			<h1>Change Password</h1>
			{!!Form::model($user,['url'=>'dashboard/'.$user->username.'/password','method'=>'patch'])!!}
			<div class="form-group">
			{!! Form::password('password',['placeholder'=>'New Password','class'=>'form-control']) !!}
			</div>

			<div class="form-group">
			{!! Form::password('password_confirmation',['placeholder'=>'Confirm New Password','class'=>'form-control']) !!}
			</div>

		    <div class="form-group">
		        <button type="submit" class="btn btn-primary form-control">Update</button>
		    </div>
			{!! Form::close() !!}
			<a href="#" class="btn btn-warning pull-right canceledit">Cancel</a>
		</div>

	</div>
</div>
@stop