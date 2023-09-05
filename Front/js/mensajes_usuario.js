document.addEventListener("DOMContentLoaded", function () {
    const userList = document.getElementById("user-list");
    const messageList = document.getElementById("message-list");
    const conversationCard = document.getElementById("conversation-card");
    const messageForm = document.getElementById("message-form");
  
    const conversaciones = {
      usuario1: ["Hola, ¿cómo estás?", "¡Estoy bien, gracias!", "¿Qué has estado haciendo últimamente?"],
      usuario2: ["Hola, ¿qué tal?", "¡Hola! Estoy ocupado trabajando en un proyecto."],
    };
  
    userList.addEventListener("click", function (event) {
      if (event.target.tagName === "LI") {
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
        conversationCard.querySelector(".card-header").textContent = `Conversación con ${selectedUser}`;
        event.target.classList.add("active");
      }
    });
  
    messageForm.addEventListener("submit", function (event) {
      event.preventDefault();
      const messageInput = messageForm.querySelector(".form-control");
      const message = messageInput.value.trim();
      if (message !== "") {
        const listItem = document.createElement("li");
        listItem.classList.add("list-group-item");
        listItem.textContent = message;
        messageList.appendChild(listItem);
        messageInput.value = "";
      }
    });
  });