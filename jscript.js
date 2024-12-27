(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {

          if (event.target.classList.contains("isRegester")) {

            regester();
          }

          if (event.target.classList.contains("isLogin")) {
            login();
          }

          event.preventDefault();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

document.querySelector(".show-pass").addEventListener("click", (e) => {
  let inpt = e.target.parentElement.parentElement.querySelector("input");

  // <i class="fa-regular fa-eye"></i>

  if (inpt.type == "text") {
    inpt.type = "password";
    e.target.classList.remove("fa-solid", "fa-eye-slash");
    e.target.classList.add("fa-regular", "fa-eye");
  } else {
    inpt.type = "text";
    e.target.classList.add("fa-solid", "fa-eye-slash");
    e.target.classList.remove("fa-regular", "fa-eye");
  }
});

function regester() {
  let fname = document.querySelector(".fname-regester").value;
  let lname = document.querySelector(".lname-regester").value;
  let email = document.querySelector(".email-regester").value;
  let pass = document.querySelector(".pass-regester").value;
  let img = document.querySelector(".pass-regester").value;
  // let img = document.querySelector(".img-regester").value;
    

  nameComplt = fname + " " + lname;

  fetch("connect.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: email,
      pass: pass,
      nameComplt:nameComplt,
      img:img,
      form:"regester",
    }),
  })
    .then((response) => {
      // Vérifier si la réponse est OK (code 200)
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json(); // Convertir la réponse en JSON
    })
    .then((data) => {
      console.log("Réponse du serveur :", data);
      let divAlert = document.querySelector(".msg-fetch div");
      divAlert.parentElement.classList.remove("d-none");
      divAlert.innerHTML = data.message;
    })
    .catch((error) => {
      console.error("Erreur lors de la requête fetch :", error);
    });
}

function login() {
  let email = document.querySelector(".email-login").value;
  let pass = document.querySelector(".password-login").value; 
  console.log(
    "-login--------" ,
    email,
    pass, 
  );

  fetch("connect.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: email,
      pass: pass, 
      form: "login",
    }),
  })
    .then((response) => {
      // Vérifier si la réponse est OK (code 200)
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json(); // Convertir la réponse en JSON
    })
    .then((data) => {
      console.log("Réponse du serveur :", data);
      let divAlert = document.querySelector(".msg-fetch div");
      divAlert.parentElement.classList.remove("d-none");
      divAlert.innerHTML = data.message;
    })
    .catch((error) => {
      console.error("Erreur lors de la requête fetch :", error);
    });
}
 










function regester1() { 
  let fname = document.querySelector(".fname-regester").value;
  let lname = document.querySelector(".lname-regester").value;
  let email = document.querySelector(".email-regester").value;
  let pass = document.querySelector(".pass-regester").value;
  let img = document.querySelector(".img-regester").value; 
  console.log(
    "-connect--------",
    fname,
    lname,
    "---------",
    email,
    pass,
    "---------",
    img
  );
  nameComplt = fname + " " + lname;

  fetch("connect.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: email,
      pass: pass,
      name: nameComplt,
      img: img,
      form: "regester",
    }),
  })
    .then((response) => {
      // Vérifier si la réponse est OK (code 200)
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json(); // Convertir la réponse en JSON
    })
    .then((data) => {
      console.log("Réponse du serveur :", data);
      let divAlert = document.querySelector(".msg-fetch div");
      divAlert.parentElement.classList.remove("d-none");
      divAlert.innerHTML = data.message;
    })
    .catch((error) => {
      console.error("Erreur lors de la requête fetch :", error);
    });
}
 
