/*тупо проверка jQuery*/
$(document).ready(function() {

  $('div').hide();

  $('.buttonSound:first').on('click', function() { //обращение к классу buttonSound
      $('#spurdo').get(0).play();
      $('div').show(1000);
});

  $('.buttonSound:last').on('click', function() { //обращение к классу buttonSound
      $('#sparde').get(0).play();
      $('#liniya1, #liniya2, #liniya3').fadeToggle(1488);
  });

  $('#updateButton').on('click', function(){
    location.reload()
    console.log('хуй');
  });

});
