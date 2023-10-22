const $$ = document.querySelectorAll.bind(document)
const $ = document.querySelector.bind(document)

var modal = document.querySelector('.modal')
var modalOverlay = document.querySelector('.modal__overlay')
var authForm = document.querySelector('.auth-form')
function openRegister(){
    modal.classList.add('open');
    authForm.classList.add('open1');
    authFormLogin.classList.remove('open1')
}
var modal1 = document.querySelector('#register')
modal1.addEventListener('click',openRegister);

var authFormLogin = document.querySelector('.auth-form__login')
function openLogin(){
    modal.classList.add('open');
    authFormLogin.classList.add('open1')
    authForm.classList.remove('open1')
}
var login = document.querySelector('.log-in')
login.addEventListener('click', openLogin)


function close(){
    modal.classList.remove('open')
    authForm.classList.remove('open1')
    authFormLogin.classList.remove('open1')
}
var back = document.querySelectorAll('.close')
for(const btns of back){
    btns.addEventListener('click',close)
}
var tranform = document.querySelector('.switch1')
var tranform2 = document.querySelector('.switch2')

tranform.addEventListener('click', openLogin)
tranform2.addEventListener('click',openRegister)
modalOverlay.addEventListener('click',close)

var ahistory = document.querySelector('.header-search__input');
ahistory.addEventListener('click', openHistory)
var searchHistory = document.querySelector('.header-search__history') 
function openHistory(){
    searchHistory.classList.toggle('open1');
}
// var buyBtns =document.getElementById('register')
// var modal = document.querySelector('.modal')
// var modalclose =document.querySelector('.js-modal-close')
// var modalcontainer = document.querySelector('.js-modal-container')

// function showBuyTickets(){
//     modal.classList.add('open')
// }
// function hideBuyTickets(){
//     modal.classList.remove('open') 
// }
//  buyBtns.onclick=function(e){
//     return modal.classList.add('open')
//  }
// modalclose.addEventListener('click', hideBuyTickets)

// modal.addEventListener('click',hideBuyTickets)
// modalcontainer.addEventListener('click', function(event){
//     event.stopPropagation()
// })
var ratings =document.querySelectorAll('.product-rating')
    ratings.forEach((star) => {
            let S1 =  star.querySelectorAll('i')
            S1.forEach((starcl) => {
                starcl.addEventListener('click', function(){
                    let index = Array.prototype.indexOf.call(star.children, starcl)
                    let sds = star.querySelectorAll('.star-gold')
                    if(index+1 == sds.length ){
                        sds.forEach((s) => {
                            s.classList.remove('star-gold')
                        })
                    
                    }
                    else{
                         for(let j = index; S1.length > j ; j++ ){
                            S1[j].classList.remove('star-gold')
                   }
                  
                         for( let i = 0; index >= i ; i++){
                             S1[i].classList.add('star-gold');
                    }

                }
                   
                })
            })
        })





var heart1 = document.querySelectorAll('.product-item-like')    
// heart1.forEach((h1) => {
//     h1.addEventListener('click', function(){
//         if(h1.classList.contains('show')){
//             h1.classList.remove('show')
//         }
//         else
//         h1.classList.add('show');
//     } )
// })
for(let h1 of heart1){
   h1.onclick = function(){
    if(h1.classList.contains('show')){
        h1.classList.remove('show')
        }
    else
    h1.classList.add('show');
   }
}
const openHeaderSearch = $('.open-header-search')
const headerSearch = document.querySelector('.header-search')
openHeaderSearch.addEventListener('click', function(){
    headerSearch.classList.toggle('open')
})
const headerCart = $('.header-cart')
const cartList = $('.cart-list2')
headerCart.onclick = function(){
    cartList.classList.toggle('open1')
}


const listItem = document.querySelectorAll('.short-bar-item');
console.log(listItem)
const tabsActive = $('.short-bar-item.active2')
const line = $('.line')
console.log(line)
line.style.left = tabsActive.offsetLeft + 'px'
line.style.width = tabsActive.offsetWidth + 'px'
listItem.forEach((tabs, index) => {
    tabs.onclick = function(){
    $('.short-bar-item.active2').classList.remove('active2');
    this.classList.add('active2')
    line.style.left = this.offsetLeft + 'px'
    line.style.width = this.offsetWidth + 'px'
}
})

function addHoverEffect(){
    cartList.style.display = "block";
}
function removeHoverEffect(){
    cartList.style.display = "none";

}
