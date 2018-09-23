@extends('layouts.Report')
@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<h3 style="font-family:georgia">LOCATIONS</h3>
	</div>
	<table class="table table-hover" border="0">
	                        
	    <tr>
	        <td ><label>NUMBER OF LOCATIONS</label></td>
	        <td>{{ $location }}</td>
	    </tr>

	</table>
	</div>
</div>


@endsection