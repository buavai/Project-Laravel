@extends('layout.default')
@section('content')

	@if (session('thanhcong'))
	<div style="text-align: center;font-size: 20px;" class="alert alert-info">{{session('thanhcong')}}</div>
	@endif
	
	<form action="{{route('user')}}" method="get">
		<table>
			<tr>
				<td>tim kiem theo mail</td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td>tim kiem theo address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>tim kiem theo phone</td>
				<td><input type="number" name="phone"></td>
			</tr>
			<input type="submit" value="tim kiem">
			
		</table>
	</form>
	<table>
		<tr>
			<td>Email</td>
			<td>address</td>
			<td>password</td>
			<td>phone</td>
			
		</tr>
		@foreach($user as $rows)
		<tr>
			<td>{{EnvatoUser::toUpperCase($rows->mail_address)}}</td>
			<td>{{$rows->address}}</td>
			<td>{{$rows->password}}</td>
			<td>{{$rows->phone}}</td>
		</tr>
		@endforeach
		
	</table>
	<div id="pagination" class="row text-center">
		<div class="pagination-wrap col-lg-12 col-md-12">
			{{$user->links()}}
		</div>
	</div>
@endsection