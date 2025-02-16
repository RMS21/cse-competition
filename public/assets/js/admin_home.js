function stopGame(){
  if($('#game-stage').val() !== "انتخاب مرحله") {
    $.ajax({
      url: 'http://localhost:8000/stop/game/' + $('#game-stage').val(),
      type: 'GET',
      dataType: 'JSON',
    }).done();
  }
}

function startGame(){
  if($('#game-stage').val() !== "انتخاب مرحله") {
      $.ajax({
        url: 'http://localhost:8000/start/game/' + $('#game-stage').val(),
        type: 'GET',
        dataType: 'JSON',
      }).done();
    }
}

function answer(team_id, problem_id, problem_answer) {
  $.ajax({
        url: 'http://localhost:8000/answer/' + team_id + '/' + problem_id + '/' + problem_answer,
        type: 'GET',
        dataType: 'JSON',
      }).done(getReviewRequests());
      //add a loading
}

function getReviewRequests() {
  $.ajax({
     url: 'http://localhost:8000/admin',
     type: 'GET',
     dataType: 'JSON'
  }).done(function (data) {
    var output = '';
    data.review_requests.forEach(function(req, index){
      output += `<tr>
                    <td class="text-center">${index + 1}</td>
                    <td>${ req.problem_title }</td>
                    <td>${ req.team_name }</td>
                    <td>${ req.stage }</td>
                    <td>
                      <button class="btn btn-success" onclick="answer(${req.team_id}, ${req.problem_id}, 2)">
                        درست
                      </button>
                    <button class="btn btn-danger" onclick="answer(${req.team_id}, ${req.problem_id}, 3)">
                      غلط
                      </button>
                    </td>
                </tr>`
    });
    $('#table-body').html(output);
  });
}

setInterval(getReviewRequests, 10000);
