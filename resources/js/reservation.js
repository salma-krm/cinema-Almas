
document.addEventListener('DOMContentLoaded', function() {
    const playButton = document.getElementById('play-button');
    const videoPlayer = document.getElementById('movie-trailer');
    const videoOverlay = document.getElementById('video-overlay');

    playButton.addEventListener('click', function() {
        // Show the video player
        videoPlayer.style.display = 'block';
        
        videoOverlay.style.opacity = '0';
        videoOverlay.style.pointerEvents = 'none';
   
        videoPlayer.play();
    });

   
    videoPlayer.addEventListener('ended', function() {
        
        videoPlayer.style.display = 'none';
       
        videoOverlay.style.opacity = '1';
        videoOverlay.style.pointerEvents = 'auto';
    });
});

