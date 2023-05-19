<?php

namespace models;

class Jogo extends Model {

    protected $table = "jogos";
    #nao esqueça da ID
    protected $fields = ["id","nome","categoria","datal","desenvolvedor", "classificacao"];
    
    
    
}

