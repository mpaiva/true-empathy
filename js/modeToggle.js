function toggleMode() {
  const htmlElement = document.documentElement;
  htmlElement.classList.add("transition-colors", "duration-1000");
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

// Ensure the initial mode is set on page load
document.addEventListener("DOMContentLoaded", setInitialMode);
