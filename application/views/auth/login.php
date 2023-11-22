
<div class="container position-sticky z-index-sticky top-0">
<div class="row">
<div class="col-lg-7">

<nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-0 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
<div class="container-fluid">
<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
Login Pages
</a>
<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon mt-2">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</span>
</button>
  


</div>
</div>
</div>
<main class="main-content  mt-0">
<section>
<div class="page-header min-vh-100">
<div class="container">
<div class="row">
<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
<div class="card card-plain">
<div class="card-header pb-0 text-start">
<h4 class="font-weight-bolder">Log In</h4>
<p class="mb-0">Enter your email and password to log in</p>
</div>
<?=$this->session->flashdata('message'); ?>
<form class="user">
<div class="form-group">
  <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
</div>
<div class="form-group">
  <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
</div>

<button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Login</button>
<div class="form-group">
<button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" href="forgot-passwpord.html">Forgot Password</button>
</form>
<hr>
<div class="card-footer text-center pt-0 px-lg-2 px-1">
<p class="mb-4 text-sm mx-auto">
Don't have an account?
<a class="small" href="<?= base_url('Auth/registrasi') ?>">Sign up</a>
</p>
</div>
</div>
</div>
<div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
<div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
<span class="mask bg-gradient-primary opacity-6"></span>
<h4 class="mt-5 text-white font-weight-bolder position-relative">"Selamat Datang di Diana Dashboard ❤︎₊ ⊹"</h4>
<p class="text-white position-relative">cuma web sebuah tugas   ∧＿∧
(・・)   ✧･ﾟ:*
/づ~ ♡･ﾟ:*:･★‧₊˚
</p>
</div>
</div>
</div>
</div>
</div>
</section>
</html>