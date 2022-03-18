<!-- HEADER -->
<?php $this->view("header", $data); ?>

<!-- MAIN -->
<main role="main" id="hero">
  <div id="signin-Container" class="position-absolute top-50 start-50 translate-middle" data-aos="zoom-in" data-aos-delay="100">
    <h1>Login</h1>
    <form method="POST" class="column g-3" action="signin">
      <div class="col-12 txt_field">
        <input type="text" name= "E-mail" id="inputEmail" required>
        <span></span>
        <label for="inputEmail">Email</label>
      </div>
      <div class="col-12 txt_field"> 
        <input type="password" name= "Password" id="inputPassword" required>
        <span></span>
        <label for="inputPassword">Password</label>
      </div>

      <input type="submit" value="Login"><br><br>

      <div class="col-12">
        Don't have an account?<a href="signup"> Signup here!</a>
      </div>
    </form>
  </div>
</main>

<!-- FOOTER -->    
<?php $this->view("footer", $data); ?>