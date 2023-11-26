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

// ValidateForm
function validator(a){
    var selectorRules = {

    }
    function validate(inputElement , rule){
        var errorMessage = rule.test(inputElement.value)
         var errorElement = inputElement.parentElement.querySelector('.form-message')
             var rules = selectorRules[rule.selector]
             for(var i =0 ; i <rules.length; i++){
                errorMessage  = rules[i](inputElement.value)
                if(errorMessage) break
             }
        if(errorMessage){
            errorElement.innerText = errorMessage
            inputElement.parentElement.classList.add('invalid')
        }
        else{
            errorElement.innerText =" ";
            inputElement.parentElement.classList.remove('invalid')
        }
        return !errorMessage
    }

    var formElement = document.querySelector(a.form) 
    
    if(formElement){
       
    }
    
    if(formElement){
        formElement.onsubmit = function(){
         
            var isFormValid = true;
            a.rules.forEach(function(rule){
            var inputElement = formElement.querySelector(rule.selector)
            var isValid = validate(inputElement, rule)
            if (!isValid) {
                isFormValid = false
            }
                
            })
            if(isFormValid){
                if( typeof a.onsubmit === 'function'){
                    var enableInput = formElement.querySelectorAll('[name]:not([disabled])')
                    var formValues = Array.from(enableInput).reduce(function(values, input){
                        return (values[input.name] = input.value) && values
                    },{})
                    console.log(formValues)
                }else{
                    formElement.submit();
                }
            }
        }
        a.rules.forEach( (rule) => {
            //lưu lại các rules trong mỗi input
            
            if (Array.isArray(selectorRules[rule.selector])){
                selectorRules[rule.selector].push(rule.test)
            }else{
                selectorRules[rule.selector] = [rule.test]
            }
            var inputElement = formElement.querySelector(rule.selector)
           if(inputElement){
            // xử lý trường hợp ND blur ra ngoài
            inputElement.onblur = function(){
                validate(inputElement,rule)
            }
            // xử lý mỗi khi người dùng nhập vào input
            inputElement.oninput = function(){
         var errorElement = inputElement.parentElement.querySelector('.form-message')
                errorElement.innerText =" ";
                inputElement.parentElement.classList.remove('invalid')
            }
           }
        });
    }
    console.log(selectorRules)
}

validator.isRequired = function(selector, message){
    return {
        selector: selector,
        test: function( value ){
            return value.trim() ? undefined: message || "vui lòng nhập thông tin đăng nhập"
        }
    }
}
validator.isEmail = function(selector, message){
    return {
        selector: selector,
        test: function( value ){
            var regex =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined: message ||"vui lòng nhập email"
        }
    }
}
validator.minlength = function(selector, min, message){
    return {
        selector: selector,
        test: function( value ){
            return value.length >=min ? undefined : message||`vui lòng nhập đủ ${min} ký tự`
        }
    }
}
validator.isConfirmed= function(selector, getConfirvalue){
    return {
        selector:selector,
        test: function(value){
            return value === getConfirvalue() ? undefined : "vui lòng nhập đúng giá trị"
        }
    }
}
validator(
    {
        form: '#form-1',
        rules:[
            validator.isRequired('#fullname'),
            validator.isRequired('#email'),
            validator.isEmail('#email' ),
            validator.minlength('#password', 6),
                validator.isConfirmed('#password_confirmation', function(){
                return document.querySelector('#form-1 #password').value
            })
        ],
        onsubmit: function(data){
            //Call API
            console.log(data)
        }

    }
)