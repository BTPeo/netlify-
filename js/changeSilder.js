
const listImages = document.querySelector('.list-images')
const imgs = listImages.getElementsByTagName('img')
let current = 0
const length = imgs.length
console.log(listImages)
const btnPrev = document.querySelector('.btnPrev')
const btnNext = document.querySelector('.btnNext')


const handleChangeSilde = () => {
    if (current == length - 1) {
        current = 0
        let widthImg = imgs[0].offsetWidth
        listImages.style.transform = `translateX(0px)`;
    }
    else {
        current++
        let widthImg = imgs[0].offsetWidth;
        listImages.style.transform = `translateX(${widthImg * -1 * current}px)`;
    }
}

let handleEventChangeSilde = setInterval(handleChangeSilde, 4000)
btnNext.addEventListener('click', () => {
    clearInterval(handleEventChangeSilde)
    handleChangeSilde()
    handleEventChangeSilde = setInterval(handleChangeSilde, 4000)

})
btnPrev.addEventListener('click', () => {
    clearInterval(handleEventChangeSilde)
    if (current == 0) {
        current = length - 1
        let widthImg = imgs[0].offsetWidth;
        listImages.style.transform = `translateX(${widthImg * -1 * current}px)`;
    }
    else {
        current--
        let widthImg = imgs[0].offsetWidth;
        listImages.style.transform = `translateX(${widthImg * -1 * current}px)`;
    }
    handleEventChangeSilde = setInterval(handleChangeSilde, 4000)

})