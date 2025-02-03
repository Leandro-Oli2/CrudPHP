<?php
require __DIR__.'/../../DB/Database.php'; 

class Reservas {
    public $id;
    public $nome;
    public $numero_pessoas;
    public $numero_mesa;
    public $data;
    public $hora; 

    public function cadastrar() {
        
        $db = new Database('reservas'); 

       
        $this->id = $db->insert([
            'nome' => $this->nome,
            'numero_pessoas' => $this->numero_pessoas,
            'numero_mesa' => $this->numero_mesa,
            'data' => $this->data,
            'hora' => $this->hora
        ]);

        return true;
    }
}
?>
