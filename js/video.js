window.onload =  function videos() {

  // Video
  var video = document.getElementById("video");
  // Buttons
  var playButton = document.getElementById("play-pause");

// Event listener for the play/pause button
playButton.addEventListener("click", function() {
  if (video.paused == true) {
    // Play the video
    video.play();

    // Update the button text to 'Pause'
    playButton.innerHTML = "Pause";
  } else {
    // Pause the video
    video.pause();

    // Update the button text to 'Play'
    playButton.innerHTML = "Play";
  }
});





 
}