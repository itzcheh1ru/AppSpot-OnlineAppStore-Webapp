document.addEventListener("DOMContentLoaded", function() {
    var button = document.getElementById("internetBank");
  
    button.addEventListener("click", function() {
      window.location.href = "internetbank.html";
    });
  });

  document.addEventListener("DOMContentLoaded", function() {
    var button = document.getElementById("cardPayment");
  
    button.addEventListener("click", function() {
      window.location.href = "payment.html";
    });
  });  

  document.addEventListener("DOMContentLoaded", function() {
    var button = document.getElementById("pay");
  
    button.addEventListener("click", function() {
        window.open("https://pay.google.com/about/", "_blank");
    });
  }); 