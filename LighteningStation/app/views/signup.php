<!-- HEADER -->
<?php $this->view("header", $data); ?>

<!-- MAIN -->
<main role="main" id="hero">
  <div class="hero-container position-absolute top-50 start-50 translate-middle" data-aos="zoom-in" data-aos-delay="100">
    <form class="row g-3" method="POST">
      <div class="col-md-6">
        <label for="E-mail" class="form-label">Email</label>
        <input type="email" class="form-control" name="E-mail" placeholder="email@address.com" required>
      </div>
      <div class="col-md-6">
        <label for="Password" class="form-label">Password</label>
        <input type="password" class="form-control" name="Password" placeholder="Password" required>
      </div>
      <div class="col-md-6">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" name="First Name" placeholder="First Name" required>
      </div>
      <div class="col-md-6">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="Last Name" placeholder="Last Name" required>
      </div>
      <div class="col-md-6">
        <label for="Address" class="form-label">Address</label>
        <input type="text" class="form-control" name="Address" placeholder="Safi, Casablanca..." required>
      </div>
      <div class="col-md-6">
        <label for="N°Phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" name="N°Phone" placeholder="212-00-00-00-000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{3}" required><br>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-danger">Sign Up</button>
        <button class="btn btn-secondary"><a href="signin">Sign In</a></button>
    </form>
  </div>
</main>

<!-- FOOTER -->    
<?php $this->view("footer", $data); ?>