<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($list as $article)
    [<br>
    'url'=>"{{$article->url}}",<br>
    'thumbnail'=>"{{$article->thumbnail}}",<br>
    'title'=>"{{$article->title}}",<br>
    'category'=>"{{$article->category}}",<br>
    'description'=>'{{$article->description}}',<br>
    'detail'=>'{{$article->detail}}',<br>
    'source'=>"{{$article->source}}",<br>
    'created_at' => "{{$article->created_at}}",<br>
    'updated_at' => "{{$article->updated_at}}"<br>
    ],<br>
@endforeach
</body>
</html>
