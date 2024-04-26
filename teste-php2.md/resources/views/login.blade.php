<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css\login.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">login</button>
      <button id="btnSignup">Cadastra</button>
    </div>
  <h4>Link Vagas</h4>
    <form id="signin" action="{{route('login.auth')}}" method="post">
    @csrf
      <input type="text"  name="email" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password"  name="password" placeholder="Password" required />
      <i class="fas fa-lock iPassword"></i>
      
      <button type="submit">login</button>
    </form>

    <form id="signup">
      <input type="text" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" placeholder="Password" required />
      <i class="fas fa-lock iPassword"></i>
      <input type="password" placeholder="Password" required />
      <i class="fas fa-lock iPassword2"></i>
      <div class="divCheck">
        <input type="checkbox" required />
        <span>Terms</span>
      </div>
      <button type="submit">login</button>
    </form>
  </div>
<script src="js\login.js"></script>

</body>
</html>