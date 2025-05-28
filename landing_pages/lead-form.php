<div class="container d-flex justify-content-center align-items-center flex-column py-5">
  <!-- Logo Row -->
  <div class="row mb-4">
    <div class="col text-center">
      <img src="<?php echo IMAGES; ?>/logo.webp" alt="Company Logo" style="max-height: 100px;">
    </div>
  </div>

  <!-- Form Row -->
  <div class="row w-100 justify-content-center">
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
<script>
    const leadScriptURL = 'https://script.google.com/macros/s/AKfycbzpvuapDRRzNcDWZOV9LlRN5IUbg7QmrXYpNMjEszTpFhzx1V9DK088ADJgfaAt-Kvb/exec';

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