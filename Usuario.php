<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 02/02/2019
	 * Time: 4:27 PM
	 */

	class Usuario {
		private $nombre;
		private $usuario;
		private $password;

		/**
		 * @return mixed
		 */
		public function getNombre() {
			return $this -> nombre;
		}

		/**
		 * @param mixed $nombre
		 */
		public function setNombre($nombre) {
			$this -> nombre = $nombre;
		}

		/**
		 * @return mixed
		 */
		public function getUsuario() {
			return $this -> usuario;
		}

		/**
		 * @param mixed $usuario
		 */
		public function setUsuario($usuario) {
			$this -> usuario = $usuario;
		}

		/**
		 * @return mixed
		 */
		public function getPassword() {
			return $this -> password;
		}

		/**
		 * @param mixed $password
		 */
		public function setPassword($password) {
			$this -> password = $password;
		}

		public function login() {
			$usuario = $this -> usuario;
			$password = $this -> password;
			$verifica = false;

			if ($usuario == 'm@m.com') {
				if ($password == '123') {
					$verifica = true;
				}
				return $verifica;
			} else {
				return $verifica;
			}
		}

		public function logout() {
			$_SESSION['usuario'] = null;
			session_destroy();
			header('Location: index.php');
		}
	}