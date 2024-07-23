document
  .getElementById("signForm")
  .addEventListener("submit", function (event) {
    const fullName = document.getElementById("fullNameInput").value.trim();
    const email = document.getElementById("emailInput").value.trim();
    const role = document.getElementById("roleInput").value.trim();
    const company = document.getElementById("companyInput").value.trim();
    const city = document.getElementById("cityInput").value.trim();
    const country = document.getElementById("countryInput").value.trim();

    if (!fullName || !email || !role) {
      alert("Full name, email, and role are required.");
      event.preventDefault();
      return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      event.preventDefault();
      return;
    }

    if (!city || !country) {
      alert(
        "Unable to retrieve your location. Please ensure location services are enabled and try again."
      );
      event.preventDefault();
      return;
    }
  });

function toggleMode() {
  const htmlElement = document.documentElement;
  if (htmlElement.classList.contains("dark")) {
    htmlElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
  } else {
    htmlElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
  }
}

function setInitialMode() {
  const theme =
    localStorage.getItem("theme") ||
    (window.matchMedia("(prefers-color-scheme: dark)").matches
      ? "dark"
      : "light");
  if (theme === "dark") {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
}

setInitialMode();
