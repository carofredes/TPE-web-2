<?php

class usersModel extends Model {
	public function getUser($userName) {
		$sentencia = $this->db->prepare("select * from users where nickName = ? limit 1");
		$sentencia->execute([$userName]);
		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUserById($userId) {
		$sentencia = $this->db->prepare("select * from users where id_user = ?");
		$sentencia->execute([$userId]);
		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUsersList() {
		$sentencia = $this->db->prepare("select * from users");
		$sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_ASSOC);
	}

	public function createUser($userName, $password) {
		$sentencia = $this->db->prepare('INSERT INTO users(nickName,password) VALUES(?,?)');
		$sentencia->execute([$userName, $password]);
	}

	public function borrarUser($userId) {
		$sentencia = $this->db->prepare('delete from users where id_user=?');
		$sentencia->execute([$userId]);
	}

	public function cambiarPermisoAdmin($userId, $valor) {
		$sentencia = $this->db->prepare('update users set permissions=? where id_user=?');
		$sentencia->execute([$valor, $userId]);
	}
}
