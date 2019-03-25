@extends('layout.default')
@section('content')
	<div class="container">
		<form action="{{route('add')}}" method="post">
			{{csrf_field()}}
			<table>
				<tr>
					@if ($errors->has('mail_address'))
					<td>email</td>
					<td><input  style="border-color:red" type="text" name="mail_address"></td>
					
					<p class="help is-danger">{{ $errors->first('mail_address') }}</p>
					@else 
					<td>email</td>
					<td><input  type="text" name="mail_address"></td>
					
					<p class="help is-danger">{{ $errors->first('mail_address') }}</p>
					@endif
				</tr>
				<tr>
					@if ($errors->has('address'))
					<td>address</td>
					<td><input style="border-color: red;" type="text" name="address"></td>
					
					<p class="help is-danger">{{ $errors->first('address') }}</p>
					@else
					<td>address</td>
					<td><input type="text" name="address"></td>
					
					<p class="help is-danger">{{ $errors->first('address') }}</p>
					@endif
				</tr>
				<tr>
					@if ($errors->has('password'))
					<td>password</td>
					<td><input style="border-color:red" type="password" name="password"></td> 
					<p class="help is-danger">{{ $errors->first('password') }}</p>
					@else
					<td>password</td>
					<td><input style="" type="password" name="password"></td> 
					<p class="help is-danger">{{ $errors->first('password') }}</p>
					@endif
				</tr>
				<tr>
					<td>password confirm</td>
					<td><input type="password" name="password-confirm"></td>
					@if ($errors->has('password-confirm'))
					<p class="help is-danger">{{ $errors->first('password-confirm') }}</p>
					@endif
				</tr>
				<tr>
					<td>phone</td>
					<td><input type="number" name="number"></td>
					@if ($errors->has('number'))
					<p class="help is-danger">{{ $errors->first('number') }}</p>
					@endif
				</tr>
				<input type="submit" value="đăng ký">
			</table>
		</form>
	</div>
@endsection