let productListFruits = document.getElementById('owl-fruilt-slider')
let productListDry = document.getElementById('owl-slider-dry')

let headerEl = document.getElementById('header')
var sticky = headerEl.offsetTop+400;
console.log(sticky);

let arrayProducts = []
// const renderProducts = () => {
//     var listProductAPI = 'http://localhost:3000/product'

//     const sliderProductsFruits = () => {
//         var $sliderFruilt = $('#owl-fruilt-slider')
//         $sliderFruilt.trigger('destroy.owl.carousel');
//         $sliderFruilt.owlCarousel({
//             margin:10,
//             nav:true,
//             responsive:{
//                 0:{
//                     items:1
//                 },
//                 600:{
//                     items:3
//                 },
//                 1000:{
//                     items:5
//                 }
//             }
//     });
//     }
//     const sliderProductsDry = () => {
//         var $sliderDry = $('#owl-slider-dry')
//         $sliderDry.trigger('destroy.owl.carousel');
//         $sliderDry.owlCarousel({
//             margin:10,
//             nav:true,
//             responsive:{
//                 0:{
//                     items:1
//                 },
//                 600:{
//                     items:3
//                 },
//                 1000:{
//                     items:5
//                 }
//             }
//     });
//     }
//     fetch(listProductAPI)
//         .then((response) => {
//             return response.json()
//         })
//         .then((products) => {
//             var html = products.map((product)=>{
//                 return `
//                     <div class="product-main">
//                         <form action="">
//                             <div class="product-fruits__thumb">
//                                 <a href="">
//                                     <img src="${product.thumbnail}" alt="">
//                                 </a>
//                                 <div class="icon-heart-product">
//                                     <i class="far fa-heart"></i>
//                                 </div>
//                             </div>
//                             <div class="product-fruits__infos">
//                                 <h2 class="tilte-name-product">${product.name}</h2>
//                                 <span class="price-text">${product.price}đ</span>
//                                 <button class="button-add-product">Cho vào giỏ</button>
//                             </div>
//                         </form>
//                     </div>
//                 `
//             }).join('')
//             productListFruits.innerHTML = html
//             sliderProductsFruits()
//             return products.filter(product => product.type === 'dry')
//         })
//         .then((productsDry) => {
//             var html = productsDry.map((product)=>{
//                 return `
//                     <div class="product-main">
//                         <form action="">
//                             <div class="product-fruits__thumb">
//                                 <a href="">
//                                     <img src="${product.thumbnail}" alt="">
//                                 </a>
//                                 <div class="icon-heart-product">
//                                     <i class="far fa-heart"></i>
//                                 </div>
//                             </div>
//                             <div class="product-fruits__infos">
//                                 <h2 class="tilte-name-product">${product.name}</h2>
//                                 <span class="price-text">${product.price}đ</span>
//                                 <button class="button-add-product">Cho vào giỏ</button>
//                             </div>
//                         </form>
//                     </div>
//                 `
//             }).join('')
//             productListDry.innerHTML = html
//             sliderProductsDry()
//         })
//         .catch(function (err) {
//             // alert('Error: ' + err.message)
//         })
// }
const App = {
    sliderProducts: function(element) {
      var $sliderList = $(`${element}`)
        $sliderList.trigger('destroy.owl.carousel');
        $sliderList.owlCarousel({
            margin:10,
            nav:true,
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

        // const navElements = document.querySelectorAll('li.nav-list__item')
        // navElements.forEach(navElement => {
        //     console.log(navElement);
        //     navElement.onclick = (e) => {
        //         navElement.classList.add('active')
        //     }
        // });
    },
    start: function() {
        this.sliderProducts('#owl-fruilt-slider')
        this.sliderProducts('#owl-slider-dry')
        this.eventDom()
    }  
}
 
App.start()
// const loadProducts = async () => {
//     try {
//         const res =  await fetch('http://localhost:3000/product')
//         arrayProducts = await res.json()
//         // console.log(arrayProducts);
//     } catch (error) {
//         console.log(error.message);
//     }
// }

// inputSearchPr.addEventListener('keyup', (e) => {
//     const searchString = e.target.value;
//     if(searchString == '') {
//         // filterResults = []
//     } else {
//         let filterResults = arrayProducts.filter((product) => {
//             return product.name.includes(searchString)
//         })
//         console.log(searchString);
//         const lengthRs = filterResults.length;
//         renderResults(filterResults, lengthRs)
//     }
// })

// const resultBox = document.querySelector('.search-results')

// Create function render Result when data return
// const renderResults = (results,lengthRs) => {
//     console.log(lengthRs);
//     let countResult = `
//     <a href="" class="result-count">
//         Xem tất cả
//         <span class="count-item">(${lengthRs})</span>
//     </a>`
//     if(lengthRs == 0) {
//         let noResults = `
//             <p style="text-align:center; padding: 12px 0;">Không có kết quả tìm kiếm</p>
//         `
//         resultBox.innerHTML = noResults
//     }
//     else {
//         var itemsHtml = results.map((result) =>{
//             return `
//             <a href="detailPr.html" class="search-results__link">
//                 <img src="${result.thumbnail}" alt="">
//                 <div class="box-desc">
//                     <p class="title-name-result">
//                         ${result.name}
//                     </p>
//                     <p class="price-name-result">${result.price}đ</p>
//                 </div>
//             </a>
//             `
//         }).join('')
//         resultBox.innerHTML = itemsHtml+countResult
//     }
    
//     if(resultBox.style.display == 'none'){
//         resultBox.style.display = 'block'
//     }
//     headerEl.addEventListener('click', ()=> {
//         resultBox.style.display = "none"
//     })
// }

// Scroll fixed header nav
// window.addEventListener('scroll',()=> {
//     if (window.pageYOffset >= sticky) {
//         headerEl.classList.add("sticky")
//       } else {
//         headerEl.classList.remove("sticky");
//     }
// })

// Slider thumb detail
// const productDetailSlider = () => {
//     const listThumbnailDetails = document.querySelectorAll('.product-detail-left__list-thumb ul li')
//     const listThumbnails = document.querySelectorAll('.product-detail-left__list-thumb ul li img')
//     const productThumbnail = document.querySelector('.product-detail-left__thumbnail img')
//     listThumbnailDetails.forEach((itemThumbnail, index) => {
//         console.log(itemThumbnail.className);
//         itemThumbnail.addEventListener('click', () => {
//             for (let index = 0; index < listThumbnailDetails.length; index++) {
//                 listThumbnailDetails[index].classList.remove('active')
//             }
//             itemThumbnail.classList.add('active')
//             productThumbnail.src = listThumbnails[index].src
//             console.log(listThumbnails[index].src);
//         })
//     });
// }

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