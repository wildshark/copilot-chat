function appendMessageToChatbox(sender, message) {
    const chatbox = document.getElementById('chatbox');
    const messageDiv = document.createElement('div');
    messageDiv.innerHTML = `<strong>${sender}: </strong>${message}`;
    chatbox.appendChild(messageDiv);
}

function sendMessage() {
    const userInput = document.getElementById('userInput').value;
    appendMessageToChatbox('You', userInput);

    // Make an AJAX call to the API
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'api.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            appendMessageToChatbox('Bot', response.message);
        } else {
            console.error('Error:', xhr.status);
        }
    };
    xhr.send(`user_input=${encodeURIComponent(userInput)}`);
}
