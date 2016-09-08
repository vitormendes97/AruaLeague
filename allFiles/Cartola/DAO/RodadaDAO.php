<?php

require_once 'C:/xampp/htdocs/Cartola/Entidades/Rodada.php';
require_once 'C:/xampp/htdocs/Cartola/SingletonConnection/Connection.php';
include_once 'C:/xampp/htdocs/Cartola/Entidades/Jogador.php';
include_once 'C:/xampp/htdocs/Cartola/Entidades/Clube.php';

class RodadaDAO {

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->getConnection();
    }

    function getRodadas() {
        $rodadas = array();
        $sql = "SELECT DISTINCT(id_rodada) FROM CARTOLA.RODADA";

        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $indice = $row["id_rodada"];
                array_push($rodadas, $indice);
            }
        }
        return $rodadas;
    }

    function player_pontuacao($rodada) {
        $players = array();
        $sql = "SELECT * FROM CARTOLA.JOGADOR J INNER JOIN CARTOLA.RODADA R USING(ID_PLAYER) INNER JOIN CARTOLA.CLUBE C USING(ID_TEAM) WHERE ID_RODADA=? ORDER BY R.points DESC";
       $pst = $this->connection->prepare($sql);
        $pst->bind_param("s", $rodada);
        $pst->execute();


        $result = $pst->get_Result();
            
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                   $player = new Jogador();
                $player->setAttribute("id_player", $row["id_player"]);
                $player->setAttribute("name_player", $row["name_player"]);
                $player->setAttribute("age_player", $row["age_player"]);
                $player->setAttribute("position", $row["position"]);
                $player->setAttribute("picture", $row["picture"]);

                $team = new Clube();
                $team->setAttribute("name_team", $row["name_team"]);
                $team->setAttribute("picture", $row["team_picture"]);
                $player->setAttribute("team", $team);

                $rodada = new Rodada();
                $rodada->setAttribute("id_rodada", $row["id_rodada"]);
                $rodada->setAttribute("player", $player);
                $rodada->setAttribute("points", $row["points"]);
                $rodada->setAttribute("goal", $row["goal"]);
                $rodada->setAttribute("assist", $row["assist"]);
                $rodada->setAttribute("chute_trave", $row["chute_trave"]);
                $rodada->setAttribute("chute_on_goal", $row["chute_on_goal"]);
                $rodada->setAttribute("red_card", $row["red_card"]);
                $rodada->setAttribute("yellow", $row["yellow_card"]);
                $rodada->setAttribute("desarme", $row["desarme"]);
                $rodada->setAttribute("offside", $row["offside"]);
                $rodada->setAttribute("falta_cometida", $row["falta_cometida"]);

                array_push($players, $rodada);
            }
        }

        return $players;
    }

}
