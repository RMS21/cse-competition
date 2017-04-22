$(document).ready(function() {

  function getLastProblemState(){
    $.ajax({
      url: 'http://localhost:8000/problems/laststates',
      type: 'GET',
      dataType: 'JSON',
    })
    .done(function(data){
      if(!(data.problems_status === 0)){
        data.problems_status.forEach(function(o){
          if(o.state !== 1){
            if(o.state === 2){
              var output = 'درست <i class="glyphicon glyphicon-ok"></i>'
              $('#stateText-'+o.id).removeClass('warning').addClass('success').html(output);
            }
            if(o.state === 3){
              var output = 'غلط <i class="glyphicon glyphicon-ok"></i>'
              $('#stateText-'+o.id).removeClass('warning').addClass('danger').html(output);
            }
          }
        });
      }
    });

  }

  setInterval(getLastProblemState, 10000);
});
