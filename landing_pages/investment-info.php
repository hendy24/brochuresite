<!-- Hero Section -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #0d6efd, #0b5ed7);">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">6 Available Rental Units — 5.25% Cap Rate</h1>
    <p class="lead mb-4">
      Invest in new construction townhomes in Nephi, Utah — fully rent-ready and short-term approved. Just 30 minutes south of Provo.
    </p>

<div class="d-flex justify-content-center mb-4 flex-wrap gap-3">
  <div class="bg-white text-dark px-4 py-3 rounded shadow-sm text-center">
    <strong style="font-size: 2.4rem;">$389,900</strong><br>
    <span style="font-size: 1.1rem;">Per Unit</span>
  </div>
  <div class="bg-white text-dark px-4 py-3 rounded shadow-sm text-center">
    <strong style="font-size: 2.4rem;">$2,500/mo</strong><br>
    <span style="font-size: 1.1rem;">Market Rent</span>
  </div>
  <div class="bg-white text-dark px-4 py-3 rounded shadow-sm text-center">
    <strong style="font-size: 2.4rem;">100%</strong><br>
    <span style="font-size: 1.1rem;">Current Rental Occupancy</span>
  </div>
</div>
    <a href="#contact" class="btn btn-light btn-lg px-5">Request Rent Roll</a>
  </div>
</section>

<!-- Property Details Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="<?php echo IMAGES; ?>/living_room.webp" alt="Townhome Living room" class="img-fluid rounded shadow">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <h2 class="fw-bold mb-3">Spacious, Modern Rentals</h2>
        <p>
          Each unit offers 3 bedrooms, 2.5 bathrooms, and over <strong>2,580 sq ft</strong> of thoughtfully designed space —
          ideal for long-term tenants or short-term guests. Short-term rentals are <strong>approved by the city</strong>, 
          giving you maximum flexibility.
        </p>
        <ul class="list-unstyled mt-3 fs-5">
          <li>✅ 30 minutes from Provo / Utah Valley growth corridor</li>
          <li>✅ Short-term rental permitted</li>
          <li>✅ New construction with builder warranty</li>
        </ul>
        <a href="#contact" class="btn btn-primary mt-4">See Financials</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 text-center bg-dark text-white">
  <div class="container">
    <h2 class="fw-bold">Only 6 Units Available — Act Fast</h2>
    <p class="mb-4">
      Secure your position in one of Utah's fastest-growing submarkets with fully rentable new construction townhomes.
    </p>
    <a href="#contact" class="btn btn-light btn-lg px-5">Schedule a Call</a>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-white">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Request the Full Investment Package</h2>
    <form id="leadForm" onsubmit="submitLeadForm(event)">
      <!-- Replace this with your form integration -->
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
              <button type="submit" class="btn btn-primary w-100">Get Info</button>
              <div id="thankYouMessage" class="alert alert-primary mt-3 d-none" role="alert">
                Thank you! We’ll be in touch soon.
              </div>
    </form>
  </div>
</section>

<script>
    const leadScriptURL = 'https://script.google.com/macros/s/AKfycbx4Qm2lRXpThctym98E8-SSh4JMrr5riRM76K3h-vxqDCs7lprEVFTu0lBEMuroUv3L/exec';

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