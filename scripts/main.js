// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(".category-nav").on('click', function (e) {
    e.preventDefault();

    $(".category-nav").removeClass('active');
    $(this).addClass('active');
    let activeCategory = $(this).attr('d-service-catergory-nav');

    if (activeCategory == "all") {
        $('.service-category-wrapper').css('display', "block");
    } else {
        $('.service-category-wrapper').css('display', "none");
        $(`.service-category-wrapper.${activeCategory}`).css('display', 'block');
    }

})
