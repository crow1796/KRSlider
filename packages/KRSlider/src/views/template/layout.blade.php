<!DOCTYPE html>
<html lang="en">
<head>
	@include('krslider::template.assets', ['title' => $title])
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>