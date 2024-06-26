const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const alreadyRegisteredLink = document.querySelector("#already-registered-link");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  document.querySelector('.sign-in-form').classList.remove('active');
  document.querySelector('.sign-up-form').classList.add('active');
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  document.querySelector('.sign-in-form').classList.add('active');
  document.querySelector('.sign-up-form').classList.remove('active');
});

alreadyRegisteredLink.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  document.querySelector('.sign-in-form').classList.add('active');
  document.querySelector('.sign-up-form').classList.remove('active');
});
