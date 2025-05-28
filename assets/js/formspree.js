
var form = document.getElementById("contact-form");


async function handleSubmit(event) {
event.preventDefault();
var status = document.getElementById("contact-form-status");
var data = new FormData(event.target);
fetch(event.target.action, {
    method: form.method,
    body: data,
    headers: {
        'Accept': 'application/json'
    }
}).then(response => {
    status.style.display="block";
    status.style.background="linear-gradient(135deg, #e3f2fd, #bbdefb)";
    if (response.ok) {
     
    status.innerHTML = "Gracias por contactar. ¡En breve le responderemos!";
    form.reset()
    } else {
    response.json().then(data => {
        status.style.background="linear-gradient(135deg, #FDD272, #E9B3E9)";
        if (Object.hasOwn(data, 'errors')) {
        status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
        } else {
        status.innerHTML = "Vaya! Ha ocurrido un problema al enviar el formulario"
        }
    })
    }
}).catch(error => {
    status.innerHTML = "Vaya! Ha ocurrido un problema al enviar el formulario"
});
}
form.addEventListener("submit", handleSubmit)
