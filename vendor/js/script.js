$(document).ready(function() {
  $(":button").click(function() {
    var newE = $("<p></p>").text("Lorem");
    $("#add").append(newE);
  });
});
