 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     
    <p>WAZZZZZZZAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>
 
 
 @foreach($projects as $project)
 
 <li><b>{{$project->title}}</b>:  {{$project->description}}</li>

 @endforeach
 
 </body>
 </html>