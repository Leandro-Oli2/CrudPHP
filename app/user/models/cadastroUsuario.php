<?php
require __DIR__.'/../../DB/Database.php'; 

class cadastroUsuario {
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $is_admin = 0; 

    public function cadastrar() {
        $db1 = new Database('usuarios'); 
        $this->id = $db1->insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => password_hash($this->senha, PASSWORD_DEFAULT), 
            'is_admin' => $this->is_admin 
        ]);
        return true;
    }
}
?>