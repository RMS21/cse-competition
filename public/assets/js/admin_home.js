function stopGame(){
  if($('#game-stage').val() !== "انتخاب مرحله"){
    $.ajax({
      url: 'http://localhost:8000/stop/game/' + $('#game-stage').val(),
      type: 'GET',
      dataType: 'JSON',
    }).done();
  }
}

function startGame(){
  if($('#game-stage').val() !== "انتخاب مرحله"){
      $.ajax({
        url: 'http://localhost:8000/start/game/' + $('#game-stage').val(),
        type: 'GET',
        dataType: 'JSON',
      }).done();
    }
}
