<section class="signatures mt-10 guest-book" role="region" aria-label="Signing Sheet">
  <!-- Appreciation Message -->
  <h2 class="text-2xl font-semibold mb-4 text-primary" id="thankYouHeading">Thank you for your support!</h2>
  <p class="text-secondary" id="thankYouText">We appreciate your commitment to building a more accessible
    and inclusive tech industry. Together, we are making a difference!</p>
  <!-- Signatures will be displayed here -->
  <div id="signatureList" role="log" aria-live="polite" class="text-gray-700 dark:text-gray-200">
    <?php
      if (file_exists('signatures/signatures.json')) {
      $signatures = json_decode(file_get_contents('signatures/signatures.json'), true);
      foreach ($signatures as $signature) {
      $timestamp = date('c', $signature['timestamp']);
      echo "<div class='signature'><span class='timestamp'>$timestamp</span><span class='role'>{$signature['role']},&nbsp;</span><span class='company'>{$signature['company']}</span><span class='location'>{$signature['city']}, {$signature['country']}</span><span class='full_name'>{$signature['full_name']}</span></div>";
      }
      }
    ?>
  </div>
</section>