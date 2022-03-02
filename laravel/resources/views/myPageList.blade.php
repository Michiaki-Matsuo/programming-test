@extends('layouts.mypage')
@section('mediator')
	<div class="row py-3">
		<div class="col-md-auto border border-3"> <p class="text-decoration-underline h3">紹介(情報提供者)</p>
			<table>
				@foreach($mediators AS $mediator)
				<tr>
					<td class="px-3"> {{ $mediator['department'] }} </td> <td class="px-3"> {{ $mediator['name'] }} </td> <td class="px-3"> {{ $mediator['email'] }} </td>
				</tr>
				@endforeach
			</table>
		</div>
		<div class="col-md-auto border border-3"> <p class="text-decoration-underline h3">ご紹介(対象者様)</p> 
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
	</div>
	<div>
		<p class="py-5 font-weight-bold">
			<a href="/addMediator">紹介(情報提供者)の追加</a>
		</p>
	</div>
@endsection
