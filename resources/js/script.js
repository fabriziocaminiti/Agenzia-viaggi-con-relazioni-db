document.addEventListener('scroll',()=>{
    let navbar = document.querySelector('#navbar')
    let logo = document.querySelector('#logo')
    if (window.pageYOffset>100) {
        navbar.classList.add('border-bottom-main','bg-light')
       
        
               
    } else {
        navbar.classList.remove('border-bottom-main')   
    }
})