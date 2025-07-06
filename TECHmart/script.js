//Copy menu for mobile
function copyMenu()
{
    //Copy inside .dpt-cat to .departments
    var dptCategory=document.querySelector('.dpt-cat');
    var dptPlace = document.querySelector('.departments');
    dptPlace.innerHTML= dptCategory.innerHTML;

    //Copy inside nav to nav
    var mainNav=document.querySelector('.header-nav nav');
    var navPlace=document.querySelector('.off-canvas nav');
    navPlace.innerHTML=mainNav.innerHTML;
    //Copy .header-top .wrapper to .thetop-nav
    var topNav=document.querySelector('.header-top .wrapper');
    var topPlace=document.querySelector('.off-canvas .thetop-nav');
    topPlace.innerHTML=topNav.innerHTML;
    
}
copyMenu();
//Show sub menu on mobile
const submenu=document.querySelectorAll('.has-child .icon-small');
submenu.forEach((menu)=>menu.addEventListener('click',toggle));
function toggle(e){
    e.preventDefault();
    submenu.forEach((item)=>item!=this?item.closet('.has-child').classList.remove('expand'):null);
    if (this.closet('.has-child').classList!='expand');
    this.closet('.has-child').classList.toggle('expand');
}


const menuButton=document.querySelector('.trigger'),
   closeButton=document.querySelector('.t-close'),
   addClass=document.querySelector('.site');
    menuButton.addEventListener('click',function(){
    addClass.classList.toggle('showmenu')
})
closeButton.addEventListener('click',function(){
    addClass.classList.remove('showmenu')
})

//Slider
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
//Show search
const searchButton=document.querySelector('.t-search'),
    tClose=document.querySelector('.search-close'),
    showClass=document.querySelector('.site');
searchButton.addEventListener('click',function(){
    showClass.classList.toggle('showsearch')
})
tClose.addEventListener('Click',function(){
    showClass.classList.remove('showsearch')
})

//Show dpt menu
const dptButton=document.querySelector('.dpt-cat .dpt-trigger'),
    dptClass=document.querySelector('.site');
dptButton.addEventListener('click',function(){
    dptClass.classList.toggle('showdpt')
 })
 //product image slider
 var productThumb = new Swiper ('.small-image',{
    loop:true,
    spaceBetween:10,
    slidesPerview:3,
    freeMode: true,
    watchSlidesProgress:true,
    breakpoints:{
       481:{
           spaceBetween:32,
       }
    }
 });
 var productBig = new Swiper('.big-image',{
    loop:true,
    autoweight:true,
    navigation:{
        nextEl:'.swiper-button-next',
        prevEl:'.swiper-button-prev',
    },
    thumbs:{
        Swiper:productThumb
    }
})
//stock products
var stocks=document.querySelectorAll('.products .stock');
for (let x=0;x=stocks.length;x++){
    let stock=stocks[x].detaset.stock,
    available = stocks[x].querySelector('.qty-available').innerHTML,
    sold=stocks[x].querySelector('.qty-sold').innerHTML,
    percent=sold*100/stock;
    stocks[x].querySelector('.available').style.width=percent="%";
}
//Show cart on click
const divtoShow='.mini-cart';
const divPogap = document.querySelector(divtoShow);
const divTrigger=document.querySelector('.cart-trigger');
divTrigger.addEventListener('click',()=>{
    setTimeout(()=>{
        if(!divPogap.classList.contains('.show')){
            divPogap.classList.add('show');
        }
    },250)
})

//Close to click outside
document.addEventListener('click',(e)=>{
    const isClosest = e.target.closest(divtoShow);
    if('isClosest' && divPogap.classList.contains('show')){
        divPogap.classList.remove('show')
    }
})


