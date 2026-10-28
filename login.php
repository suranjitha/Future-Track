<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - FutureTrack</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-box {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
    }
    .login-box h2 {
      margin-bottom: 20px;
      color: #2c3e50;
    }
    .login-box input {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    .login-btn {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #00c6ff, #0072ff);
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .login-btn:hover {
      background: linear-gradient(135deg, #27ae60, #2ecc71);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.2);
    }
    .error { color: red; font-size: 14px; margin-top: 5px; }
    .success { color: green; font-size: 14px; margin-top: 5px; }
  </style>
  <script>
    function validateForm(event) {
      event.preventDefault(); // stop default form submission

      const email = document.getElementById("email").value.trim();
      const password = document.getElementById("password").value.trim();
      const errorMsg = document.getElementById("errorMsg");
      const successMsg = document.getElementById("successMsg");

      // Regex: at least 8 chars, uppercase, lowercase, number, special char
      const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

      if (!regex.test(password)) {
        errorMsg.textContent = "Password must be 8+ chars with uppercase, lowercase, number, and special character.";
        successMsg.textContent = "";
        return false;
      }

      if (email === "" || !email.includes("@")) {
        errorMsg.textContent = "Please enter a valid email address.";
        successMsg.textContent = "";
        return false;
      }

      // If everything is valid
      errorMsg.textContent = "";
      successMsg.textContent = "Successfully Logged In!";

      // Redirect after 1 second
      setTimeout(() => {
        window.location.href = "index.php";
      }, 1000);

      return true;
    }
  </script>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form onsubmit="validateForm(event)">
      <input type="text" id="email" name="email" placeholder="Enter Email" required><br>
      <input type="password" id="password" name="password" placeholder="Enter Password" required><br>
      <button type="submit" class="login-btn">Login</button>
      <p id="errorMsg" class="error"></p>
      <p id="successMsg" class="success"></p>
    </form>
  </div>
</body>
</html>
