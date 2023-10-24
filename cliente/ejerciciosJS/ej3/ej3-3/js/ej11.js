let counter = 0;
let img = new Array("./img/google.png", "./img/youtube.png");

function ChangeImage()
{
    if (counter == 0)
        counter = 1;
    else
        counter = 0;
    document.visor.src = img[counter];
    document.visor.style.width = "25%";
}