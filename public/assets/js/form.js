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
