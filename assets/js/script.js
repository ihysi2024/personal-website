function openModal(title, content, videoSrc) {
    const modal = document.getElementById('myModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');
    const modalVideo = document.getElementById('modalVideo');

    // Set modal title and content
    modalTitle.innerText = title;
    modalContent.innerText = content;
    
    // Set video source and play
    modalVideo.src = videoSrc;
    modalVideo.load();
    modalVideo.play().catch(error => {
        console.error('Error playing video:', error);
        alert('Failed to load video. Please try again later.');
    });

    // Display the modal
    modal.style.display = 'block';
}

function closeModal() {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
}

document.querySelector('.close').addEventListener('click', closeModal);

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('myModal')) {
        closeModal();
    }
});

