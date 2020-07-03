@extends('vendor.install.layout')

@section('content')
	<div class="bg-base-1 flex-fill">
	    <div class="container">
	        <div class="row h-100 justify-content-center align-items-center py-5">
	            <div class="col-lg-6">
	                @include('vendor.install.menu')

	                @include($view)
	            </div>
	        </div>
	    </div>
	</div>
@endsection
