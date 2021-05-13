// Фиксированный хедер
window.addEventListener('scroll', function() {
    // Находим Сам id="header"
    let header = document.getElementById('header');
    // pageYOffset позволяет узнать скроллит ли сейчас юзер
    if ( pageYOffset > 150 ) {
        // если юзер прокрутил на больше чем 150px добавляется класс headerfix 
        header.classList.add('headerfix');
    } else {
        header.classList.remove('headerfix');
    }
});

let Header = document.getElementById('header')
let HeaderMobileMenuButton = document.querySelectorAll('button')
let HeaderMobileMenu = document.querySelectorAll('ul')
let HeaderCounter = true;

HeaderMobileMenuButton[0].addEventListener('click', function() {
    if( HeaderCounter === true ) {
        HeaderMobileMenu[0].style.display = 'flex'
        HeaderCounter = false
        HeaderMobileMenuButton[0].innerHTML = '<i class="fas fa-times"></i>'
    } else {
        HeaderMobileMenu[0].style.display = 'none'
        HeaderCounter = true
        HeaderMobileMenuButton[0].innerHTML = '<i class="fas fa-bars"></i>'
    }
})
