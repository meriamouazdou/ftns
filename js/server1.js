document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById("myModal");
  const closeModal = document.getElementsByClassName("close")[0];
  const authForm = document.getElementById("auth-form");
  const paymentForm = document.getElementById("payment-form");
  const authSection = document.getElementById("auth-section");
  const paymentSection = document.getElementById("payment-section");

  document.querySelectorAll(".choosePlanningBtn").forEach(button => {
    button.addEventListener("click", function() {
      modal.style.display = "block";
    });
  });

  closeModal.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  authForm.onsubmit = function(event) {
    event.preventDefault();
    // Remplacer par la logique d'authentification réelle
    const isAuthenticated = true; // Simuler le succès de l'authentification
    if (isAuthenticated) {
      modal.style.display = "none";
    } else {
      alert("Échec de l'authentification. Veuillez réessayer.");
    }
  }

 
});