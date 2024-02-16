function hiddenForm(){
    var wrapper = document.querySelector('.wrapper');
    wrapper.style.display = 'none';
}

function showLogin(){
    var wrapper = document.querySelector('.wrapper');
    // wrapper.classList.add('display-flex');
    wrapper.classList.toggle('display-flex');
}

function hiddenLogin(){
    var wrapper =  document.querySelector('.wrapper');
    // wrapper.style.display = 'none'; css inline
    wrapper.classList.remove('display-flex');
}
function decreasingQuantity(item){
    var quantity = document.querySelector('.quantity__button-number');
    var price = document.querySelector('.product__price');
    var priceValue = parseFloat(price.innerHTML.replace(/\./g, ''));
    var quantityValue = Number(quantity.value);
    if(quantityValue  == 1){
        item.classList.add('button--disable');
    }
    else {
        quantityValue--;
        quantity.value = quantityValue;
        var priceTotal = document.querySelector('.price__total');
        priceTotal.value = (quantityValue * priceValue).toLocaleString('en-US').replace(/\./g, '#').replace(/,/g, '.').replace(/#/g, ',');
        item.classList.remove('button--disable');
    }
}

function increasingQuantity(){
    var quantity = document.querySelector('.quantity__button-number');
    var decrease = document.querySelector('.quantity__button-descrease');
    var quantityValue = Number(quantity.value);
    decrease.classList.remove('button--disable');
    quantityValue++;
    quantity.value = quantityValue;
    var price = document.querySelector('.product__price');
    var priceValue = parseFloat(price.innerHTML.replace(/\./g, ''));
    var priceTotal = document.querySelector('.price__total');
    priceTotal.value = (quantityValue * priceValue).toLocaleString('en-US').replace(/\./g, '#').replace(/,/g, '.').replace(/#/g, ',');
}