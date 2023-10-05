document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("loginForm");
  const loginButton = document.getElementById("loginButton");
  const usernameDisplay = document.getElementById("usernameDisplay");
  const loginButtonContainer = document.getElementById("loginButtonContainer");
  const usernameDisplayContainer = document.getElementById(
    "usernameDisplayContainer"
  );

  // Check if the user is logged in and display their username
  const storedUsername = localStorage.getItem("username");

  if (storedUsername) {
    usernameDisplay.textContent = `${storedUsername}`;
    loginButtonContainer.style.display = "none";
    usernameDisplayContainer.style.display = "block";
  }

  loginButton.addEventListener("click", function () {
    // Get the values of the username and password fields
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Check if either the username or password is blank
    if (username.trim() === "" || password.trim() === "") {
      alert("Username and password cannot be blank.");
      return;
    }

    // Save the username and password to local storage
    localStorage.setItem("username", username);
    localStorage.setItem("password", password);
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";

    // Close the modal
    const loginModal = new bootstrap.Modal(
      document.getElementById("loginModal")
    );
    loginModal.hide();

    // Display the username in the navigation bar
    usernameDisplay.textContent = `${username}`;
    loginButtonContainer.style.display = "none";
    usernameDisplayContainer.style.display = "block";
  });
});

// localStorage.clear();