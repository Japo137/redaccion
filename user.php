<?php
include_once 'db.php';
class User extends DB{
    private $nombre;
    private $username;
    private $Type_user;
    private $matricula;
    private $no_empleado;
    private $tipo;

    public function userExists($user, $pass){

        $query = $this->connect()->prepare('SELECT * FROM alumno WHERE nombre = :nombre AND contrasena = :contrasena');
        $query->execute(['nombre' => $user, 'contrasena' => $pass]);
        foreach ($query as $currentUser) {
            $this->tipo = $currentUser['usuario'];
        }
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function userExistsDoc($user, $pass){
        $query = $this->connect()->prepare('SELECT * FROM docente WHERE nombre = :nombre AND contrasena = :contrasena');
        $query->execute(['nombre' => $user, 'contrasena' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM alumno WHERE nombre = :nombre');
        $query->execute(['nombre' => $user]);
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->Type_user = $currentUser['usuario'];
            $this->matricula = $currentUser['matricula'];

        }
    }

    public function setUserDoc($user){
        $query = $this->connect()->prepare('SELECT * FROM docente WHERE nombre = :nombre');
        $query->execute(['nombre' => $user]);
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->Type_user = $currentUser['usuario'];
            $this->no_empleado = $currentUser['n_empleado'];

        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getTypeUser(){
        return $this->Type_user;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function getNo_Empleado(){
        return $this->no_empleado;
    }
    public function getTipo(){
        return $this->tipo;
    }


}
?>
