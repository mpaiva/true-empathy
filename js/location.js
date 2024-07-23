// Translations for "Getting your location..." and "Get My Location"
const translations = {
  en: {
    gettingLocation: "Getting your location...",
    getLocation: "Get My Location",
  },
  ar: {
    gettingLocation: "جارٍ الحصول على موقعك...",
    getLocation: "احصل على موقعي",
  },
  de: {
    gettingLocation: "Standort wird abgerufen...",
    getLocation: "Meinen Standort abrufen",
  },
  es: {
    gettingLocation: "Obteniendo tu ubicación...",
    getLocation: "Obtener Mi Ubicación",
  },
  fr: {
    gettingLocation: "Obtention de votre position...",
    getLocation: "Obtenir ma position",
  },
  hi: {
    gettingLocation: "आपका स्थान प्राप्त किया जा रहा है...",
    getLocation: "मेरा स्थान प्राप्त करें",
  },
  ja: { gettingLocation: "位置情報を取得中...", getLocation: "私の位置を取得" },
  ko: {
    gettingLocation: "위치를 가져오는 중...",
    getLocation: "내 위치 가져오기",
  },
  pt: {
    gettingLocation: "Obtendo sua localização...",
    getLocation: "Obter Minha Localização",
  },
  ru: {
    gettingLocation: "Получение вашего местоположения...",
    getLocation: "Получить мое местоположение",
  },
  zh: { gettingLocation: "正在获取您的位置...", getLocation: "获取我的位置" },
  it: {
    gettingLocation: "Ottenendo la tua posizione...",
    getLocation: "Ottieni la mia posizione",
  },
};

// Function to detect user language (default to English if not detected)
function getUserLanguage() {
  const language = navigator.language || navigator.userLanguage;
  return language.split("-")[0]; // Extract base language (e.g., 'en' from 'en-US')
}

// Function to get geolocation and update button text
function getGeolocation() {
  const locationButton = document.getElementById("getLocationButton");
  const userLanguage = getUserLanguage();
  const loadingText =
    translations[userLanguage]?.gettingLocation ||
    translations.en.gettingLocation;
  const getLocationText =
    translations[userLanguage]?.getLocation || translations.en.getLocation;

  locationButton.textContent = loadingText; // Change button text

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      async function (position) {
        const lat = position.coords.latitude;
        const lon = position.coords.longitude;
        const response = await fetch(
          `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=${userLanguage}`
        );
        const data = await response.json();
        console.log(data); // Debug: Log the data received from the API
        document.getElementById("cityInput").value = data.city || "";
        document.getElementById("countryInput").value = data.countryName || "";

        locationButton.textContent = getLocationText; // Reset button text
      },
      function (error) {
        console.error("Geolocation error:", error); // Debug: Log geolocation errors
        locationButton.textContent = getLocationText; // Reset button text
      }
    );
  } else {
    console.error("Geolocation is not supported by this browser."); // Debug: Log if geolocation is not supported
    locationButton.textContent = getLocationText; // Reset button text
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const locationButton = document.getElementById("getLocationButton");

  if (locationButton) {
    locationButton.addEventListener("click", function () {
      console.log("Get Location button clicked"); // Debug: Log button click
      getGeolocation();
    });
  } else {
    console.error("Get Location button not found."); // Debug: Log if button is not found
  }
});
