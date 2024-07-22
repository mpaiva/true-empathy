<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="pageTitle">The True Empathy Pledge</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script type="text/javascript" src="js/skipto.js"></script>

  <style>
  body {
    font-size: 1.125rem;
    /* Base body text size */
  }

  header,
  main,
  footer {
    margin: 4rem auto;
    max-width: 600px;

    /* Space between header and main content */
  }

  section {
    /* border: 4px solid red; */
    margin: 2rem 0;
  }

  #signForm input {
    color: #333333;
  }

  .merchandise-section {
    display: none;
    /* Space between merchandise section and footer */
  }

  .mode-toggle {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px;
    cursor: pointer;
    background-color: #333;
    border-radius: 8px;
    border: 4px solid yellow;
  }

  .container {
    max-width: 100%;
    margin: 0 auto;
    background-color: #ffffff;
    /* Light background for light mode */
    color: #333333;
    /* Dark text color for light mode */
  }

  @media (min-width: 768px) {
    .container {
      max-width: 1024px;
      /* Set max width to 1024px for table and desktop */
    }
  }

  .dark .container {
    background-color: #1a202c;
    /* Dark background for dark mode */
    color: #f7fafc;
    /* Light text color for dark mode */
  }

  .text-primary {
    color: #333333;
    /* Dark text color for light mode */
  }

  .dark .text-primary {
    color: #f7fafc;
    /* Light text color for dark mode */
  }

  .bg-secondary {
    background-color: #f4f4f4;
    /* Light secondary background for light mode */
  }

  .dark .bg-secondary {
    background-color: #2d3748;
    /* Dark secondary background for dark mode */
  }

  .text-secondary {
    color: #555555;
    /* Secondary text color for light mode */
  }

  .dark .text-secondary {
    color: #e2e8f0;
    /* Secondary text color for dark mode */
  }

  .button-primary {
    background-color: #0056b3;
    /* Primary button color for light mode */
    color: #ffffff;
    /* Button text color for light mode */
    transition: background-color 0.3s;
  }

  .dark .button-primary {
    background-color: #2c5282;
    /* Primary button color for dark mode */
    color: #ffffff;
    /* Button text color for dark mode */
  }

  .button-primary:hover {
    background-color: #004494;
    /* Primary button hover color for light mode */
  }

  .dark .button-primary:hover {
    background-color: #2a4365;
    /* Primary button hover color for dark mode */
  }

  #languageSelect {
    background-color: white;
    border: 2px solid #666;
    border-radius: 4px;
    display: inline-block;
    font: inherit;
    line-height: 1.5em;
    padding: 0.5em 3.5em 0.5em 1em;

    /* reset */

    margin: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-appearance: none;
    -moz-appearance: none;
  }

  /* arrows */

  #languageSelect {
    background-image:
      linear-gradient(45deg, transparent 50%, blue 50%),
      linear-gradient(135deg, blue 50%, transparent 50%),
      linear-gradient(to right, #ffaaff, #ffaaff);
    background-position:
      calc(100% - 20px) calc(1em + 2px),
      calc(100% - 15px) calc(1em + 2px),
      100% 0;
    background-size:
      5px 5px,
      5px 5px,
      2.5em 2.5em;
    background-repeat: no-repeat;
  }

  #languageSelect:focus {
    background-image:
      linear-gradient(45deg, white 50%, transparent 50%),
      linear-gradient(135deg, transparent 50%, white 50%),
      linear-gradient(to right, gray, gray);
    background-position:
      calc(100% - 15px) 1em,
      calc(100% - 20px) 1em,
      100% 0;
    background-size:
      5px 5px,
      5px 5px,
      2.5em 2.5em;
    background-repeat: no-repeat;
  }

  .dark #languageSelect {
    color: #000;
  }

  .guest-book {
    background-color: #fff;
    /* Background color for light mode */
    padding: 40px;
    /* Padding for guest book */
    border-radius: 8px;
    /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* Box shadow for depth */
    margin: 0 auto;
    /* Center horizontally */
  }

  .dark .guest-book {
    background-color: #2d3748;
    /* Background color for dark mode */
  }

  .signature {
    padding: 20px 10px 0px 10px;
    /* Padding for each signature */
    border-bottom: 4px dotted #ffaaff;
    /* Light blue bottom border for signatures */
    margin-bottom: 10px;
    /* Space between signatures */
  }

  .dark .signature {
    border-bottom-color: rgba(59, 130, 246, 0.5);
    /* Dark mode border color */
  }

  .signature:last-child {
    border-bottom: inherit;
    /* Remove border from the last signature */
  }

  .signature .full_name {
    font-family: 'Gwendolyn', cursive;
    /* Handwriting font for full name */
    font-size: 2.5rem;
    /* Larger font size for full name */
    color: #1e3a8a;
    /* Color for full name */
    line-height: auto;
    /* Line height */
    margin-top: 2rem;
  }

  .dark .signature .full_name {
    color: #a5b4fc;
    /* Light color for full name in dark mode */
  }

  .signature .role,
  .signature .company,
  .signature .timestamp,
  .signature .location {
    color: #333333;
    /* Dark color for role and company */
    display: block;
    /* Block to separate lines */
    margin: 0;
    padding: 0;
  }

  .signature .role,
  .signature .company {
    display: inline;
  }

  .signature .company {
    margin-left: 0;
  }

  .dark .signature .role,
  .dark .signature .company,
  .dark .signature .timestamp,
  .dark .signature .location {
    color: #cbd5e0;
    /* Light color for role and company in dark mode */
  }

  .form-input {
    width: calc(100% - 2rem);
    /* Reduce width */
    margin: 0 auto;
    /* Center input */
    padding: 10px;
    /* More padding for better readability */
    font-size: 1rem;
    /* Increase font size */
    border: 2px solid #333333;
    /* Ensure visible border */
  }

  .form-input:focus {
    outline: 4px solid #FF00FF;
    /* Magenta border color */
    outline-offset: 2px;
    /* Offset */
  }

  .honeypot {
    display: none;
    /* Hide honeypot input */
  }

  .footer-links {
    text-align: center;
    margin-top: 2rem;
    font-size: 1.1rem;
  }

  .footer-links a {
    color: #0056b3;
    /* Link color */
    margin: 0 10px;
  }

  .dark .footer-links a {
    color: #2c5282;
    /* Link color for dark mode */
  }

  .visual-cue {
    border-left: 4px solid #ffaaff;
    /* Blue visual cue */
    padding-left: 1rem;
    max-width: 80ch;
    /* Limit text width to 80 characters */
    text-align: left;
    /* Ensure text is left aligned */
  }

  .dark .visual-cue {
    border-left-color: #2c5282;
    /* Blue visual cue for dark mode */
  }

  p {
    text-align: left;
    /* Ensure all p tags are left aligned */
  }

  .error {
    border: 2px solid red;
    padding: 1rem;
    margin: 1rem 0;
  }

  .section-spacing {
    margin-top: 2rem;
    /* Add vertical spacing between sections */
  }

  .form-container {
    max-width: 600px;
    /* Set max width for form container */
    margin: 0 auto;
    /* Center the form container */
  }
  </style>
  <script>
  async function loadTranslations(lang) {
    const response = await fetch(`translations.php?lang=${lang}`);
    const translations = await response.json();

    // Update the lang attribute
    document.documentElement.lang = lang;

    document.getElementById('pageTitle').textContent = translations.title;
    document.getElementById('commitmentText').textContent = translations.commitment;
    document.getElementById('principlesHeading').textContent = translations.principles_heading;
    document.getElementById('principlesText').textContent = translations.principles_text;
    document.getElementById('signPledgeHeading').textContent = translations.sign_pledge;
    document.getElementById('fullNameLabel').textContent = translations.full_name;
    document.getElementById('fullNameInput').setAttribute('placeholder', translations.full_name_placeholder);
    document.getElementById('emailLabel').textContent = translations.email_address;
    document.getElementById('emailInput').setAttribute('placeholder', translations.email_placeholder);
    document.getElementById('roleLabel').textContent = translations.role;
    document.getElementById('roleInput').setAttribute('placeholder', translations.role_placeholder);
    document.getElementById('companyLabel').textContent = translations.company;
    document.getElementById('companyInput').setAttribute('placeholder', translations.company_placeholder);
    document.getElementById('signButton').textContent = translations.sign_pledge;
    document.getElementById('supportHeading').textContent = translations.support;
    document.getElementById('supportText').textContent = translations.support_text;
    document.getElementById('thankYouHeading').textContent = translations.thank_you;
    document.getElementById('thankYouText').textContent = translations.thank_you_text;
    document.getElementById('toggleModeButton').setAttribute('aria-label', translations.toggle_mode);
    document.getElementById('principle1Title').textContent = translations.principle1_title;
    document.getElementById('principle1Text').textContent = translations.principle1_text;
    document.getElementById('principle2Title').textContent = translations.principle2_title;
    document.getElementById('principle2Text').textContent = translations.principle2_text;
    document.getElementById('principle3Title').textContent = translations.principle3_title;
    document.getElementById('principle3Text').textContent = translations.principle3_text;
    document.getElementById('principle4Title').textContent = translations.principle4_title;
    document.getElementById('principle4Text').textContent = translations.principle4_text;
    document.getElementById('tshirt1Title').textContent = translations.tshirt1_title;
    document.getElementById('tshirt1Price').textContent = translations.tshirt1_price;
    document.getElementById('buyTshirt1').textContent = translations.buy_tshirt1;
    document.getElementById('buyTshirt1').setAttribute('aria-label', translations.buy_tshirt1);
    document.getElementById('buyTshirt1').setAttribute('onclick', `alert('${translations.buy_alert}')`);
    document.getElementById('tshirt2Title').textContent = translations.tshirt2_title;
    document.getElementById('tshirt2Price').textContent = translations.tshirt2_price;
    document.getElementById('buyTshirt2').textContent = translations.buy_tshirt2;
    document.getElementById('buyTshirt2').setAttribute('aria-label', translations.buy_tshirt2);
    document.getElementById('buyTshirt2').setAttribute('onclick', `alert('${translations.buy_alert}')`);
    document.getElementById('tshirt3Title').textContent = translations.tshirt3_title;
    document.getElementById('tshirt3Price').textContent = translations.tshirt3_price;
    document.getElementById('buyTshirt3').textContent = translations.buy_tshirt3;
    document.getElementById('buyTshirt3').setAttribute('aria-label', translations.buy_tshirt3);
    document.getElementById('buyTshirt3').setAttribute('onclick', `alert('${translations.buy_alert}')`);
    document.getElementById('tshirt4Title').textContent = translations.tshirt4_title;
    document.getElementById('tshirt4Price').textContent = translations.tshirt4_price;
    document.getElementById('buyTshirt4').textContent = translations.buy_tshirt4;
    document.getElementById('buyTshirt4').setAttribute('aria-label', translations.buy_tshirt4);
    document.getElementById('buyTshirt4').setAttribute('onclick', `alert('${translations.buy_alert}')`);
    document.getElementById('footerAccessibilityStatement').textContent = translations.footer_accessibility_statement;
    document.getElementById('footerTermsOfUse').textContent = translations.footer_terms_of_use;
    document.getElementById('merchandiseSupportMsg').textContent = translations.merchandise_support_msg;

    document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
  }

  document.addEventListener('DOMContentLoaded', function() {
    const userLang = navigator.language || navigator.userLanguage;
    loadTranslations(userLang.split('-')[0]);
    setInitialMode(); // Ensure the initial mode is set on page load
  });

  function changeLanguage(lang) {
    loadTranslations(lang);
  }

  function getGeolocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(async function(position) {
        const lat = position.coords.latitude;
        const lon = position.coords.longitude;
        const response = await fetch(
          `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=en`
        );
        const data = await response.json();
        document.getElementById('cityInput').value = data.city || '';
        document.getElementById('countryInput').value = data.countryName || '';
      });
    }
  }

  document.addEventListener('DOMContentLoaded', function() {
    getGeolocation();
  });

  function toggleMode() {
    const htmlElement = document.documentElement;
    if (htmlElement.classList.contains('dark')) {
      htmlElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    } else {
      htmlElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    }
  }

  function setInitialMode() {
    const theme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' :
      'light');
    if (theme === 'dark') {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  }
  </script>
</head>

<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
  <div class="container mx-auto p-6 rounded-lg shadow-lg">
    <header class="text-center mb-10">
      <h1 class="text-8xl mb-20 font-bold text-primary" id="pageTitle">The True Empathy Pledge</h1>
      <p class="text-lg text-secondary mt-4 visual-cue" id="commitmentText">
        Join the community committed to fostering an inclusive tech industry by adhering four simple principles.
      </p>
    </header>

    <div class="language-selector text-center" role="region" aria-label="Translations">
      <label for="languageSelect">Choose Language:</label>
      <select id="languageSelect" onchange="changeLanguage(this.value)">
        <option value="en">English</option>
        <option value="es">Spanish</option>
        <option value="fr">French</option>
        <option value="de">German</option>
        <option value="zh">Chinese</option>
        <option value="ja">Japanese</option>
        <option value="ru">Russian</option>
        <option value="ar">Arabic</option>
        <option value="hi">Hindi</option>
        <option value="pt">Portuguese</option>
      </select>
    </div>

    <main>
      <section class="section-spacing" aria-label="Principles">
        <h2 class="text-4xl font-bold text-primary mb-4" id="principlesHeading">It's a matter of principles</h2>
        <p class="text-lg text-secondary mb-8 visual-cue" id="principlesText">Join us in upholding these guiding
          principles to create a more inclusive and empathetic tech industry.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
          <div class="principle p-6 bg-secondary rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-primary" id="principle1Title">Embrace true empathy</h3>
            <p class="text-lg text-secondary mt-4" id="principle1Text">Strive to understand and consider the diverse
              experiences of all users, especially those with disabilities.</p>
          </div>
          <div class="principle p-6 bg-secondary rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-primary" id="principle2Title">It's about people, not compliance</h3>
            <p class="text-lg text-secondary mt-4" id="principle2Text">Aim for the highest standards of accessibility in
              every product we create. It's about people, not compliance.</p>
          </div>
          <div class="principle p-6 bg-secondary rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-primary" id="principle3Title">Elevate disability inclusion</h3>
            <p class="text-lg text-secondary mt-4" id="principle3Text">Actively involve people with disabilities in our
              design and development processes, ensuring they receive fair compensation for their contributions.</p>
          </div>
          <div class="principle p-6 bg-secondary rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-primary" id="principle4Title">Create equitable experiences</h3>
            <p class="text-lg text-secondary mt-4" id="principle4Text">Craft products that offer equitable experiences
              for all users, removing barriers and ensuring equal access.</p>
          </div>
        </div>
      </section>

      <section class="section-spacing form-container" aria-label="Sign the pledge">
        <h2 class="text-4xl font-bold text-primary mb-4" id="signPledgeHeading">Sign the pledge</h2>
        <p class="text-lg text-secondary mb-8 visual-cue" id="principlesText">Join us in upholding these guiding
          principles to create a more inclusive and empathetic tech industry.</p>
        <form id="signForm" action="sign.php" method="post" class="space-y-4" aria-label="Pledge Form">
          <label id="signFormTitle" class="sr-only">Sign the pledge form</label>
          <label for="fullNameInput" class="block text-primary" id="fullNameLabel">Full name</label>
          <input type="text" id="fullNameInput" name="full_name" placeholder="Enter your full name" required
            class="w-full p-3 border border-gray-800 rounded" aria-required="true" />

          <label for="emailInput" class="block text-primary" id="emailLabel">Email address</label>
          <input type="email" id="emailInput" name="email" placeholder="Enter your email address" required
            class="w-full p-3 border border-gray-800 rounded" aria-required="true" />

          <label for="roleInput" class="block text-primary" id="roleLabel">Role</label>
          <input type="text" id="roleInput" name="role" placeholder="Enter your role" required
            class="w-full p-3 border border-gray-800 rounded" aria-required="true" />

          <label for="companyInput" class="block text-primary" id="companyLabel">Company (optional)</label>
          <input type="text" id="companyInput" name="company" placeholder="Enter your company (optional)"
            class="w-full p-3 border border-gray-800 rounded" />

          <input type="hidden" id="cityInput" name="city" />
          <input type="hidden" id="countryInput" name="country" />

          <!-- Honeypot field -->
          <input type="text" name="honeypot" class="honeypot" aria-hidden="true"
            aria-label="If you are human, leave this field blank" autocomplete="off" tabindex="-1" />

          <button type="submit" id="signButton"
            class="button-primary w-full p-3 rounded hover:opacity-90 focus:outline-none focus:ring-4 focus:ring-blue-300"
            aria-label="Sign the pledge">Sign the pledge</button>
        </form>
        <div class="signatures mt-10 guest-book" role="region" aria-label="Signing Sheet">
          <!-- Appreciation Message -->
          <h2 class="text-2xl font-semibold mb-4 text-primary" id="thankYouHeading">Thank you for your support!</h2>
          <p class="text-secondary" id="thankYouText">We appreciate your commitment to building a more accessible
            and inclusive tech industry. Together, we are making a difference!</p>
          <!-- Signatures will be displayed here -->
          <div id="signatureList" role="log" aria-live="polite" class="text-gray-700 dark:text-gray-200">
            <?php
            if (file_exists('signatures.json')) {
                $signatures = json_decode(file_get_contents('signatures.json'), true);
                foreach ($signatures as $signature) {
                    $timestamp = date('c', $signature['timestamp']);
                    echo "<div class='signature'><span class='timestamp'>$timestamp</span><span class='role'>{$signature['role']},&nbsp;</span><span class='company'>{$signature['company']}</span><span class='location'>{$signature['city']}, {$signature['country']}</span><span class='full_name'>{$signature['full_name']}</span></div>";
                }
            }
            ?>
          </div>
        </div>
      </section>

      <section class="merchandise-section" aria-label="Merchandise">
        <h2 class="text-4xl font-bold mb-4 text-primary" id="supportHeading">Support our cause</h2>
        <p class="text-lg text-secondary mb-8" id="supportText">All proceeds from the sales of these t-shirts will go to
          compensate people with disabilities participating in user research studies. Your purchase makes a difference!
        </p>

        <section class="section-spacing tshirt-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="tshirt bg-indigo-900 text-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4" id="tshirt1Title">Embrace true empathy</h3>
            <p class="text-lg" id="tshirt1Price">$25 + Shipping</p>
            <button id="buyTshirt1"
              onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')"
              class="w-full p-3 bg-white text-indigo-900 rounded hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-indigo-300"
              aria-label="Buy Embrace True Empathy T-shirt">Buy Now</button>
          </div>
          <div class="tshirt bg-gray-700 text-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4" id="tshirt2Title">It's about people, not compliance</h3>
            <p class="text-lg" id="tshirt2Price">$25 + Shipping</p>
            <button id="buyTshirt2"
              onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')"
              class="w-full p-3 bg-white text-gray-700 rounded hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-300"
              aria-label="Buy It's About People, Not Compliance T-shirt">Buy Now</button>
          </div>
          <div class="tshirt bg-black text-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4" id="tshirt3Title">Elevate disability inclusion</h3>
            <p class="text-lg" id="tshirt3Price">$25 + Shipping</p>
            <button id="buyTshirt3"
              onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')"
              class="w-full p-3 bg-white text-black rounded hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-black"
              aria-label="Buy Elevate Disability Inclusion T-shirt">Buy Now</button>
          </div>
          <div class="tshirt bg-white text-black p-6 border border-gray-200 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4" id="tshirt4Title">Create equitable experiences</h3>
            <p class="text-lg" id="tshirt4Price">$25 + Shipping</p>
            <button id="buyTshirt4"
              onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')"
              class="w-full p-3 bg-black text-white rounded hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300"
              aria-label="Buy Create Equitable Experiences T-shirt">Buy Now</button>
          </div>
        </section>

        <div id="merchandiseSupportMsg" class="footer mt-16 text-secondary">
          <p>Together, we can build a more accessible, equitable, and truly empathetic world.</p>
        </div>
      </section>
    </main>

    <footer class="footer-links">
      <a href="#" id="footerAccessibilityStatement">Accessibility Statement</a>
      <a href="#" id="footerTermsOfUse">Terms of Use</a>
      <p id="versionNumber">Version 0.0.4</p>
    </footer>
  </div>

  <div class="mode-toggle text-xl" onclick="toggleMode()" aria-label="Toggle light/dark mode" id="toggleModeButton"><i
      class="fas fa-adjust"></i></div>

  <script>
  document.getElementById('signForm').addEventListener('submit', function(event) {
    const fullName = document.getElementById('fullNameInput').value.trim();
    const email = document.getElementById('emailInput').value.trim();
    const role = document.getElementById('roleInput').value.trim();
    const company = document.getElementById('companyInput').value.trim();
    const city = document.getElementById('cityInput').value.trim();
    const country = document.getElementById('countryInput').value.trim();

    if (!fullName || !email || !role) {
      alert('Full name, email, and role are required.');
      event.preventDefault();
      return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      alert('Please enter a valid email address.');
      event.preventDefault();
      return;
    }

    if (!city || !country) {
      alert('Unable to retrieve your location. Please ensure location services are enabled and try again.');
      event.preventDefault();
      return;
    }
  });

  function toggleMode() {
    const htmlElement = document.documentElement;
    if (htmlElement.classList.contains('dark')) {
      htmlElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    } else {
      htmlElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    }
  }

  function setInitialMode() {
    const theme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' :
      'light');
    if (theme === 'dark') {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  }

  setInitialMode();

  // Check if the user has already signed and show a dialog if true
  <?php
      session_start();
      date_default_timezone_set('UTC'); // Ensure all timestamps are in UTC
      if (isset($_SESSION['already_signed']) && $_SESSION['already_signed']) {
          $signed_date = date('c', $_SESSION['signed_date']); // ISO 8601 format
          echo "document.addEventListener('DOMContentLoaded', function() {
              const signedDate = new Date('$signed_date');
              const localizedDate = signedDate.toLocaleString();
              alert('You have already signed this pledge on ' + localizedDate);
          });";
          // Clear the session variable
          unset($_SESSION['already_signed']);
          unset($_SESSION['signed_date']);
      }
  ?>
  </script>
</body>

</html>