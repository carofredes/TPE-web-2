<?php

class wallpapersModel extends model {

    public function getWallpapers() {
        $sentencia = $this->db->prepare("select * from imagen");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategories() {
        $sentencia = $this->db->prepare("select * from categoria order by nombre_categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardarWallpaper($titulo, $id_categoria) {
        $sentencia = $this->db->prepare('INSERT INTO imagen(titulo,id_categoria) VALUES(?,?)');
        $sentencia->execute([$titulo, $id_categoria]);
    }

    public function guardarWallpaperExistente($id_img, $titulo, $id_categoria) {
        $sentencia = $this->db->prepare("update imagen set titulo=?, id_categoria=? where id_img=?");
        $sentencia->execute([$titulo, $id_categoria, $id_img]);
    }

    private function subirImagenes($imagenes, $nombre) {
        $rutas = [];
        $index = 0;
        foreach ($imagenes as $imagen) {
            $destino_final = 'media/img/' . $nombre . $index . '.jpg';
            move_uploaded_file($imagen, $destino_final);
            $rutas[] = $destino_final;
            $index++;
        }
        return $rutas;
    }

    public function guardarWallpaperRelated($nombre, $imagen_relacionada, $imagenes) {
        $rutas              = $this->subirImagenes($imagenes, $nombre);
        $sentencia_imagenes = $this->db->prepare('INSERT INTO imagenes_relacionadas(id_img,url) VALUES(?,?)');
        foreach ($rutas as $ruta) {
            $sentencia_imagenes->execute([$imagen_relacionada, $ruta]);
        }
    }

    public function borrarWallpaper($id_imagen) {
        $sentencia = $this->db->prepare("delete from imagen where id_img=?");
        $sentencia->execute([$id_imagen]);
    }

    public function borrarWallpaperRelacionado($rutaTempImagenes) {
        $sentencia = $this->db->prepare("delete from imagenes_relacionadas where url=?");
        foreach ($rutaTempImagenes as $ruta) {
            $sentencia->execute([$ruta]);
        }
    }

    public function getImg($id_imagen) {
        $sentencia = $this->db->prepare("select * from imagen where id_img = ? limit 1");
        $sentencia->execute([$id_imagen]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRelatedImgs($id_imagen) {
        $sentencia = $this->db->prepare("select * from imagenes_relacionadas where id_img = ?");
        $sentencia->execute([$id_imagen]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategorieImages($id_categoria) {
        $sentencia = $this->db->prepare("select * from imagen where id_categoria=?");
        $sentencia->execute([$id_categoria]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategorieName($id_categoria) {
        $sentencia = $this->db->prepare("select * from categoria where id_categoria=? limit 1");
        $sentencia->execute([$id_categoria]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardarCategoria($titulo) {
        $sentencia = $this->db->prepare('INSERT INTO categoria(nombre_categoria)  VALUES (?)');
        $sentencia->execute([$titulo]);
    }

    public function borrarCategoria($id_theme) {
        $sentencia = $this->db->prepare("delete from categoria where id_categoria=?");
        $sentencia->execute([$id_theme]);
    }

    public function editarCategoria($id_theme, $titulo) {
        /* todo*/
    }
}
?>