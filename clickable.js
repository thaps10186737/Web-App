
function toRegister(){

//document.getElementById("frame").location = src = "login.php"

document.getElementById('frame').src = "login.php"

//window.location = src = "http://localhost/WIL%20Project/homepage.php";


}

function slide(direction) {
    const slider = document.querySelector('.slider');
    const images = slider.querySelectorAll('img');
    const totalImages = images.length;

    currentIndex += direction;

    // Loop around if we reach either end
    if (currentIndex >= totalImages) {
        currentIndex = 0;
    } else if (currentIndex < 0) {
        currentIndex = totalImages - 1;
    }

    const translateX = -currentIndex * 100;
    slider.style.transform = `translateX(${translateX}%)`;
}