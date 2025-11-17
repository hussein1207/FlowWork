<!doctype html>
<html lang="ar">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome</title>
  <style>
    body{
      margin:0;
      font-family:Arial, sans-serif;
      background:#f2f4f7;
      display:flex;
      justify-content:center;
      align-items:center;
      height:100vh;
    }
    .box{
      background:white;
      padding:40px;
      border-radius:12px;
      text-align:center;
      width:300px;
      box-shadow:0 5px 20px rgba(0,0,0,0.1);
    }
    a{
      display:block;
      margin:10px 0;
      padding:12px;
      border-radius:8px;
      text-decoration:none;
      font-weight:bold;
      color:white;
      background:#2563eb;
    }
    a.register{
      background:#16a34a;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>مرحباً بك</h2>
    <a href="{{ route('login') }}">تسجيل دخول</a>
    <a href="{{ route('register') }}" class="register">إنشاء حساب</a>
  </div>
</body>
</html>
