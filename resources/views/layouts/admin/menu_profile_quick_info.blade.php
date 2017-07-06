<div class="profile">
	<div class="profile_pic">
		<img src="{{ $user_photo = App\UserData::where( 'user_id', Auth::user()->id)->first()->user_photo }}" alt="..." class="profile_img img-circle">
	</div>
	<div class="profile_info">
		<span>Добро пожаловать,</span>
		<h2>{{ $user_name = Auth::user()->name }}</h2>
	</div>
</div>