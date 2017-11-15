<?php

class ringtonesModel extends model {
    public function getRingtones() {

        $sentencia = $this->db->prepare("select * from categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>