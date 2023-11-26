
var modal = document.querySelector('.modal')
var modalBody = document.querySelector('.modal__body')
var modalOverlay = document.querySelector('.modal__overlay')
var authForm = document.querySelector('.auth-form')
var cartAdd = document.querySelectorAll('.btn-cartAdd')
var modalCartAdd = document.querySelector('.Cart-add')
function openRegister(){
    modal.classList.add('open');
    modalBody.classList.add('open1')
    authForm.classList.add('open1');
    authFormLogin.classList.remove('open1')
}
var modal1 = document.querySelector('#register')
modal1.addEventListener('click',openRegister);

var authFormLogin = document.querySelector('.auth-form__login')
function openLogin(){
    modal.classList.add('open');
    modalBody.classList.add('open1')
    authFormLogin.classList.add('open1')
    authForm.classList.remove('open1')
}
var login = document.querySelector('.log-in')
login.addEventListener('click', openLogin)


function close(){
    modal.classList.remove('open')
    modalCartAdd.classList.remove('open1')
    modalBody.classList.remove('open1')
    authForm.classList.remove('open1')
    authFormLogin.classList.remove('open1')
}
function openCart(){
    modal.classList.add('open');
    modalCartAdd.classList.add('open1')
}
var back = document.querySelectorAll('.close')
for(const btns of back){
    btns.addEventListener('click',close)
}
var tranform = document.querySelector('.switch1')
var tranform2 = document.querySelector('.switch2')
for(let i  of cartAdd){
    i.addEventListener('click', openCart)
}
tranform.addEventListener('click', openLogin)
tranform2.addEventListener('click',openRegister)
modalOverlay.addEventListener('click',close)
var openNav = document.querySelector('.nav-mobile')
var navMobile = document.querySelector('.footer-nav-mobile')
var hideNav = document.querySelector('.footer-nav-overlay')
var openSp = document.querySelector('.list-sp')
var listItem = document.querySelector('.sub-list-item-mobile')
openNav.onclick= function(){
    navMobile.classList.add('open1')
    hideNav.classList.add('open1')
}
hideNav.onclick =function(){
    navMobile.classList.remove('open1')
    hideNav.classList.remove('open1')
}
openSp.onclick = function () {
    listItem.classList.toggle('open1')
}

var imgBanner = document.querySelectorAll('.banner img')
const banner = document.querySelector('.banner')
let imgNumber = imgBanner.length
let index = 0
imgBanner.forEach(function(image, index){  
    image.style.left = index*100 +"%"
})
function imgSlider(){
    index++;
    if(index >= imgNumber){
        index = 0
    }
    banner.style.left = "-" + index*100+"%"
}
setInterval(imgSlider, 3000)

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
document.addEventListener('DOMContentLoaded', function(){
    var header = document.querySelector('.footer-nav')
    window.addEventListener('scroll',function(){
        if(window.scrollY >80){
            header.style.top = '0';
        }
        else
        header.style.top ='116px'
    })
})
 

document.addEventListener('DOMContentLoaded', function () {
    // Lấy các phần tử cần thiết
    var idRange = document.getElementById('idRange');
    var priceForm = document.getElementById('price-form');

    // Thêm sự kiện input cho thanh trượt
    idRange.addEventListener('input', function () {
        // Hiển thị giá trị của thanh trượt
        var inputValue = parseFloat(idRange.value);
        if (!isNaN(inputValue)) {
            // Định dạng giá trị số với ký tự phân cách hàng nghìn và hiển thị kết quả
            var formattedValue = inputValue.toLocaleString();
            priceForm.textContent =  idRange.value;
            priceForm.textContent = formattedValue + 'đ';
            
    }
});
});
const $ = document.querySelector.bind(document);
var catgItemLink = document.querySelectorAll('.category-item')
for(let i of catgItemLink){
    
    i.onclick = function () {
       let C = this.parentElement;
       let g = [].indexOf.call(C.children,this);
       sessionStorage.setItem('at', g) = i
    }
}
// var subListIt = document.querySelectorAll('.sub-list-item');
// for(let a of subListIt){
//     a.onclick =function(){
//         for(let i of catgItemLink){
//             i.classList.add('active')
//         }
//     }
// }
var pageActive = document.querySelectorAll('.pagination-item__link')
for(let i of pageActive){
    console.log(i.parentElement)
    i.onclick = function () {
       let C = this.parentElement;
       let g = [].indexOf.call(C.children,this);
       sessionStorage.setItem('at', g);
    }
}
