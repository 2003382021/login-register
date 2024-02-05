let wrapper = document.querySelector('.wrapper');
let loginLink = document.querySelector('.login-link');
let registerLink = document.querySelector('.reg-link');
let btnpopup = document.querySelector('.loginbtn');
let iconClose = document.querySelector('.icon-close');



loginLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});

btnpopup.addEventListener('click', ()=>{
    wrapper.classList.toggle('active-popup');
});

registerLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});

iconClose.addEventListener('click', ()=>{
    wrapper.classList.remove('active-popup');
});



const app = () =>{
    fetch('products.json')
    .then(response => response.json())
    .then(data => {
        listProduct = data;
        console.log(listProduct);
    })
}
app()

all.addEventListener('click', (event) => {
    let click = event.target;
    if(click.classList.contains('header')){
        let product_id = position.dataset.id;
        alert(product_id);
    }
}
)




const navigation = document.querySelector('.navbar');
const menu = document.querySelector('.menu');

menu.addEventListener('click', ()=>{
    wrapper.classList.remove('active-popup');
});

menu.addEventListener('click', ()=>{
    navigation.classList.toggle('active');
});




function nextbutton(){
    document.getElementById('header').style.display='none';
    document.getElementById('input-quantity').style.display='block';
}
function transaction(){
    document.getElementById('order').style.display='none';
    document.getElementById('payment').style.display='initial';
}
function back(){
    document.getElementById('payment').style.display='none';
    document.getElementById('order').style.display='initial';
}


