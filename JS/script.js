//--Declaration d'une variable const--

/*const toggler = document.querySelector(".btn");
toggler.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});
*/



/**G*/

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
registerLink.addEventListener('click', ()=> {
   wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
   wrapper.classList.remove('active');
});
/*G*/