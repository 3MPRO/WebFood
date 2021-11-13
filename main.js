let productListFruits = document.getElementById('owl-fruilt-slider')
let inputSearchPr = document.querySelector('.search-text-product')

// let productListDry = document.getElementById('owl-fruilt-slider')
// console.log(productList);
let arrayProducts = []
const renderProducts = () => {
    var listProductAPI = 'http://localhost:3000/product'

    const sliderProducts = () => {
        var $sliderFruilt = $('#owl-fruilt-slider')
        $sliderFruilt.trigger('destroy.owl.carousel');
        $sliderFruilt.owlCarousel({
            loop:true,
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
    }
    fetch(listProductAPI)
        .then((response) => {
            return response.json()
        })
        .then((products) => {
            var html = products.map((product)=>{
                return `
                    <div class="product-main">
                        <form action="">
                            <div class="product-fruits__thumb">
                                <a href="">
                                    <img src="${product.thumbnail}" alt="">
                                </a>
                            </div>
                            <div class="product-fruits__infos">
                                <h2 class="tilte-name-product">${product.name}</h2>
                                <span class="price-text">${product.price}đ</span>
                                <button class="button-add-product">Cho vào giỏ</button>
                            </div>
                        </form>
                    </div>
                `
            }).join('')
            productListFruits.innerHTML = html
            sliderProducts()
        })
        .catch(function (err) {
            alert('Error: ' + err.message)
        })
}

const loadProducts = async () => {
    try {
        const res =  await fetch('http://localhost:3000/product')
        arrayProducts = await res.json()
        // console.log(arrayProducts);
    } catch (error) {
        console.log(error.message);
    }
}

inputSearchPr.addEventListener('keyup', (e) => {
    const searchString = e.target.value;
    let filterResults = arrayProducts.filter((product) => {
        return product.name.includes(searchString)
    })
    const lengthRs = filterResults.length;
    renderResults(filterResults, lengthRs)
    
})

const renderResults = (results,lengthRs) => {
    const resultBox = document.querySelector('.search-results')
    console.log(results);
    var itemsHtml = results.map((result) =>{
        return `
        <a href="" class="search-results__link">
            <img src="${result.thumbnail}" alt="">
            <div class="box-desc">
                <p class="title-name-result">
                    ${result.name}
                </p>
                <p class="price-name-result">${result.price}đ</p>
            </div>
        </a>
        `
    }).join('')
    let countResult = `
    <a href="" class="result-count">
        Xem tất cả
        <span class="count-item">(${lengthRs})</span>
    </a>`
    resultBox.innerHTML = itemsHtml+countResult
}

renderProducts()
loadProducts()