<?php
@include('partials/header.php');
?>

<div class="d-flex justify-content-center  align-items-center" style="height: 100vh; background: url('./img/back.jpg'); background-size: cover;">
    <div class="card" style="width: 18.75rem; background-color: rgba(255, 255, 255, 0.5);">
        <img src="./img/prime.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">LOGIN </h5>
            <p class="card-text">
            <form>
  <div class="mb-3">
    <label class="form-label" for="username">Username</label>
    <input type="text" class="form-control" id="username" required placeholder="Username">
  </div>
  <div class="mb-3">
    <label class="form-label" for="password">Password</label>
    <input type="password" class="form-control" id="password" required placeholder="Password">
  </div>
  <div class="mb-3 pb-3 border-bottom">
    <button type="submit" class="btn btn-primary w-100">Sign in</button>
  </div>
  <div class="text-center text-body-secondary">
     <a href="#">Forget Password?</a>
  </div>
</form>

         
        </div>
    </div>
</div>


<?php
include('partials/footer.php')
?>