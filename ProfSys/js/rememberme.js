function rememberMe() {
    const rememberMe = document.getElementById("rememberMe");
    if (rememberMe.checked) {
      // Store the user's choice in local storage.
      localStorage.setItem("rememberMe", "true");
    } else {
      // Delete the user's choice from local storage.
      localStorage.removeItem("rememberMe");
    }
  }
  