
const listImage = document.querySelector('.swiper-wrapper');

const imgs = document.querySelectorAll('.swiper-slide img');
let current = 0;
const paginationTotalElement = document.querySelector('.swiper-pagination-total');
if (paginationTotalElement) {
    paginationTotalElement.innerHTML = imgs.length;
} else {
    console.log('Element with class .swiper-pagination-total not found.');
}
setInterval(() => {
    
    if(current == imgs.length){
        current = 0;
    }
    let width = imgs[0].width;
    document.querySelector('.swiper-pagination-current').innerHTML = current + 1;
    listImage.style.transform = `translateX(-${width * 1 * current}px)`;
    current++;
}, 6000)

document.querySelector('.swiper-button-prev').addEventListener('click', () => {
    if(current > 0){
        current--;
    } else {
        current = imgs.length - 1;
    }
    let width = imgs[0].width;
    document.querySelector('.swiper-pagination-current').innerHTML = current + 1;
    listImage.style.transform = `translateX(-${width * 1 * current}px)`;
})

document.querySelector('.swiper-button-next').addEventListener('click', () => {
    
    let width = imgs[0].width;
    document.querySelector('.swiper-pagination-current').innerHTML = current + 1;
    listImage.style.transform = `translateX(-${width * 1 * current}px)`;
    if(current < imgs.length - 1){
        current++;
    } else {
        current = 0;
    }
})

