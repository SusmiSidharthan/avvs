$('.menu__sublist').parent().children('a.menu__item').addClass('menu__item--active');

$('.menu__sublist').parent().children('a.menu__subitem').addClass('menu__item--active');


$('.menu__item, .menu__subitem').click(function(){
  $(this).next('.menu__sublist').slideToggle();
  $(this).toggleClass('menu__item--open');
});