function getTeamRanking() {
  $.ajax({
     url: 'http://localhost:8000/team/ranking',
     type: 'GET',
     dataType: 'JSON'
  }).done(function (data) {
    var output = '';
    data.teams.forEach(function(team, index){
      output += `<tr>
                    <td>${index + 1}</td>
                    <td>${team.name}</td>
                    <td>${team.score}</td>
                    <td>${team.level}</td>
                </tr>`
    });
    $('#table-body').html(output);
  });
}

setInterval(getTeamRanking, 20000);
