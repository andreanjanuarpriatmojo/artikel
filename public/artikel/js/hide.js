$(document).ready(function(){
  $("#reply").hide();
  $("#hide").on("click", function(){
    $("#reply").fadeToggle();
  });
});