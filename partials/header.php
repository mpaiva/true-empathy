<header class="text-center mb-10">
  <h1 class="text-8xl mb-20 font-bold text-primary m:text-6xl" id="pageTitle">The True Empathy Pledge</h1>
  <p class="text-lg text-secondary mt-4 visual-cue" id="commitmentText">
    Join the community committed to fostering an inclusive tech industry by adhering to four simple principles.
  </p>
  <nav id="languageSelectSection" class="language-selector text-center" role="region" aria-label="Translations">
    <label for="languageSelect" id="rotatingLabel">Select Language:</label>
    <select id="languageSelect" onchange="changeLanguage(this.value)">
      <option value="en">English - EN</option>
      <option value="es"><span lang="es">Español - ES</span></option>
      <option value="fr"><span lang="fr">Français - FR</span></option>
      <option value="de"><span lang="de">Deutsch - DE</span></option>
      <option value="zh"><span lang="zh">普通话 - ZH</span></option>
      <option value="ja"><span lang="ja">日本語 - JA</span></option>
      <option value="ru"><span lang="ru">Pусский - RU</span></option>
      <option value="ar"><span lang="ar">العربية - AR</span></option>
      <option value="hi"><span lang="hi">हिन्दी - HI</span></option>
      <option value="pt"><span lang="pt">Português - PT</span></option>
      <option value="ko"><span lang="ko">한국어 - KO</span></option>
      <option value="it"><span lang="it">Italiano - IT</span></option>
    </select>

    <script>
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
      label.style.opacity = "0";
      setTimeout(() => {
        currentIndex = (currentIndex + 1) % langCodes.length;
        label.textContent = translations[langCodes[currentIndex]];
        label.style.opacity = "1";
      }, 1000); // Adjusting timing to fit the transition
    }

    setInterval(rotateLabel, 8000); // Rotate every 5 seconds
    </script>
  </nav>
</header>