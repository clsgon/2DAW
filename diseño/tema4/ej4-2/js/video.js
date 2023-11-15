let video = document.getElementById("video");
let progress = document.getElementById("progress");
let volume = document.getElementById("volume");

function Begin(){
    video.play();
}

function Pause(){
    video.pause();
}

function FullScreen(){
    video.requestFullscreen();
}

function Start()
{
    video.load();
}

function MoveForward(){
    video.currentTime = video.currentTime + 10;
}

function MoveBackward(){
    video.currentTime = video.currentTime - 10;
}

function End() {
    video.currentTime = video.duration;
}

volume.addEventListener('input', () => video.volume = volume.value);
progress.addEventListener('input', () => progress.value = video.currentTime);