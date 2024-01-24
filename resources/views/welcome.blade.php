<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comics</title>
</head>
<body>
    @include('partials.header')

    
    @foreach($fumetti as $fumetto)
        <div>
            <h4>{{ $fumetto["title"] }}</h4>
            <img src="{{$fumetto['thumb']}}  " alt="">
        </div>
    @endforeach   
    
        
    @include('partials.footer')
</body>
</html>