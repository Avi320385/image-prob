<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      @foreach ( $pic as $pic)
      @php
      $w = $pic->getMedia();
  @endphp
      <img src="{{$w[0]->getUrl('preview')}}" alt="">

      @endforeach
</body>
</html>
