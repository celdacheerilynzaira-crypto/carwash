<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Admin Login</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    :root{
      --brand:#0aa53b;
      --border:#dcdfe4;
    }
    body{
      margin:0;
      font-family:"Inter",sans-serif;
      background:#f4f6f9;
      display:flex;
      justify-content:center;
      align-items:flex-start;
      min-height:100vh;
    }
    .login-card{
      width: 420px;
      background:#fff;
      border:1px solid #ccc;
      border-radius:12px;
      overflow:hidden;
      margin:20px;
      box-shadow:0 6px 18px rgba(0,0,0,.1);
    }
    .top-img{
      position:relative;
    }
    .top-img img{
      display:block;
      width:100%;
      height:200px;
      object-fit:cover;
    }
    .socials{
      position:absolute;
      bottom:10px;
      right:10px;
      display:flex;
      gap:10px;
    }
    .socials a{
      width:40px; height:40px;
      border-radius:50%;
      background:#fff;
      display:flex; align-items:center; justify-content:center;
      text-decoration:none;
      color:#333;
      border:1px solid #ccc;
      font-size:18px;
      transition:.2s;
    }
    .socials a:hover{ background:#eee; }

    .title{
      text-align:center;
      font-weight:bold;
      padding:15px;
      border-top:1px solid #ccc;
      border-bottom:1px solid #ccc;
    }
    form{ padding:20px; }
    .field{
      margin-bottom:15px;
      position:relative;
    }
    .field input{
      width:100%;
      padding:12px;
      border:1px solid var(--border);
      border-radius:8px;
    }
    .toggle-pass{
      position:absolute;
      right:10px;
      top:50%;
      transform:translateY(-50%);
      border:none;
      background:transparent;
      cursor:pointer;
      color:#555;
    }
    button.login-btn{
      width:100%;
      padding:14px;
      background:var(--brand);
      color:#fff;
      font-weight:bold;
      border:none;
      border-radius:10px;
      cursor:pointer;
    }
    .extras{
      display:flex;
      justify-content:space-between;
      align-items:center;
      font-size:14px;
      margin-top:10px;
    }
    .signup{
      text-align:center;
      margin-top:15px;
      font-size:14px;
    }
    .signup a{ color:red; text-decoration:none; }
    .signup a:hover{ text-decoration:underline; }
  </style>
</head>
<body>

<div class="login-card">

  <!-- Carwash Image -->
  <div class="top-img">
    <img src="https://scontent.fceb6-3.fna.fbcdn.net/v/t1.15752-9/541218467_1292119009050103_8926888087627129792_n.png?_nc_cat=106&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeEKro9GNRPZ-YvxzHlh7F_kX5Ou5Oe54c9fk67k57nhz7Gjm6a55XZdvsuU06KDrJ95rSiFnRjXvAhHGXP1yYFr&_nc_ohc=-5Kx93sjX0IQ7kNvwEcIB0g&_nc_oc=AdlL2ObNr8nT13_NRYewEAJHKYY7fhpVk4gA-vZoKkpHP7RZVM34Laj4y0gpWMC2lAU&_nc_zt=23&_nc_ht=scontent.fceb6-3.fna&oh=03_Q7cD3QHDWoGleQxZmdGfcVggwkjTAK2km6gsrC9zOk-ZKFvAvw&oe=68DF1F6A" alt="Carwash Image">
    <div class="socials">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>

  <!-- Title -->
  <div class="title">LOGIN TO ADMIN DASHBOARD</div>

  <!-- Form -->
  <form action="../page/admin_dashboard.php" method="post">
    <div class="field">
      <input type="text" name="username" placeholder="USERNAME" required>
    </div>
    <div class="field">
      <input type="password" name="password" id="password" placeholder="PASSWORD" required>
      <button type="button" class="toggle-pass" id="togglePass"><i class="fa-regular fa-eye"></i></button>
      <button type="button" class="btn-close" onclick="window.location.href='../page/Home.php'">Cancel</button>
    </div>
    <button type="submit" class="login-btn">LOGIN</button>

    <div class="extras">
      <label><input type="checkbox"> Remember Me</label>
      <a href="#">Forgot Password</a>
    </div>
    <div class="signup">
      Not a Member? <a href="#">signup</a>
    </div>
  </form>

</div>

<script>
  const pass = document.getElementById('password');
  const toggle = document.getElementById('togglePass');
  toggle.addEventListener('click', () => {
    if(pass.type === 'password'){
      pass.type = 'text';
      toggle.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
    } else {
      pass.type = 'password';
      toggle.innerHTML = '<i class="fa-regular fa-eye"></i>';
    }
  });
</script>

</body>
</html>