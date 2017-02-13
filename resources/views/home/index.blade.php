<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<form method="POST" action="{{URL::route('language-chooser')}}">
	{{csrf_field()}}
		<select name="locale">
			<option value="en">English</option>
			<option value="ru" {{Lang::locale()==="ru" ? ' selected':''}}>Русский</option>
		</select>
		<input type="submit" value="OK">
	</form>
	<h1>{{trans('homeindex.title')}}</h1>
	<p>{{trans('homeindex.text1')}}</p>
</body>
</html>