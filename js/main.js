$('#countries').change(function(){
  var country = $(this).val();

  if (country.length > 0) {

    $.ajax({
      url: 'controllers/states.php',
      data: {country:country},
      method: 'post',
      dataType: 'json',
      success: function(states){
        /*console.log(states)*/
        resetSelect('#states', 'Seleccione un estado')
        resetSelect('#cities', 'Seleccione una ciudad')
        $.each(states, function(i, state){
          $('#states').append('<option value="'+ state.isoCode +'">'+ state.name +'</option>')
        })
      }
    })
  }
})

$('#states').change(function(){
  var country = $('#countries').val();
  var state = $(this).val();

  if (state.length > 0) {

    $.ajax({
      url: 'controllers/cities.php',
      data: {country:country, state:state},
      method: 'post',
      dataType: 'json',
      success: function(cities){
        console.log(cities)
        resetSelect('#cities', 'Seleccione una ciudad')
        $.each(cities, function(i, city){
          $('#cities').append('<option value="'+ city.isoCode +'">'+ city.name +'</option>')
        })
      }
    })
  }
})

function resetSelect(selector, mensaje) {
  $(selector).empty();
  $(selector).append('<opcion value="">'+ mensaje +'</opcion>');
}