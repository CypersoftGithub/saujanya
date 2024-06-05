<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Details</title>
</head>
<body>
   
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="#" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Contact Inquiry</a>
    </div>
    <p style="font-size:1.1em"><strong>Name :</strong> <span>{{$details['name']}}</span></p>
    <p style="font-size:1.1em"><strong>Email :</strong> <span>{{$details['email']}}</span></p>
    <p style="font-size:1.1em"><strong>Phone :</strong> <span>{{$details['phone']}}</span></p>
    <p style="font-size:1.1em"><strong>Subject :</strong> <span>{{$details['subject']}}</span></p>
    <p style="font-size:1.1em"><strong>Message :</strong> <span>{{$details['message']}}</span></p>

    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      
      
    </div>
  </div>
</div>

</body>
</html>