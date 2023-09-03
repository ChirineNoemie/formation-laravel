<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
    @php
        /*
        <!--<h1>Liste des articles</h1>-->
        <!--<h2>{{$title}}, {{$title2}}</h2>-->
        <!--@foreach($posts as $post)-->
        <!--@endforeach-->

        */
    @endphp
        
        @forelse ( $posts as $p )
            {{$p}}
        @empty
            <h1>{{$post2}}</h1>
        @endforelse
</body>
</html>