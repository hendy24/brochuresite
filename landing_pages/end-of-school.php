<!-- Hero Section -->
<section class="text-center py-5 bg-primary text-white">
  <div class="container">
    <h1 class="display-4 fw-bold">End of School Promotion</h1>
    <p class="lead">Lock in your new home with rates as low as <strong>5.25% (FHA)</strong> or <strong>5.75% (Conventional)</strong> on a 30-year mortgage.</p>
    <p>Take advantage of this limited-time offer and get settled before summer ends.</p>
  </div>
</section>

<!-- House Photo Carousel -->
<section class="py-5 bg-light">
  <div class="container">
    <div id="homeCarousel" class="carousel slide shadow" data-bs-ride="carousel">
      <div class="carousel-inner rounded">
        <div class="carousel-item active">
          <img src="<?php echo IMAGES; ?>/exterior.webp" class="d-block w-100" alt="Front exterior view of home">
        </div>
        <div class="carousel-item">
          <img src="<?php echo IMAGES; ?>/kitchen.webp" class="d-block w-100" alt="Modern kitchen with island">
        </div>
        <div class="carousel-item">
          <img src="<?php echo IMAGES; ?>/living_room.webp" class="d-block w-100" alt="Bright living room interior">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

<!-- Details & Form -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Promo Text -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold">Your Path to Affordable Homeownership</h2>
        <ul class="list-group list-group-flush mt-3">
          <li class="list-group-item">✅ 30-Year FHA Loan @ <strong>5.25%</strong></li>
          <li class="list-group-item">✅ 30-Year Conventional Loan @ <strong>5.75%</strong></li>
          <li class="list-group-item">✅ Beautiful townhomes in Nephi, Utah</li>
          <li class="list-group-item">✅ Move-in ready — close before summer ends!</li>
        </ul>
      </div>

      <!-- Lead Capture Form -->
      <div class="col-lg-6">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Get More Info</h3>
            <form id="leadForm">
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required />
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required />
              </div>
              <button type="submit" class="btn btn-primary w-100">Submit</button>
              <div id="thankYouMessage" class="alert alert-success mt-3 d-none" role="alert">
                Thank you! We’ll be in touch soon.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const form = document.getElementById("leadForm");
  const thankYouMessage = document.getElementById("thankYouMessage");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const payload = Object.fromEntries(formData.entries());

    await fetch("https://script.google.com/a/macros/thekatalyst.group/s/AKfycbyU4IfVAzvhaU4MxXX6cteb6ZSgAcEKw4uYkpmMWn0BYsLIssterRQzOncWrOzhvY8G/exec", {
      method: "POST",
      mode: "no-cors",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload),
    });

    form.reset();
    thankYouMessage.classList.remove("d-none");
  });
</script>