<header class="text-center mb-10">
  <h1 class="text-8xl mb-20 font-bold text-primary m:text-6xl" id="pageTitle">The True Empathy Pledge</h1>
  <p class="text-lg text-secondary mt-4 visual-cue" id="commitmentText">
    Join the community committed to fostering an inclusive tech industry by adhering to four simple principles.
  </p>
  <nav id="languageSelectSection" class="language-selector text-center" role="region" aria-label="Translations">
    <label for="languageSelect" id="rotatingLabel" style="transition: opacity 1s;">Select Language:</label>
    <select id="languageSelect" onchange="changeLanguage(this.value)">
      <option value="en">English - EN</option>
      <option value="ar">العربية - AR</option>
      <option value="de">Deutsch - DE</option>
      <option value="es">Español - ES</option>
      <option value="fr">Français - FR</option>
      <option value="ja">日本語 - JA</option>
      <option value="hi">हिन्दी - HI</option>
      <option value="it">Italiano - IT</option>
      <option value="pt">Português - PT</option>
      <option value="ko">한국어 - KO</option>
      <option value="ru">Pусский - RU</option>
      <option value="zh">普通话 - ZH</option>
    </select>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
      const translations = {
        en: "Select Language:",
        es: "Seleccionar idioma:",
        fr: "Choisir la langue:",
        de: "Sprache auswählen:",
        zh: "选择语言：",
        ja: "言語を選択する：",
        ru: "Выберите язык:",
        ar: "اختر اللغة:",
        hi: "भाषा चुनें:",
        pt: "Selecionar idioma:",
        ko: "언어 선택:",
        it: "Seleziona la lingua:"
      };

      let currentIndex = 0;
      const langCodes = Object.keys(translations);
      const label = document.getElementById("rotatingLabel");

      function rotateLabel() {
        console.log("Rotating label..."); // Debugging
        label.style.opacity = "0";
        setTimeout(() => {
          currentIndex = (currentIndex + 1) % langCodes.length;
          label.textContent = translations[langCodes[currentIndex]];
          label.style.opacity = "1";
        }, 1000); // Timing for the transition
      }

      setInterval(rotateLabel, 8000); // Rotate every 8 seconds
    });
    </script>
  </nav>
</header>