<!doctype html>
<html lang="{{config('app.locale')}}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubink</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900 text-slate-50 h-full">
    {{$slot}}
</body>
</html>
