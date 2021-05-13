// Slider inside page
// Здесь находим все нужные элементы в inside page
let sliderImages = document.getElementById('sliderImages');
let sliderImg = sliderImages.querySelectorAll('img');
let sliderPagination = document.getElementById('sliderPag');
let sliderButton = document.getElementById('sliderBtn');
let sliderBtn = sliderButton.querySelectorAll('button');
// Создаем коунтер который будет отсчитывать и от которого будет зависеть сам салйдер
let sliderCount = 0;
// Создаем li внутри тэга <ul class="sliderDots" id="sliderPag"></ul>
for (let i = 0; i < sliderImg.length; i++) {
    sliderPagination.innerHTML += `<li>•</li>`;
}
// Распознаем li
let sliderLi = sliderPagination.querySelectorAll('li');
// Добавляем первому элементу li класс active
sliderLi[sliderCount].classList.add('active');
// Клик на нулевой элемент кнопки
sliderBtn[0].addEventListener('click', function() {
    // Так как мы нажимаем левую часть логично что от sliderCount мы отнимаем 1
    sliderCount -= 1;
    if (sliderCount <= 0) {
        sliderCount = sliderImg.length - 1
    }
    // Вызываем функцию которая уберет все ненужные элементы
    sliderImgHidden()
    // Нужны элементы показываем
    sliderImg[sliderCount].classList.remove('hidden');
    sliderLi[sliderCount].classList.add('active');
})
sliderBtn[1].addEventListener('click', function() {
    // Анологично верхнему элементу только здесь button next
    sliderCount += 1;
    if (sliderCount === sliderImg.length) {
        sliderCount = 0
    }
    // Вызываем функцию которая уберет все ненужные элементы
    sliderImgHidden()
    // Нужны элементы показываем
    sliderImg[sliderCount].classList.remove('hidden');
    sliderLi[sliderCount].classList.add('active');
})
// Пагинация при клике должна меняться картинка
for ( let j = 0; j < sliderImg.length; j++) {
    sliderLi[j].addEventListener('click', function() {
        sliderImgHidden();
        // Меняем значение sliderCount так как программа должна понять что вы изменили картинку
        sliderCount = j;
        // Нужны элементы показываем
        sliderImg[j].classList.remove('hidden');
        sliderLi[j].classList.add('active');
    })
}
function sliderImgHidden() {
    for ( let i = 0; i < sliderImg.length; i++ ) {
        // убираем все картинки
        sliderImg[i].classList.add('hidden');
        // убираем класс active со всех li элементов слайдера
        sliderLi[i].classList.remove('active');
    }
}