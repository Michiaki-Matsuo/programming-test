@extends('layouts.mypage')
@section('mediatorList')
	<div class="row">
		<div class="col-md-3 border border-3"> <p class="text-decoration-underline h3">紹介(情報提供者)</p>
		<table>
@foreach($Mediators AS $Mediator)
			<tr>
				<td> {{ $Mediator['depart'] }} </td> <td> {{ $Mediator['name'] }} </td> <td> {{ $Mediator['address'] }} </td>
			</tr>
@endforeach
		</table>
		</div>
		<div class="col-md-2 border border-3"> <p class="text-decoration-underline h3">ご紹介(対象者様)</p> 
		</div>
	    </div> <!--col-row-->
@endsection
