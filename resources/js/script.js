document.addEventListener('scroll',()=>{
    let navbar = document.querySelector('#navbar')
    if (window.pageYOffset>100) {
        navbar.classList.add('border-bottom-main')
       
        
               
    } else {
        navbar.classList.remove('border-bottom-main')   
    }
})