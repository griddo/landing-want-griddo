document.addEventListener("DOMContentLoaded", function () {
  function handleFormSubmit(form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const data = new FormData(form);

      fetch(form.action, {
        method: "POST",
        body: data,
        headers: {
          Accept: "application/json",
        },
      })
        .then((response) => {
          if (response.ok) {
            form.reset();
            window.location.href = "thanks.html";
          } else {
            window.location.href = "thanks.html";
            // alert("Error al enviar el formulario. Inténtalo más tarde.");
          }
        })
        .catch((error) => {
          console.error("Formulario no enviado:", error);
          window.location.href = "thanks.html";
          // alert("Ocurrió un error al enviar el formulario.");
        });
    });
  }

  const contactForm = document.getElementById("contact");
  const webinarForm = document.getElementById("webinar");

  if (!contactForm || !webinarForm) {
    console.error("Formulario de contacto o webinar no encontrado.");
    return;
  }

  handleFormSubmit(contactForm);
  handleFormSubmit(webinarForm);
});
