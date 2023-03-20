<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Siswa</title>
  <meta charset="utf-8">
  <link href="/css/bootstrap.css" rel="stylesheet" />
  <link href="/css/signin.css" rel="stylesheet" />

  <link href="/fontawesome/css/all.min.css" rel="stylesheet" />

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    body{
      background-image: url('/poto.jpg');
      background-repeat: no-repeat;
      width: 100%;
      height: 100%;
    }
  </style>

</head>

<body class="text-center hold-transition login-page bg-image">
<body class="text-center hold-transition login-page bg-image" style="background-image: url('/bc.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
  <form class="form-signin" method="POST" action="/siswa/login">
  <img class="mb-4" src="/logo-sekolah.jpeg" class="img-thumbnail" height="150">
    <h1 class="h3 mb-3 font-weight-normal"> Login Siswa</h1>
    <label for="inputUser" class="sr-only">Username</label>
    <input type="text" name="txtUsername" id="inputUser" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="txtPassword" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> LOGIN </button>
    <p class="text-center mt-2">Login Sebagai <a href="/petugas">Petugas</a></p>
    <p class="mt-5 mb-3 text-muted">SMK Negeri 2 Kuningan </p>
  </form>


  <body>

</html>