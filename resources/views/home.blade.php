@extends('guest.template.base')

@section('title', 'DC-Comics')

@section('content')
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>DC-Comics</title>
   </head>
   <body>
      <main>
         @foreach($comicsList as $comic)
          <h2>{{ $comic->title }}</h2>
         @endforeach
      </main>
   </body>
   </html>
@endsection
