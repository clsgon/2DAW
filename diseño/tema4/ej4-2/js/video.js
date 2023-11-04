let video = document.getElementById("video");
let progress = document.getElementById("progress");

function Begin(){
    video.play();
}

function Pause(){
    video.pause();
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