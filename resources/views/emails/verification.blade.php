<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
    <style>
      Hello{
        background-clip: gold;
        width: 100px;
        height: 100px;
        border-right: 20px;
        
      }
      p{
        background-color: green;
        width: fil-content;
        
      }
    </style>
</head>
<body>
 
    <h1>Hello, {{ $admin->name }}</h1>
    <p>your token: 
    {{$token}}
    </p>
    <p>your code :
    {{$code}}
    </p>
  
    
    
  
    
    <p>Please click the link below to verify your email:</p>
    <a href="{{ url('/admin/verify?code=' . $code . '&admin_id=' . $admin->id.'&token='.$token) }}">Verify Email</a>
</body>
</html>