<?php
class comentarioModel extends model {
    public function getComentarios() {
        $sentencia = $this->db->prepare("select * from comentarios");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getComentario($id_comentario) {
        $sentencia = $this->db->prepare("select * from comentarios where id_comentario = ?");
        $sentencia->execute([$id_comentario]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    public function getComentarioOfImg($id_img) {
        $sentencia = $this->db->prepare("select * from comentarios where id_img = ?");
        $sentencia->execute([$id_img]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardarComentario($usuario, $texto, $calificacion, $id_img,$fecha) {
        $sentencia = $this->db->prepare('INSERT INTO comentarios(id_user,texto,calificacion,id_img, fecha) VALUES(?,?,?,?,?)');
        $sentencia->execute([$usuario, $texto, $calificacion, $id_img, $fecha]);
        $id = $this->db->lastInsertId();
        return $this->getComentario($id);
    }

    public function borrarComentario($id_comentario) {
        $sentencia = $this->db->prepare("delete from comentarios where id_comentario=?");
        $sentencia->execute([$id_comentario]);
    }

    public function getUltimosComentarios($id_img, $fecha) {
        $sentencia = $this->db->prepare("select * from comentarios WHERE (id_img = ?) AND (fecha >= ?)");
        $sentencia->execute([$id_img, $fecha]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
