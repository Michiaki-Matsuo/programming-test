@extends('layouts.mypage')
@section('mediator')
	<div class="row">
		<div class="col-md-5 border border-3"> <p class="text-decoration-underline h3">紹介(情報提供者)</p>
		<table>
@foreach($meditators AS $meditator)
			<tr>
				<td> {{ $meditator['depart'] }} </td> <td> {{ $meditator['name'] }} </td> <td> {{ $meditator['address'] }} </td>
			</tr>
@endforeach
		</table>
		</div>
		<div class="col-md-2 border border-3"> <p class="text-decoration-underline h3">ご紹介(対象者様)</p> 
		<table>
@foreach($targets AS $target)
			<tr>
				<td> {{ $target['company'] }} </td> <td> {{ $target['name'] }} </td> 
			</tr>
			<tr>
				<td> {{ $target['medi_depart'] }} </td> <td> {{ $target['medi_name'] }} </td> 
			</tr>
@endforeach
		</table>
		</div>
	    </div> <!--col-row-->
	<div>
		<a href="/addMediator">紹介(情報提供者)の追加</a>
	</div>
@endsection
