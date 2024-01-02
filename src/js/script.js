function hideLoader() {
  const loader = document.getElementById("loader-page");
  loader.classList.add("non-active");
  setTimeout(() => {
    loader.style.display = "none";
  }, 500);
}
