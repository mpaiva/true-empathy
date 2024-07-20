<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">The True Empathy Pledge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-size: 1.125rem; /* Base body text size */
        }
        .mode-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px;
            cursor: pointer;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
            background-color: #ffffff; /* Light background for light mode */
            color: #333333; /* Dark text color for light mode */
        }
        @media (min-width: 768px) {
            .container {
                max-width: 1024px; /* Set max width to 1024px for table and desktop */
            }
        }
        .dark .container {
            background-color: #1a202c; /* Dark background for dark mode */
            color: #f7fafc; /* Light text color for dark mode */
        }
        .text-primary {
            color: #333333; /* Dark text color for light mode */
        }
        .dark .text-primary {
            color: #f7fafc; /* Light text color for dark mode */
        }
        .bg-secondary {
            background-color: #f4f4f4; /* Light secondary background for light mode */
        }
        .dark .bg-secondary {
            background-color: #2d3748; /* Dark secondary background for dark mode */
        }
        .text-secondary {
            color: #555555; /* Secondary text color for light mode */
        }
        .dark .text-secondary {
            color: #e2e8f0; /* Secondary text color for dark mode */
        }
        .button-primary {
            background-color: #0056b3; /* Primary button color for light mode */
            color: #ffffff; /* Button text color for light mode */
            transition: background-color 0.3s;
        }
        .dark .button-primary {
            background-color: #2c5282; /* Primary button color for dark mode */
            color: #ffffff; /* Button text color for dark mode */
        }
        .button-primary:hover {
            background-color: #004494; /* Primary button hover color for light mode */
        }
        .dark .button-primary:hover {
            background-color: #2a4365; /* Primary button hover color for dark mode */
        }
        .guest-book {
            background-color: #fff; /* Background color for light mode */
            padding: 40px; /* Padding for guest book */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
            max-width: 80%; /* Max width */
            margin: 0 auto; /* Center horizontally */
        }
        .dark .guest-book {
            background-color: #2d3748; /* Background color for dark mode */
        }
        .signature {
            padding: 20px 10px 0px 10px; /* Padding for each signature */
            border-bottom: 4px dotted #3b82f6; /* Light blue bottom border for signatures */
            margin-bottom: 10px; /* Space between signatures */
        }
        .dark .signature {
            border-bottom-color: rgba(59, 130, 246, 0.5); /* Dark mode border color */
        }
        .signature:last-child {
            border-bottom: none; /* Remove border from the last signature */
        }
        .signature .full_name {
            font-family: 'Gwendolyn', cursive; /* Handwriting font for full name */
            font-size: 1.75rem; /* Larger font size for full name */
            color: #1e3a8a; /* Color for full name */
            line-height: 1.5rem; /* Line height */
        }
        .dark .signature .full_name {
            color: #a5b4fc; /* Light color for full name in dark mode */
        }
        .signature .role, .signature .company, .signature .timestamp, .signature .location {
            color: #333333; /* Dark color for role and company */
            display: block; /* Block to separate lines */
            font-size: 1rem; /* Font size */
        }
        .dark .signature .role, .dark .signature .company, .dark .signature .timestamp, .dark .signature .location {
            color: #cbd5e0; /* Light color for role and company in dark mode */
        }
        .form-input {
            width: calc(100% - 2rem); /* Reduce width */
            margin: 0 auto; /* Center input */
            max-width: 400px; /* Max width for better desktop view */
            padding: 10px; /* More padding for better readability */
            font-size: 1rem; /* Increase font size */
            border: 2px solid #333333; /* Ensure visible border */
        }
        .form-input:focus {
            outline: 4px solid #FF00FF; /* Magenta border color */
            outline-offset: 2px; /* Offset */
        }
        .honeypot {
            display: none; /* Hide honeypot input */
        }
        .footer-links {
            text-align: center;
            margin-top: 2rem;
            font-size: 1.1rem;
        }
        .footer-links a {
            color: #0056b3; /* Link color */
            margin: 0 10px;
        }
        .dark .footer-links a {
            color: #2c5282; /* Link color for dark mode */
        }
        .visual-cue {
            border-left: 4px solid #0056b3; /* Blue visual cue */
            padding-left: 1rem;
            max-width: 80ch; /* Limit text width to 80 characters */
            text-align: left; /* Ensure text is left aligned */
        }
        .dark .visual-cue {
            border-left-color: #2c5282; /* Blue visual cue for dark mode */
        }
        p {
            text-align: left; /* Ensure all p tags are left aligned */
        }
        .error {
            border: 2px solid red;
            padding: 1rem;
            margin: 1rem 0;
        }
        .section-spacing {
            margin-top: 2rem; /* Add vertical spacing between sections */
        }
        .form-container {
            max-width: 600px; /* Set max width for form container */
            margin: 0 auto; /* Center the form container */
        }
    </style>
    <script>
        async function loadTranslations(lang) {
            const response = await fetch(`translations.php?lang=${lang}`);
            const translations = await response.json();

            document.getElementById('pageTitle').textContent = translations.title;
            document.getElementById('commitmentText').textContent = translations.commitment;
            document.getElementById('principlesHeading').textContent = translations.principles_heading;
            document.getElementById('principlesText').textContent = translations.principles_text;
            document.getElementById('signPledgeHeading').textContent = translations.sign_pledge;
            document.getElementById('fullNameLabel').textContent = translations.full_name;
            document.getElementById('emailLabel').textContent = translations.email_address;
            document.getElementById('roleLabel').textContent = translations.role;
            document.getElementById('companyLabel').textContent = translations.company;
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

            document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const userLang = navigator.language || navigator.userLanguage;
            loadTranslations(userLang.split('-')[0]);
        });

        function changeLanguage(lang) {
            loadTranslations(lang);
        }

        function getGeolocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(async function(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    const response = await fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=en`);
                    const data = await response.json();
                    document.getElementById('cityInput').value = data.city || '';
                    document.getElementById('countryInput').value = data.countryName || '';
                });
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            getGeolocation();
        });
    </script>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <div class="container mx-auto p-6 rounded-lg shadow-lg">
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-primary" id="pageTitle">The True Empathy Pledge</h1>
            <p class="text-lg text-secondary mt-4 visual-cue" id="commitmentText">
                I commit to fostering an inclusive tech industry by adhering to the following principles:
            </p>
        </header>

        <div class="language-selector text-center mb-6">
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
            <section class="section-spacing">
                <h2 class="text-3xl font-bold text-primary mb-4" id="principlesHeading">It's a matter of principles</h2>
                <p class="text-lg text-secondary mb-8 visual-cue" id="principlesText">Join us in upholding these guiding principles to create a more inclusive and empathetic tech industry.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    <div class="principle p-6 bg-secondary rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-primary" id="principle1Title">Embrace true empathy</h3>
                        <p class="text-lg text-secondary mt-4" id="principle1Text">Strive to understand and consider the diverse experiences of all users, especially those with disabilities.</p>
                    </div>
                    <div class="principle p-6 bg-secondary rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-primary" id="principle2Title">It's about people, not compliance</h3>
                        <p class="text-lg text-secondary mt-4" id="principle2Text">Aim for the highest standards of accessibility in every product we create. It's about people, not compliance.</p>
                    </div>
                    <div class="principle p-6 bg-secondary rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-primary" id="principle3Title">Elevate disability inclusion</h3>
                        <p class="text-lg text-secondary mt-4" id="principle3Text">Actively involve people with disabilities in our design and development processes, ensuring they receive fair compensation for their contributions.</p>
                    </div>
                    <div class="principle p-6 bg-secondary rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-primary" id="principle4Title">Create equitable experiences</h3>
                        <p class="text-lg text-secondary mt-4" id="principle4Text">Craft products that offer equitable experiences for all users, removing barriers and ensuring equal access.</p>
                    </div>
                </div>
            </section>

            <section class="section-spacing sign-module mt-10 form-container">
                <h2 class="text-3xl font-bold text-primary mb-6" id="signPledgeHeading">Sign the pledge</h2>
                <form id="signForm" action="sign.php" method="post" class="space-y-4" aria-labelledby="signFormTitle">
                    <label id="signFormTitle" class="sr-only">Sign the pledge form</label>
                    <label for="fullNameInput" class="block text-primary" id="fullNameLabel">Full name</label>
                    <input type="text" id="fullNameInput" name="full_name" placeholder="Enter your full name" required class="w-full p-3 border border-gray-300 rounded form-input" aria-required="true"/>
                    
                    <label for="emailInput" class="block text-primary" id="emailLabel">Email address</label>
                    <input type="email" id="emailInput" name="email" placeholder="Enter your email address" required class="w-full p-3 border border-gray-300 rounded form-input" aria-required="true"/>
                    
                    <label for="roleInput" class="block text-primary" id="roleLabel">Role</label>
                    <input type="text" id="roleInput" name="role" placeholder="Enter your role" required class="w-full p-3 border border-gray-300 rounded form-input" aria-required="true"/>
                    
                    <label for="companyInput" class="block text-primary" id="companyLabel">Company (optional)</label>
                    <input type="text" id="companyInput" name="company" placeholder="Enter your company (optional)" class="w-full p-3 border border-gray-300 rounded form-input"/>

                    <input type="hidden" id="cityInput" name="city"/>
                    <input type="hidden" id="countryInput" name="country"/>
                    
                    <!-- Honeypot field -->
                    <input type="text" name="honeypot" class="honeypot" aria-hidden="true" aria-label="If you are human, leave this field blank" autocomplete="off" tabindex="-1"/>
                    
                    <button type="submit" class="button-primary w-full p-3 rounded hover:opacity-90 focus:outline-none focus:ring-4 focus:ring-blue-300" aria-label="Sign the pledge">Sign</button>
                </form>
                <div class="signatures mt-10 guest-book">
                    <!-- Appreciation Message -->
                    <h2 class="text-2xl font-semibold mb-4 text-primary" id="thankYouHeading">Thank you for your support!</h2>
                    <p class="text-secondary mb-6" id="thankYouText">We appreciate your commitment to building a more accessible and inclusive tech industry. Together, we are making a difference!</p>
                    <!-- Signatures will be displayed here -->
                    <div id="signatureList" role="log" aria-live="polite" class="text-gray-700 dark:text-gray-200">
                    <?php
                        if (file_exists('signatures.json')) {
                            $signatures = json_decode(file_get_contents('signatures.json'), true);
                            foreach ($signatures as $signature) {
                                $timestamp = date('F j, Y, g:i a', $signature['timestamp']);
                                echo "<div class='signature'><span class='timestamp'>$timestamp</span><br/><span class='role'>{$signature['role']}</span>, <span class='company'>{$signature['company']}</span><br/><span class='location'>{$signature['city']}, {$signature['country']}</span><br/><span class='full_name'>- {$signature['full_name']}</span></div>";
                            }
                        }
                    ?>
                    </div>
                </div>
            </section>

            <section class="merchandise-section mt-0">
                <h2 class="text-3xl font-bold mb-4 text-primary" id="supportHeading">Support our cause</h2>
                <p class="text-lg text-secondary mb-8" id="supportText">All proceeds from the sales of these t-shirts will go to compensate people with disabilities participating in user research studies. Your purchase makes a difference!</p>
            </section>

            <section class="section-spacing tshirt-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="tshirt bg-indigo-900 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Embrace true empathy</h3>
                    <p class="text-lg mb-6">$25 + Shipping</p>
                    <button onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')" class="w-full p-3 bg-white text-indigo-900 rounded hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-indigo-300" aria-label="Buy Embrace True Empathy T-shirt">Buy Now</button>
                </div>
                <div class="tshirt bg-gray-700 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">It's about people, not compliance</h3>
                    <p class="text-lg mb-6">$25 + Shipping</p>
                    <button onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')" class="w-full p-3 bg-white text-gray-700 rounded hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-300" aria-label="Buy It's About People, Not Compliance T-shirt">Buy Now</button>
                </div>
                <div class="tshirt bg-black text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Elevate disability inclusion</h3>
                    <p class="text-lg mb-6">$25 + Shipping</p>
                    <button onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')" class="w-full p-3 bg-white text-black rounded hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-black" aria-label="Buy Elevate Disability Inclusion T-shirt">Buy Now</button>
                </div>
                <div class="tshirt bg-white text-black p-6 border border-gray-200 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Create equitable experiences</h3>
                    <p class="text-lg mb-6">$25 + Shipping</p>
                    <button onclick="alert('Thank you for your support! All proceeds go to compensate people with disabilities participating in user research studies.')" class="w-full p-3 bg-black text-white rounded hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300" aria-label="Buy Create Equitable Experiences T-shirt">Buy Now</button>
                </div>
            </section>

            <div class="footer mt-16 text-secondary">
                <p>Together, we can build a more accessible, equitable, and truly empathetic world.</p>
            </div>
        </main>
        
        <footer class="footer-links">
            <a href="#">Accessibility Statement</a>
            <a href="#">Terms of Use</a>
        </footer>
    </div>

    <div class="mode-toggle text-xl" onclick="toggleMode()" aria-label="Toggle light/dark mode" id="toggleModeButton"><i class="fas fa-adjust"></i></div>

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
        const theme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
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
    if (isset($_SESSION['already_signed']) && $_SESSION['already_signed']) {
        $signed_date = date('F j, Y, g:i a', $_SESSION['signed_date']);
        echo "alert('You have already signed this pledge on $signed_date.');";
        // Clear the session variable
        unset($_SESSION['already_signed']);
        unset($_SESSION['signed_date']);
    }
    ?>
    </script>
</body>
</html>
