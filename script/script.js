
    function toggleChat() {
        var chatbox = document.getElementById('chatbox');
        if (chatbox.style.display === 'none' || chatbox.style.display === '') {
            chatbox.style.display = 'block';
        } else {
            chatbox.style.display = 'none';
        }
    }

