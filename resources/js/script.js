document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    // Mendapatkan nilai dari input username dan password
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Proses autentikasi (disesuaikan dengan kebutuhan Anda)
    if (username === "admin" && password === "admin123") {
      alert("Login as Admin!");
      // Redirect atau lakukan tindakan khusus untuk admin
    } else if (username === "user" && password === "user123") {
      alert("Login as User!");
      // Redirect atau lakukan tindakan khusus untuk user
    } else {
      alert("Invalid username or password!");
    }
  });
  