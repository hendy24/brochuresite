<!-- Hero Section -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #0d6efd, #0b5ed7);">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">End of School Promotion</h1>
    <p class="lead mb-4">
      Move into a beautiful 3-bedroom, 2-bath townhome with <strong>2,580 sq ft</strong> of thoughtfully designed living space — all for just <strong>$399,000</strong>.
    </p>
    
    <div class="d-flex justify-content-center mb-4 flex-wrap gap-3">
      <div class="bg-white text-dark px-4 py-3 rounded shadow-sm">
        <strong>5.25%</strong><br>30-Year FHA Rate
      </div>
      <div class="bg-white text-dark px-4 py-3 rounded shadow-sm">
        <strong>5.75%</strong><br>30-Year Conventional Rate
      </div>
      <div class="bg-white text-dark px-4 py-3 rounded shadow-sm">
        <strong>$399,000</strong><br>Sales Price
      </div>
    </div>

    <p class="mb-0">
      Secure your new home before summer ends — rates are limited, and homes are going fast.
    </p>
  </div>
</section>
<!-- Carousel Section Without Stretching -->
<section class="py-4 bg-light border-top border-bottom">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <!-- Carousel -->
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
            <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo IMAGES; ?>/exterior.webp" class="d-block w-100 h-100 object-fit-cover" alt="Front exterior view of home">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo IMAGES; ?>/kitchen.webp" class="d-block w-100 h-100 object-fit-cover" alt="Modern kitchen with island">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo IMAGES; ?>/living_room.webp" class="d-block w-100 h-100 object-fit-cover" alt="Bright living room interior">
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
        </div>

        <!-- Promo & Logo -->
        <div class="col-lg-4 text-center text-lg-start">
          <div class="text-center mb-5">
            <img src="<?php echo IMAGES; ?>/logo.webp" alt="Priority Homes Logo" style="max-height: 75px;">
          </div>
          <p class="fs-5 fw-semibold text-dark mb-2">
            This exclusive offer is only available through <strong>Priority Homes</strong>.
          </p>
          <p class="text-danger fw-bold mb-0">
            ⏳ Offer ends June 15th — don’t miss your chance!
          </p>
        </div>
      </div>
    </div>
</section>

<!-- Details & Form -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Promo Text -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-3">Smart Financing. Stunning Living.</h2>
        <p class="text-muted">
          Discover the perfect blend of comfort, space, and affordability in Nephi’s premier townhome community. With competitive financing and homes ready for move-in, now is the time to make your move.
        </p>
        
        <ul class="list-group list-group-flush mt-4">
          <li class="list-group-item px-0">
            <span class="fw-semibold text-dark">📉 30-Year FHA Loan:</span> Locked rate at <strong>5.25%</strong>
          </li>
          <li class="list-group-item px-0">
            <span class="fw-semibold text-dark">💼 30-Year Conventional Loan:</span> Fixed at <strong>5.75%</strong>
          </li>
          <li class="list-group-item px-0">
            <span class="fw-semibold text-dark">📍 Location:</span> Beautiful, peaceful Nephi, Utah
          </li>
          <li class="list-group-item px-0">
            <span class="fw-semibold text-dark">🚚 Availability:</span> Move-in ready — close before summer ends
          </li>
        </ul>
      </div>
      <!-- Lead Capture Form -->
      <div class="col-lg-6">
        <div class="card shadow">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Get More Info</h3>
            <form id="leadForm" onsubmit="submitLeadForm(event)">
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
                <input type="tel" class="form-control" id="phone" name="phone" required pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" placeholder="e.g. (801) 555-1234" title="Enter a valid phone number like (801) 555-1234" />
              </div>
              <button type="submit" class="btn btn-primary w-100">Submit</button>
              <div id="thankYouMessage" class="alert alert-primary mt-3 d-none" role="alert">
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
  const leadScriptURL = "https://script.google.com/macros/s/AKfycbxrxvNRBBaXrxNiNGe9WWaySIKeZMuxRaAe-7aFoCUS39dAXTPbIWB27GAjjiihmdDk/exec";

  document.getElementById("phone").addEventListener("input", function (e) {
    formatPhoneInput(e.target);
  });

  function formatPhoneInput(input) {
    const digits = input.value.replace(/\D/g, '').substring(0, 10);
    let formatted = '';
    if (digits.length > 0) formatted = '(' + digits.substring(0, 3);
    if (digits.length >= 4) formatted += ') ' + digits.substring(3, 6);
    if (digits.length >= 7) formatted += '-' + digits.substring(6, 10);
    input.value = formatted;
  }

  const thankYouMessage = document.getElementById("thankYouMessage");

  async function submitLeadForm(e) {
    e.preventDefault();

    const form = document.getElementById("leadForm");
    const email = form.email.value.trim();
    const phone = form.phone.value.trim();

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/;

    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    if (!phonePattern.test(phone)) {
      alert("Please enter a valid phone number in the format (xxx) xxx-xxxx.");
      return;
    }

    const formData = new FormData(form);
    const payload = new URLSearchParams();
    for (const pair of formData.entries()) {
      payload.append(pair[0], pair[1]);
    }

    try {
      await fetch(leadScriptURL, {
        method: "POST",
        mode: "no-cors",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: payload.toString()
      });

      // We assume it succeeded, because we can't read the response in no-cors mode
      form.reset();
      thankYouMessage.classList.remove("d-none");

    } catch (err) {
      alert("Network error. Please try again.");
      console.error(err);
    }
  }

</script>