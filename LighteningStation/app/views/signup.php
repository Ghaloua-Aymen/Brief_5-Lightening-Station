<!-- HEADER -->
<?php $this->view("header", $data); ?>

<!-- MAIN -->
<main role="main" id="hero">
  <div class="hero-container position-absolute top-50 start-50 translate-middle" data-aos="zoom-in" data-aos-delay="100">
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="email@address.com" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
      </div>
      <div class="col-md-6">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="FirstName" placeholder="First Name" required>
      </div>
      <div class="col-md-6">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="LastName" placeholder="Last Name" required>
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Safi, Casablanca..." required>
      </div>
      <div class="col-md-6">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" name="phone" placeholder="212-00-00-00-000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{3}" required><br>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-danger">Sign Up</button>
        <button class="btn btn-secondary"><a href="signin">Sign In</a></button>
    </form>
  </div>
</main>

<!-- FOOTER -->    
<?php $this->view("footer", $data); ?>