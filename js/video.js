document.getElementById("videoPlayer").volume = 0.5;
document.getElementById("videoThumbnail").onclick = function () {
  document.getElementById("videoPlayer").style.display = "block";
  document.getElementById("videoPlayer").play();
  document.querySelector(".video-container").style.display = "none";
};

document.getElementById("play-button").onclick = function () {
  document.getElementById("videoPlayer").style.display = "block";
  document.getElementById("videoPlayer").play();
  document.querySelector(".video-container").style.display = "none";
};
