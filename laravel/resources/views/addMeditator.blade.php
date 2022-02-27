@extends('layouts.mypage')
@section('meditator')
	<div class="row">
	<div class="col-md-4 border border-5 border-dark">
		<div class="offset-md-3 display-5">紹介情報提供者</div>
		<form>
			御名前
			<input type="text" required class="form-control border border-2 border-secondary" name="name">
			部署名
			<input type="text" required class="form-control border border-2 border-secondary" name="department">
			メールアドレス
			<input type="email" required class="form-control border border-2 border-secondary" name="email" placeholder="name@example.com">
			<div class="btn-group ml-auto" style="margin: 10px 10px 10px 0px">
				<button class="btn btn-sm btn-primary" type="submit">
				送信予定メール内容を確認
				</button>
				<button class="btn btn-sm btn-primary" style="margin-left:10px" type="submit">
				上記内容を登録
				</button>
			</div>
		</form>
@endsection
