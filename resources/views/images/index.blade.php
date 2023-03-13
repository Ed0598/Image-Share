<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@foreach($images as $image)
    <div class="flex flex-col items-center justify-center">
    <img src="{{asset($image->image)}}" alt="" class="object-cover w-full h-full"><span class="absolute inset-0 flex items-center justify-center text-white font-bold text-lg opacity-0 hover:opacity-100">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-2xl">{{$image->name}}</h1>
            <p class="text-xl">{{$image->description}}</p>
            <p class="text-xl">{{$image->category}}</p>
        </div>
    </div>
@endforeach
    
</body>
</html>