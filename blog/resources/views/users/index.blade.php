</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <ul>
 
        @foreach ($users as $userItem)
           <li><a href="users/{{$userItem->id}}">{{$userItem->name}}</a> =>  {{$userItem->role->name}} Full name => {{$userItem->profile->fullname}}
           </li> 
        @endforeach
    
    </ul>

</body>
</html>