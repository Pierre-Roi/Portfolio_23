var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 10) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

/*** */
let passwordInput = document.querySelector('#passwordInput input[type="password"]');
    let passwordStrength= document.getElementById('passwordStrength');
    let poor = document.querySelector('#passwordStrength #poor');
    let weak = document.querySelector('#passwordStrength #weak');
    let strong = document.querySelector('#passwordStrength #strong');
    let passwordInfo = document.getElementById('passwordInfo');
  
    let poorRegExp = /[a-z]/;
    let weakRegExp = /(?=.*?[0-9])/;;
    let strongRegExp = /(?=.*?[#?!@$%^&*-])/;
    let whitespaceRegExp = /^$|\s+/;


    passwordInput.oninput= function(){
   
         let passwordValue= passwordInput.value;
         let passwordLength= passwordValue.length;

         let poorPassword= passwordValue.match(poorRegExp);
         let weakPassword= passwordValue.match(weakRegExp);
         let strongPassword= passwordValue.match(strongRegExp);
         let whitespace= passwordValue.match(whitespaceRegExp);

 if(passwordValue != ""){

     passwordStrength.style.display = "block";
     passwordStrength.style.display = "flex";
     passwordInfo.style.display = "block";
     passwordInfo.style.color = "black";

     if(whitespace)
     {
      passwordInfo.textContent = "Les espaces ne sont pas autorisés";
     }else{
     poorPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword);
     weakPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword);
     strongPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword);
    }

     
   }else{
     
     passwordStrength.style.display = "none";
     passwordInfo.style.display = "none";
    
   }
 }

function poorPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword){

      if(passwordLength <= 3 && (poorPassword || weakPassword || strongPassword))
        {
       poor.classList.add("active");
       passwordInfo.style.display = "block";
       passwordInfo.style.color = "red";
       passwordInfo.textContent = "Votre mot de passe est trop faible";
          
        }
}

function weakPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword){
   if(passwordLength>= 4 && poorPassword && (weakPassword || strongPassword))
    {
     weak.classList.add("active");
     passwordInfo.textContent = "Votre mot de passe est moins fort, ajouter un caratère spécial (#,?,!,@,$,%,^,&,*,-)";
     passwordInfo.style.color = "orange";
   
   }else{
     weak.classList.remove("active");
     
   }
}

function strongPasswordStrength(passwordLength, poorPassword, weakPassword, strongPassword){

  if(passwordLength >= 6 && (poorPassword && weakPassword) && strongPassword)
    {
     poor.classList.add("active");
     weak.classList.add("active");
     strong.classList.add("active");
     passwordInfo.textContent = "Votre mot de passe est fort";
     passwordInfo.style.color = "green";
   }else{
     strong.classList.remove("active");
     
   }
}

let showHide = document.querySelector('#passwordInput #showHide');

 showHide.onclick = function(){
      showHidePassword()
}

function showHidePassword(){
  if(passwordInput.type == "password"){
    passwordInput.type = "text";
    showHide.textContent = "Cacher";
    showHide.style.color = "green";
  }else{
    passwordInput.type = "password";
    showHide.textContent = "Voir";
    showHide.style.color = "red";
  }
}