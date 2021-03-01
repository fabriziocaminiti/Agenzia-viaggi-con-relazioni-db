const { post } = require("jquery")

document.addEventListener('scroll', () => {
    let navbar = document.querySelector('#navbar')

    if (window.pageYOffset > 100) {
        navbar.classList.add('border-bottom-main', 'bg-white')
    } else {
        navbar.classList.remove('border-bottom-main', 'bg-white')

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