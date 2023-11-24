// const listItem = document.querySelectorAll('.nav-admin-item');
// console.log(listItem)
// const tabsActive = $('.short-bar-item.active2')
// const line = $('.line')
// console.log(line)
// line.style.left = tabsActive.offsetLeft + 'px'
// line.style.width = tabsActive.offsetWidth + 'px'
// listItem.forEach((tabs, index) => {
//     tabs.onclick = function(){
//     $('.short-bar-item.active2').classList.remove('active2');
//     this.classList.add('active2')
//     line.style.left = this.offsetLeft + 'px'
//     line.style.width = this.offsetWidth + 'px'
// }
// })

var $ = document.querySelector.bind(document)
 const listItem = document.querySelectorAll('.nav-admin-item')
 const tabsActive = $('.nav-admin-item.active')
 listItem.forEach(function(tabs){
    tabs.onclick = function(){
        let b = this.parentElement;
        let g = [].indexOf.call(b.children, this);
        sessionStorage.setItem('at', g);
    }
   
 })



 function DOAN__doi_anh(id_file,id_preview){
    let file = document.getElementById(id_file);
    let ava = document.getElementById(id_preview);
    file.click();
    file.onchange=()=>{
        var oFReader = new FileReader();
        oFReader.readAsDataURL(file.files[0]);

        oFReader.onload = function (oFREvent) {
            ava.src = oFREvent.target.result;
        };
    }
}