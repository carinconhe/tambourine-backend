<?php
    class PeopleModel{
        private $db;
        private $people;
     
        public function __construct(){
            $this->db=Connector::conexion();
            $this->personas=array();
        }

        public function save($data){
            $email  = $data['email'];
            $existData = $this->findByEmail($email);
            if($existData>0)
                return ['code'=>-1,'existData'=>$existData];
            else{
                $stmt   =  $this->db->prepare("INSERT INTO people (email,status,created_at) VALUES (?,?,NOW())");
                $status = 1;
                $stmt->bind_param("si",$email,$status);
                $stmt->execute();
                $stmt->close();
                return ['code'=>1];
            }
        }

        public function findByEmail($email){
            $stmt = $this->db->prepare("SELECT count(id) FROM people WHERE email=?");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->bind_result($result);
            $stmt->fetch();
            $stmt->close();
            return $result;
        }

        public function getPeople(){
            $consulta=$this->db->query("select * from people;");
            while($filas=$consulta->fetch_assoc()){
                $this->personas[]=$filas;
            }
            return $this->personas;
        }
    }

?>