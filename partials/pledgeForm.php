<section class="section-spacing form-container" aria-labelledby="signPledgeHeading">
  <h2 class="text-4xl font-bold text-primary mb-4" id="signPledgeHeading">Sign the pledge</h2>
  <p class="text-lg text-secondary mb-8 visual-cue" id="signPledgeText">Join us in upholding these guiding principles to
    create a more inclusive and empathetic tech industry.</p>
  <form id="signForm" action="sign.php" method="post" class="space-y-4" aria-labelledby="signPledgeHeading">
    <label id="signFormTitle" class="sr-only">Sign the pledge form</label>

    <label for="firstNameInput" class="block text-primary required" id="firstNameLabel">First name</label>
    <input type="text" id="firstNameInput" name="first_name" placeholder="Enter your first name" required
      class="w-full p-3 border border-gray-800 rounded" aria-labelledby="firstNameLabel" />

    <label for="lastNameInput" class="block text-primary required" id="lastNameLabel">Last name</label>
    <input type="text" id="lastNameInput" name="last_name" placeholder="Enter your last name" required
      class="w-full p-3 border border-gray-800 rounded" aria-labelledby="lastNameLabel" />

    <label for="emailInput" class="block text-primary required" id="emailLabel">Email address</label>
    <input type="email" id="emailInput" name="email" placeholder="Enter your email address" required
      class="w-full p-3 border border-gray-800 rounded" aria-labelledby="emailLabel" />

    <label for="roleInput" class="block text-primary required" id="roleLabel">Role</label>
    <input type="text" id="roleInput" name="role" placeholder="Enter your role" required
      class="w-full p-3 border border-gray-800 rounded" aria-labelledby="roleLabel" />

    <label for="companyInput" class="block text-primary" id="companyLabel">Company (optional)</label>
    <input type="text" id="companyInput" name="company" placeholder="Enter your company (optional)"
      class="w-full p-3 border border-gray-800 rounded" aria-labelledby="companyLabel" />

    <label for="cityInput" class="block text-primary" id="cityLabel">City</label>
    <input type="text" id="cityInput" name="city" placeholder="Enter your city"
      class="w-full p-3 border border-gray-800 rounded" aria-labelledby="cityLabel" />

    <label for="countryInput" class="block text-primary" id="countryLabel">Country</label>
    <input type="text" id="countryInput" name="country" placeholder="Enter your country"
      class="w-full p-3 border border-gray-800 rounded" aria-labelledby="countryLabel" />

    <!-- Button to get location -->
    <button type="button" id="getLocationButton" class="button-secondary w-full p-3 rounded hover:opacity-90">Get My
      Location</button>

    <!-- Honeypot field -->
    <input type="text" name="honeypot" class="honeypot" aria-hidden="true"
      aria-label="If you are human, leave this field blank" autocomplete="off" tabindex="-1" />

    <button type="submit" id="signButton" class="button-primary w-full p-3 rounded hover:opacity-90"
      aria-label="Sign the pledge">Sign the pledge</button>
  </form>
</section>