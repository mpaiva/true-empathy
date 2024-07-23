async function loadTranslations(lang) {
  try {
    const response = await fetch(`translations.php?lang=${lang}`);
    const translations = await response.json();

    const requiredKeys = [
      "title",
      "commitment",
      "principles_heading",
      "principles_text",
      "sign_pledge",
      "sign_pledge_text",
      "first_name",
      "first_name_placeholder",
      "last_name",
      "last_name_placeholder",
      "email_address",
      "email_placeholder",
      "role",
      "role_placeholder",
      "company",
      "company_placeholder",
      "support",
      "support_text",
      "thank_you",
      "thank_you_text",
      "toggle_mode",
      "principle1_title",
      "principle1_text",
      "principle2_title",
      "principle2_text",
      "principle3_title",
      "principle3_text",
      "principle4_title",
      "principle4_text",
      "tshirt1_title",
      "tshirt1_price",
      "buy_tshirt1",
      "buy_alert",
      "tshirt2_title",
      "tshirt2_price",
      "buy_tshirt2",
      "tshirt3_title",
      "tshirt3_price",
      "buy_tshirt3",
      "tshirt4_title",
      "tshirt4_price",
      "buy_tshirt4",
      "footer_accessibility_statement",
      "footer_terms_of_use",
      "merchandise_support_msg",
      "city",
      "city_placeholder",
      "country",
      "country_placeholder",
      "get_location",
      "getting_location",
    ];

    // Check for missing translations
    const missingKeys = requiredKeys.filter((key) => !(key in translations));
    if (missingKeys.length > 0) {
      console.warn("Missing translations for keys:", missingKeys);
    }

    // Update the lang attribute
    document.documentElement.lang = lang;

    function updateElementTextContent(id, text) {
      const element = document.getElementById(id);
      if (element) {
        element.textContent = text;
      } else {
        console.warn(`Element with ID '${id}' not found.`);
      }
    }

    function updateElementAttribute(id, attribute, value) {
      const element = document.getElementById(id);
      if (element) {
        element.setAttribute(attribute, value);
      } else {
        console.warn(`Element with ID '${id}' not found.`);
      }
    }

    updateElementTextContent("pageTitle", translations.title);
    updateElementTextContent("commitmentText", translations.commitment);
    updateElementTextContent(
      "principlesHeading",
      translations.principles_heading
    );
    updateElementTextContent("principlesText", translations.principles_text);
    updateElementTextContent("signPledgeHeading", translations.sign_pledge);
    updateElementTextContent("signPledgeText", translations.sign_pledge_text);
    updateElementTextContent("firstNameLabel", translations.first_name);
    updateElementAttribute(
      "firstNameInput",
      "placeholder",
      translations.first_name_placeholder
    );
    updateElementTextContent("lastNameLabel", translations.last_name);
    updateElementAttribute(
      "lastNameInput",
      "placeholder",
      translations.last_name_placeholder
    );
    updateElementTextContent("emailLabel", translations.email_address);
    updateElementAttribute(
      "emailInput",
      "placeholder",
      translations.email_placeholder
    );
    updateElementTextContent("roleLabel", translations.role);
    updateElementAttribute(
      "roleInput",
      "placeholder",
      translations.role_placeholder
    );
    updateElementTextContent("companyLabel", translations.company);
    updateElementAttribute(
      "companyInput",
      "placeholder",
      translations.company_placeholder
    );
    updateElementTextContent("signButton", translations.sign_pledge);
    updateElementTextContent("supportHeading", translations.support);
    updateElementTextContent("supportText", translations.support_text);
    updateElementTextContent("thankYouHeading", translations.thank_you);
    updateElementTextContent("thankYouText", translations.thank_you_text);
    updateElementAttribute(
      "toggleModeButton",
      "aria-label",
      translations.toggle_mode
    );
    updateElementTextContent("principle1Title", translations.principle1_title);
    updateElementTextContent("principle1Text", translations.principle1_text);
    updateElementTextContent("principle2Title", translations.principle2_title);
    updateElementTextContent("principle2Text", translations.principle2_text);
    updateElementTextContent("principle3Title", translations.principle3_title);
    updateElementTextContent("principle3Text", translations.principle3_text);
    updateElementTextContent("principle4Title", translations.principle4_title);
    updateElementTextContent("principle4Text", translations.principle4_text);
    updateElementTextContent("tshirt1Title", translations.tshirt1_title);
    updateElementTextContent("tshirt1Price", translations.tshirt1_price);
    updateElementTextContent("buyTshirt1", translations.buy_tshirt1);
    updateElementAttribute(
      "buyTshirt1",
      "aria-label",
      translations.buy_tshirt1
    );
    updateElementAttribute(
      "buyTshirt1",
      "onclick",
      `alert('${translations.buy_alert}')`
    );
    updateElementTextContent("tshirt2Title", translations.tshirt2_title);
    updateElementTextContent("tshirt2Price", translations.tshirt2_price);
    updateElementTextContent("buyTshirt2", translations.buy_tshirt2);
    updateElementAttribute(
      "buyTshirt2",
      "aria-label",
      translations.buy_tshirt2
    );
    updateElementAttribute(
      "buyTshirt2",
      "onclick",
      `alert('${translations.buy_alert}')`
    );
    updateElementTextContent("tshirt3Title", translations.tshirt3_title);
    updateElementTextContent("tshirt3Price", translations.tshirt3_price);
    updateElementTextContent("buyTshirt3", translations.buy_tshirt3);
    updateElementAttribute(
      "buyTshirt3",
      "aria-label",
      translations.buy_tshirt3
    );
    updateElementAttribute(
      "buyTshirt3",
      "onclick",
      `alert('${translations.buy_alert}')`
    );
    updateElementTextContent("tshirt4Title", translations.tshirt4_title);
    updateElementTextContent("tshirt4Price", translations.tshirt4_price);
    updateElementTextContent("buyTshirt4", translations.buy_tshirt4);
    updateElementAttribute(
      "buyTshirt4",
      "aria-label",
      translations.buy_tshirt4
    );
    updateElementAttribute(
      "buyTshirt4",
      "onclick",
      `alert('${translations.buy_alert}')`
    );
    updateElementTextContent(
      "footerAccessibilityStatement",
      translations.footer_accessibility_statement
    );
    updateElementTextContent(
      "footerTermsOfUse",
      translations.footer_terms_of_use
    );
    updateElementTextContent(
      "merchandiseSupportMsg",
      translations.merchandise_support_msg
    );
    updateElementTextContent("cityLabel", translations.city);
    updateElementAttribute(
      "cityInput",
      "placeholder",
      translations.city_placeholder
    );
    updateElementTextContent("countryLabel", translations.country);
    updateElementAttribute(
      "countryInput",
      "placeholder",
      translations.country_placeholder
    );
    updateElementTextContent("getLocationButton", translations.get_location);
    updateElementAttribute(
      "getLocationButton",
      "data-loading-text",
      translations.getting_location
    );

    document.documentElement.dir = lang === "ar" ? "rtl" : "ltr";
  } catch (error) {
    console.error("Error loading translations:", error);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const userLang = navigator.language || navigator.userLanguage;
  loadTranslations(userLang.split("-")[0]);
  setInitialMode(); // Ensure the initial mode is set on page load
});

function changeLanguage(lang) {
  loadTranslations(lang);
}
