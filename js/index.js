document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById("myModal");
    modal.style.display = "none";
    const closeModal = document.getElementsByClassName("close")[0];
    const authForm = document.getElementById("auth-form");
    const signupForm = document.getElementById("signup-form");
    const paymentForm = document.getElementById("payment-form");
    const authSection = document.getElementById("auth-section");
    const signupSection = document.getElementById("signup-section");
    const paymentSection = document.getElementById("payment-section");
    const showSignup = document.getElementById("show-signup");
    const showLogin = document.getElementById("show-login");
    const headerLogin = document.getElementById("header-login");
  
    document.querySelectorAll(".choosePlanningBtn").forEach(button => {
        button.addEventListener("click", function() {
            modal.style.display = "flex";
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
  
    showSignup.onclick = function(event) {
        event.preventDefault();
        authSection.style.display = "none";
        signupSection.style.display = "block";
    }
  
    showLogin.onclick = function(event) {
        event.preventDefault();
        signupSection.style.display = "none";
        authSection.style.display = "block";
    }
  
    signupForm.onsubmit = function(event) {
        event.preventDefault();
        const formData = new FormData(signupForm);
        fetch('register.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Message de débogage
            if (data.includes("Inscription réussie")) {
                signupSection.style.display = "none";
                // Afficher la pop-up d'inscription réussie
                alert("Inscription réussie !");
            } else {
                alert("Échec de l'inscription. Veuillez réessayer.");
            }
        })
        .catch(error => console.error('Erreur:', error));
    }
  
    authForm.onsubmit = function(event) {
        event.preventDefault();
        const formData = new FormData(authForm);
        fetch('login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Message de débogage
            if (data.includes("Connexion réussie")) {
                authSection.style.display = "none";
                // Afficher la pop-up de connexion réussie
                alert("Connexion réussie !");
                // Supprimer le bouton de connexion du header
                headerLogin.style.display = "none";
            } else {
                alert("Échec de l'authentification. Veuillez réessayer.");
            }
        })
        .catch(error => console.error('Erreur:', error));
    }
  

   
});
