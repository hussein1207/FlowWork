<!doctype html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <style>
    body{
      margin:0;
      font-family:Arial, sans-serif;
      background:#eef2f4;
      display:flex;
      justify-content:center;
      align-items:center;
      height:100vh;
    }
    .form-box{
      background:white;
      padding:30px;
      width:300px;
      border-radius:10px;
      box-shadow:0 4px 15px rgba(0,0,0,0.1);
    }
    input{
      width:100%;
      padding:10px;
      margin:8px 0;
      border-radius:6px;
      border:1px solid #ccc;
    }
    button{
      width:100%;
      padding:10px;
      background:#2563eb;
      color:#fff;
      border:none;
      border-radius:6px;
      font-weight:bold;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h3>تسجيل دخول</h3>
   <form action="{{ route('login.post') }}" method="POST">
    @csrf

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>

  </div>
</body>
</html>
