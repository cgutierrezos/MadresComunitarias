@extends('layouts.app')

@section('title', 'Buscar Hogar')



@section('body')
	

	
	
	
	<div class="flex-center position-ref full-height">

        <div class="container-fluid" >
  		
			{!!$map['html']!!}
		</div>
	</div>

@endsection

@section('scripts')

	<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}

@endsection
