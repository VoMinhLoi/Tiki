function showLogin(){
    addClassDFtoLgin();
}


function hiddenLogin(){
    var wrapper =  document.querySelector('.wrapper');
    // wrapper.style.display = 'none';
    wrapper.classList.remove('display-flex');

}

function addClassDFtoLgin(){
    var wrapper =  document.querySelector('.wrapper');
    // wrapper.style.display = 'flex'; css inline

    //css internal bởi vì thêm class vào.
    //C1: wrapper.classList.add('display-flex');
    //C2:
    wrapper.classList.toggle('display-flex');
}