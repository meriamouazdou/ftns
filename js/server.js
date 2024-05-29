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
      authSection.style.display = "none";
    } else {
      alert("Échec de l'authentification. Veuillez réessayer.");
    }
  }

  paymentForm.onsubmit = function(event) {
    event.preventDefault();
    // Collecter les détails de paiement et envoyer au serveur
    const paymentDetails = {
      cardNumber: document.getElementById("cardNumber").value,
      expiry: document.getElementById("expiry").value,
      cvv: document.getElementById("cvv").value,
    };

    // Simuler un appel serveur
    setTimeout(() => {
      alert("Paiement réussi !");
      modal.style.display = "none";
    }, 1000);
  }
});