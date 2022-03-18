<!-- HEADER -->
<?php $this->view("header", $data); ?>

<!-- MAIN -->
<main role="main" id="hero">
  <div class="hero-container position-absolute top-50 start-50 translate-middle" data-aos="zoom-in" data-aos-delay="100">
    <form class="row g-3">
      <div class="col-md-6">
        <label for="Depart" class="form-label">Depart</label>
        <select id="Depart" name="Depart" class="form-control">
          <option selected>--</option>
          <option value="Safi">Safi</option>
          <option value="Casablanca">Casablanca</option>
          <option value="Marrakech">Marrakech</option>
          <option value="Rabat">Rabat</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="Destination" class="form-label">Destination</label>
        <select id="Destination" name="Destination" class="form-control">
          <option selected>--</option>
          <option value="Safi">Safi</option>
          <option value="Casablanca">Casablanca</option>
          <option value="Marrakech">Marrakech</option>
          <option value="Rabat">Rabat</option>
        </select>
      </div>
      <div class="col-6">
        <label for="DepartDay" class="form-label">Departing Date</label>
        <input type="date" class="form-control" name="DepartDay">
      </div>
      <div class="col-6">
        <label for="ArrivalDay" class="form-label">Arrival Date</label>
        <input type="date" class="form-control" name="ArrivalDay">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-danger">Search</button>
      </div>
    </form>
  </div>
</main>

<!-- FOOTER -->    
<?php $this->view("footer", $data); ?>