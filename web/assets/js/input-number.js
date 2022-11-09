$('.addd').click(function () {
    alert("aa");
  $(this).prev().val(+$(this).prev().val() + 1);
});
$('.subb').click(function () {
  if ($(this).next().val() >= 1) $(this).next().val(+$(this).next().val() - 1);
});