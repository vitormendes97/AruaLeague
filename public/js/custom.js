$(document).ready(function(){
      $('#filter-btn').click(function(){
            var liga = $('#league-select').val();
            var ano = $('#year-select').val();
         

            if(liga === null || ano === null){
                  alert('Por favor selecione a liga e o ano.');
            }
            else{
                  $.ajax({
                   url: 'http://localhost:8080/tabela/'+liga,
                   type: 'GET',
                   data: liga,
                   success: function(data){
                          if(data.sucesso === true){
                              
                          var pos = 1;
                           

                                    



                          for(i = 0; i<data['tabela'].length; i++){
                         console.log(data.tabela[i]);
                        $row = $('<tr> <td>'+pos+'º</td> <td> <img src=http://localhost:8080/public/img/clubes/'+data.tabela[i].team_picture+'></td>'+
                              '<td>'+data.tabela[i].nome_clube+'</td> <td>'+data.tabela[i].pontos+'</td> <td>'+data.tabela[i].vitoria+'</td>'+
                              '<td>'+data.tabela[i].derrota+'</td> <td>'+data.tabela[i].empate+'</td> <td>'+data.tabela[i].gol_pro+'</td>'+
                              '<td>'+data.tabela[i].gol_contra+'</td> <td>'+data.tabela[i].saldo_gol+'</td>');
                        $('table > tbody:last').append($row); 
                                         $('#league-name-p').css('display:initial');
                                         $('#league-name-p').text(data.tabela[i].nome_liga);
                                         $('#h1-testeira').css('bottom:10px;');


                        pos++;
                   	    }
                       
                             
                   	  }

                   }
                         
            	});
            }

      });

});

function refreshSelect(){
	
	location.reload();
 }




