$(document).ready(function() {

  function getLastProblemState(){
    $.ajax({
      url: 'http://localhost:8000/problems/laststates',
      type: 'GET',
      dataType: 'JSON',
    })
    .done(function(data) {
      console.log(data);
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });

  }

  setInterval(getLastProblemState, 10000);
});
