<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sample</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.css">
</head>
<body>	
	<div class="main-container">
		<div class="wrapper" style="max-width: 80%; margin: 0 auto;">
			<h2>Edit Article</h2>
			<form  method="POST" action="/posts/{{ $post->id }}">
				@csrf
				@method('PUT')
				<div class="field">
					<label class="label" for="title">Title</label>
					<div class="control">
						<input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{$post->title}}"></input>
						@error('title')
							<p class="help is-danger">{{ $errors->first('title') }}</p>
						@enderror
					</div>
				</div>
				<div class="field">
					<label class="label" for="excerpt">Excerpt</label>
					<div class="control">
						<textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt">{{ $post->excerpt }}</textarea> 
						@error('excerpt') 
							<p class="help is-danger">{{ $errors->first('excerpt') }}</p>
						@enderror
					</div>
				</div>
				<div class="field">
					<label class="label" for="body">Body</label>
					<div class="control">
						<textarea class="textarea @error('body') is-danger @enderror" name="body" id="body">{{ $post->body }}</textarea>
						@error('body')
							<p class="help is-danger">{{ $errors->first('body') }}</p>
						@enderror 
					</div>
				</div>
				<div class="control">
					<button class="button" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>	
</body>
</html>