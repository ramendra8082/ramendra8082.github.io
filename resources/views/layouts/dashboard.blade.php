@extends('layouts.page')

@section('pagecontent')

<div class="row dashboard">
	<div class="col col-sm-3 sidebar">
		@if(Auth::check())
		@if(Auth::user()->admin)
		<ul class="list-group">
		  <li class="list-group-item">
		  	<span class="badge" style="padding: 8px;border-radius: 5px;">
		  		<i class="fa fa-user-secret"></i> {{$count['admins']}}
		  	</span>
			<a href="/dashboard/admins">Admins</a>
		  </li>
		  <li class="list-group-item">
		  	<span class="badge" style="padding: 8px;border-radius: 5px;">
		  		<i class="fa fa-smile-o"></i> {{$count['editors']}}
		  	</span>
			<a href="/dashboard/editors">Editors</a>
		  </li>
		  <li class="list-group-item">
		  	<span class="badge" style="padding: 8px;border-radius: 5px;">
		  		<i class="fa fa-users"></i> {{$count['users']}}
		  	</span>
			<a href="/dashboard/users">Users</a>
		  </li>
		  <li class="list-group-item">
			<a href="/dashboard/user/create"><i class="fa fa-plus"></i> User</a>
		  </li>
		  <li class="list-group-item">
		    <span class="badge">{{$count['messages']}}</span>
			<a href="/dashboard/messages">Messages</a>
		  </li>
		  <li class="list-group-item">
		    <span class="badge">{{$count['articles']}}</span>
			<a href="/dashboard/articles">All Articles</a>
		  </li>
		  
		  <li class="list-group-item">
		    <span class="badge">{{$count['discussions']}}</span>
			<a href="/dashboard/discussions">All Discussions</a>
		  </li>
		</ul>
		  @endif
		  @if(Auth::user()->editor or Auth::user()->admin)
		<ul class="list-group">
		  <li class="list-group-item">
		    <span class="badge">{{$count['user_articles']}}</span>
			<a href="/dashboard/{{Auth::user()->username}}/articles">My Articles</a>
		  </li>
		  <li class="list-group-item">
			<a href="/article/create"><i class="fa fa-plus"></i> Article</a>
		  </li>
		    <li class="list-group-item">
		  	<a href="/dashboard/images">Images</a>
		    </li>
		</ul>
		  @endif
		  <ul class="list-group">
		  <li class="list-group-item">
			<a href="/dashboard/{{Auth::user()->username}}/profile">Profile</a>
		  </li>
		  <li class="list-group-item">
		    <span class="badge">{{$count['user_discussions']}}</span>
			<a href="/dashboard/{{Auth::user()->username}}/discussions">My Discussions</a>
		  </li>
		  <li class="list-group-item">
			<a href="/discussion/create"><i class="fa fa-plus"></i> Discussion</a>
		  </li>
		</ul>
		  @endif
	</div>
	<div class="col col-sm-9">
		@yield('dashboardcontent')
	</div>
</div>

@stop