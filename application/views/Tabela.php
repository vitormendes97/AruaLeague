

<?php $position = 1?>
<section>

<div class="row">
            <div class="col-md-8" style="width:80%;margin-left:290px;">
                <h3 style="margin-left: 250px;font-family:Century Gothic;margin-top: 30px;">
                    Campeonato <span class="label label-default" style="background-color: green;">Master</span></h3>


            </div>



            <div class="row">

                <div class="col-md-12" style="margin-top:30px;width:90%;margin-left: 80px;">

                    <table class="table table-striped">
                        <tr>
                            <th><p style="text-align:center">Ranking</p></th>
                            <th><p style="text-align:center">Time</p></th>
                            <th><p style="text-align:center">Liga</p></th>
                            <th><p style="text-align:center">Pontos</p></th>
                            <th><p style="text-align:center">Vitorias</p></th>
                            <th><p style="text-align:center">Empate</p></th>
                            <th><p style="text-align:center">Derrotas</p></th>
                            <th><p style="text-align:center">GP</p></th>
                            <th><p style="text-align:center">GC</p></th>
                            <th><p style="text-align:center">SG</p></th>
                        </tr>
                        <?php foreach($tabela_master as $t){ ?>
                        <tr>
                            <td align="center"><p style="margin-top:16px;text-align:center"><?php echo $position ?> º</p></td>
                            <td align="center"><img src="<?php echo base_url('/public/img/clubes/').$t->team_picture; ?>" style="margin-left:15%;"><?php echo $t->nome_clube ?></td>
                            <td align="center"><p style="text-align:center"></p><?php echo $t->nome_liga ?></td>
                            <td><p style="text-align:center"><?php echo $t->pontos ?></p></td>
                            <td><p style="text-align:center"><?php echo $t->vitoria ?></p></td>
                            <td><p style="text-align:center"><?php echo $t->empate ?></p></td>
                            <td><p style="text-align:center"><?php echo $t->derrota ?></p></td>
                            <td><p style="text-align:center"><?php echo $t->gol_pro ?></p></td>
                            <td><p style="text-align:center"><?php echo $t->gol_contra ?></p></td>
                            <td><p style="text-align:center"><?php echo $t->saldo_gol ?></p></td>


                        </tr>
                        <?php 
                          $position++;
                        } ?>
                </table>



</section>
