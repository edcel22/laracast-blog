<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lists</title>
</head>
<body>
	<p>lists of posts here</p>

	@foreach($posts as $post)
		<p><strong>{{ $post->title }}</strong></p>
		<p>{{ $post->excerpt }}</p>
		<br>
	@endforeach
</body>
</html>