<section >
  
    <div class="col-md-12" id="topo-tabela">
       
        <div class="testeira">
              <h1 id="h1-testeira">Tabela de Classificação</h1>
              <br>
              <p id="league-name-p"></p>
        </div>

    </div>


<div class="dropdown"> 
            
  <select class="browser-default" id="league-select">
    <option value="" disabled selected>Selecione uma liga</option>
    <option value="1">Master Aruã</option>
    <option value="2">Super Master Aruã</option>
    
  </select>

  </div> 

 <div class="dropdown"> 
      
  <select class="browser-default" id="year-select">
    <option value="" disabled selected>Selecione o Ano</option>
    <option value="2016">2016</option>
    <option value="2" disabled>2015</option>
    <option value="3" disabled>2014</option>
  </select>
</div>     

<div class="dropdown">
   <a class="waves-effect waves-light btn" id="filter-btn" >Filtrar</a>
</div>  
<div class="dropdown">
   <a class="waves-effect waves-light btn" id="reset-filter-btn" onclick="refreshSelect()">Resetar</a>
</div> 

<div class="col-md-10">
   <div id="table-list">
    <table class=" centered bordered">
        <thead>
          <tr>
              <th data-field="id">Classificação</th>
              <th data-field="name">Logo</th>
              <th data-field="price">Time</th>
              <th data-field="price">Pontos</th>
              <th data-field="price">Vitórias</th>
              <th data-field="price">Derrotas</th>
              <th data-field="price">Empates</th>
              <th data-field="price">Gols Pró</th>
              <th data-field="price">Gols Contra</th>
              <th data-field="price">Saldo</th>
          </tr>
        </thead>

        <tbody>
          
        </tbody>
      </table>
        <div class="row" style="height:40px;">
        </div>
     </div>
</div>

<div class="col-md-2">
</div>

</section>