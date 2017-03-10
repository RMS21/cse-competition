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
              $('#stateGlyphicon-'+o.id).removeClass('glyphicon-retweet').addClass('glyphicon-ok');
              $('#stateText-'+o.id).html('درست');
            }
            if(o.state === 3){
              $('#stateGlyphicon-'+o.id).removeClass('glyphicon-retweet').addClass('glyphicon-remove')
              $('#stateText-'+o.id).html('غلط');
            }
          }
        });
      }
    });

  }

  setInterval(getLastProblemState, 10000);
});
