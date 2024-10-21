try {
  const videoPlayer = document.getElementById("videoPlayer");
  const videoThumbnail = document.getElementById("videoThumbnail");
  const playButton = document.getElementById("play-button");

  videoPlayer.volume = 0.5;

  videoThumbnail.onclick = function () {
    document.getElementById("videoPlayer").style.display = "block";
    document.getElementById("videoPlayer").play();
    document.querySelector(".video-container").style.display = "none";
  };

  playButton.onclick = function () {
    document.getElementById("videoPlayer").style.display = "block";
    document.getElementById("videoPlayer").play();
    document.querySelector(".video-container").style.display = "none";
  };
} catch (error) {
  console.log("");
}
