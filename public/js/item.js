var addToCart = function(id) {
  var url = '/addToCart/' + id;
  $.get(url, function(data) {
    console.log(data);
  });
}
