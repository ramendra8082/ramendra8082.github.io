@extends('layouts.page')

@section('pagecontent')
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#message">Message</button>
@include('partials.elements.messageModal')
@stop