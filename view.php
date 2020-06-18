<?php
    class View {
        public function load($model, $acao, $data = null) {
            include("template/$model/$acao.php");
        }
    }
?>