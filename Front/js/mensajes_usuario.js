document.addEventListener("DOMContentLoaded", function () {
  const userList = document.getElementById("user-list");
  const messageList = document.getElementById("message-list");
  const messageForm = document.getElementById("message-form");

  userList.addEventListener("click", function (event) {
    if (event.target.tagName === "LI") {
      const selectedUser = event.target.getAttribute("data-user");

      var modal = document.getElementById('idchatForm');
      modal.value = selectedUser;

      // Llamada a la función para obtener mensajes
      obtenerConversacion(selectedUser);
    }
  });

  function obtenerConversacion(idConversacion) {
    fetch(`../BackEnd/obtenerMensajes.php?id_conversacion=${idConversacion}`)
      .then(response => response.json())
      .then(mensajes => mostrarMensajes(mensajes))
      .catch(error => console.error('Error al obtener mensajes:', error));
  }

  function mostrarMensajes(mensajes) {
    // Limpiar la lista de mensajes
    messageList.innerHTML = "";

    // Iterar sobre los mensajes y agregarlos a la lista de mensajes
    mensajes.forEach(mensaje => {
      const listItem = document.createElement("li");
      listItem.classList.add("list-group-item");
      listItem.textContent = mensaje.mensaje;
      messageList.appendChild(listItem);
    });
  }

  messageList.addEventListener("click", function (event) {
    if (event.target.tagName === "LI") {
      const selectedConversacion = event.target.getAttribute("data-conversacion");
      obtenerMensajes(selectedConversacion);
    }
  });

  function obtenerMensajes(idConversacion) {
    // Realiza una solicitud AJAX para obtener los mensajes de la conversación seleccionada
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          const mensajes = JSON.parse(xhr.responseText);
          mostrarMensajes(mensajes);
        } else {
          console.error('Error al obtener mensajes:', xhr.status);
        }
      }
    };

    function mostrarMensajes(mensajes) {
      // Limpiar la lista de mensajes
      messageList.innerHTML = "";

      // Iterar sobre los mensajes y agregarlos a la lista de mensajes
      mensajes.forEach(mensaje => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-group-item");
        listItem.textContent = mensaje.mensaje;
        messageList.appendChild(listItem);
      });
    }
    // Configura y envía la solicitud
    xhr.open('GET', '../BackEnd/obtenerMensajes.php?id_conversacion=' + idConversacion, true);
    xhr.send();
  }

  messageForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const messageInput = document.getElementById("mensajeForm");
    const idChatInput = document.getElementById("idchatForm");
    const idEmisorInput = document.getElementById("idemisorForm");

    const message = messageInput.value.trim();
    const idChat = idChatInput.value.trim();
    const idEmisor = idEmisorInput.value.trim();

    if (message !== "") {
      $.ajax({
        type: "POST",
        url: "../BackEnd/enviarMensaje.php",
        data: {
          mensaje: message,
          id_chat: idChat,
          id_emisor: idEmisor,
        },
        success: function (response) {
          console.log(response);

          obtenerMensajes(idChat);
        },
        error: function (error) {
          console.error('Error al enviar mensaje:', error);
        }
      });
      messageInput.value = "";
    }
  });
});