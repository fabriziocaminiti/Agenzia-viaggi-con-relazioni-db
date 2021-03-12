const { post } = require("jquery")

document.addEventListener('scroll', () => {
    let navbar = document.querySelector('#navbar')

    if (window.pageYOffset > 50) {
        navbar.classList.add('border-bottom-main', 'bg-white')
        document.getElementById('a').style.color = "black"
        document.getElementById('b').style.color = "black"
        document.getElementById('c').style.color = "black"
        document.getElementById('d').style.color = "black"
        document.getElementById('e').style.color = "black"
        document.getElementById('f').style.color = "black"
        document.getElementById('g').style.color = "black"
    } else {
        navbar.classList.remove('border-bottom-main', 'bg-white')
        document.getElementById('a').style.color = "white"
        document.getElementById('b').style.color = "white"
        document.getElementById('c').style.color = "white"
        document.getElementById('d').style.color = "white"
        document.getElementById('e').style.color = "white"
        document.getElementById('f').style.color = "white"
        document.getElementById('g').style.color = "white"
    }
})

jQuery('#lancia').click(function () {
    jQuery.ajax({
        url: '/registrati'
    }).done(function (e) {
        jQuery('').html(e);
    })
});
jQuery('form[name="form1"]').submit(function (e) {
    e.preventDefault();
    let name = jQuery('input[name="firstname"]').val();
    let email = jQuery('input[name="email"]').val();
    jQuery.ajax({
        url: '/',
        method: 'POST',
        data: { let1: name, let2: email }
    }).done(function (a) {
        if (a == 1)
            jQuery('.target1').html('ok');
        else
            jQuery('.target1').html('non è ok');
    })
});