<!DOCTYPE html>
<html>
<head>
    <title>BloodBank</title>
</head>
<body>
    Dear Sir/Mam,
    <br>
    A person is in need of the blood type {{$data['blood_group']}} in the {{$data['location']}} region.
<br> 
<br>
Additional message from the Recipient 
<br>
<br>
{{$data['note']}}
<br>
<br>
   If you would like to donate blood or help them their information is mentioned below :
    <br>
    <br>
    Name : {{$data['first_name']}}
    <br>
    Contact-No : {{$data['contact']}}
    <br>
    Location : {{$data['location']}}
    <br>
    <br>
    <br>
    Thank you.
    
   
</body>
</html>
