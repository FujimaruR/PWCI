document.addEventListener("DOMContentLoaded", function () {
  const userList = document.getElementById("user-list");
  const messageList = document.getElementById("message-list");
  const conversationCard = document.getElementById("conversation-card");
  const messageForm = document.getElementById("message-form");

  const conversaciones = {
    usuario1: ["Hola, ¿cómo estás?", "¡Estoy bien, gracias!", "¿Qué has estado haciendo últimamente?"],
    usuario2: ["Hola, ¿qué tal?", "¡Hola! Estoy ocupado trabajando en un proyecto."],
    // Agrega más conversaciones y mensajes aquí
  };

  userList.addEventListener("click", function (event) {
    if (event.target.tagName === "LI") {
      // Remover la clase "active" de todos los elementos en la lista de usuarios
      const userListItems = userList.querySelectorAll(".list-group-item");
      userListItems.forEach(item => item.classList.remove("active"));

      event.target.classList.add("active", "list-group-item-danger");

      messageList.innerHTML = "";

      const selectedUser = event.target.getAttribute("data-user");

      const mensajes = conversaciones[selectedUser];
      mensajes.forEach(mensaje => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-group-item");
        listItem.textContent = mensaje;
        messageList.appendChild(listItem);
      });
      // Aquí podrías cargar los mensajes del usuario seleccionado y mostrarlos en messageList
      conversationCard.querySelector(".card-header").textContent = `Conversación con ${selectedUser}`;
      // Agregar la clase "active" al usuario seleccionado
      event.target.classList.add("active");
    }
  });

  messageForm.addEventListener("submit", function (event) {
    event.preventDefault();
    // Aquí podrías agregar la lógica para enviar mensajes
    const messageInput = messageForm.querySelector(".form-control");
    const message = messageInput.value.trim();
    if (message !== "") {
      // Aquí podrías agregar el nuevo mensaje a messageList
      const listItem = document.createElement("li");
      listItem.classList.add("list-group-item");
      listItem.textContent = message;
      messageList.appendChild(listItem);
      messageInput.value = "";
    }
  });
});