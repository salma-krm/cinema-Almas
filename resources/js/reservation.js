

    document.addEventListener('DOMContentLoaded', function() {
        var videoUrl = "{{ $film->video }}"; // From Blade variable
        var youtubePlayer = document.getElementById('youtube-player');
        var localPlayer = document.getElementById('movie-trailer');

        // Check if video URL is a YouTube URL
        var isYoutube = videoUrl.includes('youtube.com');
        if (isYoutube) {
            // Extract YouTube ID
            var youtubeId = videoUrl.match(/(?:v=|\/)([0-9A-Za-z_-]{11})/);
            if (youtubeId && youtubeId[1]) {
                youtubePlayer.src = "https://www.youtube.com/embed/" + youtubeId[1];
                youtubePlayer.style.display = 'block';  // Show the iframe
            }
        } else if (videoUrl) {
            localPlayer.style.display = 'block';  // Show the video player
        }
    });


