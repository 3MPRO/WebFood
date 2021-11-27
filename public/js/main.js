let productListFruits = document.getElementById('owl-fruilt-slider')
let productListDry = document.getElementById('owl-slider-dry')
let item = document.querySelector.bind(document)
const listbtnAddCart = document.querySelectorAll('.add-cart')
let headerEl = document.getElementById('header')
var sticky = headerEl.offsetTop+400;
console.log(listbtnAddCart);

const App = {
    defaulthref: listbtnAddCart.length != 0 ? listbtnAddCart[0].search.substring(0, listbtnAddCart[0].search.length - 1) : '',
    sliderProducts: function(element) {
      var $sliderList = $(`${element}`)
        $sliderList.trigger('destroy.owl.carousel');
        $sliderList.owlCarousel({
            margin:10,
            loop:true,
            nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    },
    eventDom: function() {
        window.addEventListener('scroll',()=> {
            if (window.pageYOffset >= sticky) {
                headerEl.classList.add("sticky")
            } else {
                headerEl.classList.remove("sticky");
            }
        })

    },
    // Slider thumb detail
    productDetailSlider: function() {
        const listThumbnailDetails = document.querySelectorAll('.product-detail-left__list-thumb ul li')
        const listThumbnails = document.querySelectorAll('.product-detail-left__list-thumb ul li img')
        const productThumbnail = document.querySelector('.product-detail-left__thumbnail img')
        listThumbnailDetails.forEach((itemThumbnail, index) => {
            listThumbnailDetails[0].classList.add('active')
            itemThumbnail.addEventListener('click', () => {
                for (let index = 0; index < listThumbnailDetails.length; index++) {
                    listThumbnailDetails[index].classList.remove('active')
                }
                itemThumbnail.classList.add('active')
                productThumbnail.src = listThumbnails[index].src
                console.log(listThumbnails[index].src);
            })
        });
    },
    addCart: function() {
        const listbtnAddCart = document.querySelectorAll('.btn-add-cart')
        const modelAddCart = document.querySelector('.model-add-cart')
        
        const style = 'top: 40px;'
        console.log(modelAddCart);
        listbtnAddCart.forEach(btnAddCart => {
            btnAddCart.addEventListener('click',function(e){
                console.log(btnAddCart.href);
                setTimeout(function(){
                    modelAddCart.style = style
                },1000)
                setTimeout(function(){
                    console.log('setInterval 2');
                    modelAddCart.style = 'right: -200px;'
                },5000)
                setTimeout(function(){
                    window.location.href = btnAddCart.href
                },6000)
                e.preventDefault()
            //    clearInterval(idTime)
            })
        });
    },
    quantityCart: function() {
        const btnMinus = item('.custom-quantity .btn-minus')
        const btnPlus = item('.custom-quantity .btn-plus')
        let qtyInputEl = item('.qty-input')
        const listbtnAddCart = document.querySelectorAll('.add-cart')
        const _this = this
        let valueInput = qtyInputEl.value
        btnMinus.addEventListener('click', function(e) {
            e.preventDefault()
            valueInput == 1 ? valueInput = 1 : valueInput--
            console.log(valueInput);
            qtyInputEl.value = `${valueInput}`
            console.log(_this.defaulthref + '' + valueInput);
            listbtnAddCart[0].href = _this.defaulthref + '' + valueInput
        })
        btnPlus.addEventListener('click', function(e) {
            e.preventDefault()
            valueInput == 10 ? valueInput = 10 : valueInput++
            qtyInputEl.value = `${valueInput}`
            console.log(_this.defaulthref + '' + valueInput);
            listbtnAddCart[0].href = _this.defaulthref + '' + valueInput
        })
    },
    start: function() {
        this.sliderProducts('#owl-fruilt-slider')
        this.sliderProducts('#owl-slider-dry')
        this.eventDom()
        this.productDetailSlider()
        this.addCart()
        this.quantityCart()
    }  
}
 
App.start()


// Create function quantity cart
// const quantityCart = () => {
//     const btnMinus = document.querySelector('.custom-quantity .btn-minus')
//     const btnPlus = document.querySelector('.custom-quantity .btn-plus')
//     let qtyInputEl = document.querySelector('.qty-input')
//     let valueInput = qtyInputEl.value
//     btnMinus.addEventListener('click', function(e) {
//         e.preventDefault()
//         valueInput == 1 ? valueInput = 1 : valueInput--
        
//         qtyInputEl.value = valueInput
//     })
//     btnPlus.addEventListener('click', function(e) {
//         e.preventDefault()
//         valueInput == 10 ? valueInput = 10 : valueInput++
//         qtyInputEl.value = valueInput
//     })
// }

// loadProducts()
// productDetailSlider()
// quantityCart()


/* Change password js */
var checkbox = document.getElementById("radio-changePass")
  
    checkbox.onchange = function()
    {
        var container_inforC
        hange_show = document.getElementsByClassName("container-inforChange--show");
        container_inforChange_show.style = "hidden"; 
    }



