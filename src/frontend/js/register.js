document.getElementById("registration-form").addEventListener("submit", function(event){
    event.preventDefault();

    var name = document.getElementById("name").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    if(password !== confirmPassword) {
        document.getElementById("error-msg").textContent = "Passwords do not match!";
        return;
    }

    // Here you can perform further validation and registration process
    alert("Registration successful!");
    document.getElementById("error-msg").textContent = "";
});
