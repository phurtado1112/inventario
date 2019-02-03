<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 02/02/2019
	 * Time: 7:10 PM
	 */

	class Articulo {
	private $codigo;
	private $nombre;
	private $categoria;
	private $tamanio;
	private $color;
	private $fecha_vencimiento;
	private $costo;
	private $ganancia;
	private $precio;
	private $cantidad_stock;
	private $cantidad_bodega;

		/**
		 * Articulo constructor.
		 * @param $codigo
		 * @param $nombre
		 * @param $categoria
		 * @param $tamanio
		 * @param $color
		 * @param $fecha_vencimiento
		 * @param $costo
		 * @param $ganancia
		 * @param $precio
		 * @param $cantidad_stock
		 * @param $cantidad_bodega
		 */
		public function __construct($codigo, $nombre, $categoria, $tamanio, $color, $fecha_vencimiento, $costo, $ganancia, $precio, $cantidad_stock, $cantidad_bodega) {
			$this -> codigo = $codigo;
			$this -> nombre = $nombre;
			$this -> categoria = $categoria;
			$this -> tamanio = $tamanio;
			$this -> color = $color;
			$this -> fecha_vencimiento = $fecha_vencimiento;
			$this -> costo = $costo;
			$this -> ganancia = $ganancia;
			$this -> precio = $precio;
			$this -> cantidad_stock = $cantidad_stock;
			$this -> cantidad_bodega = $cantidad_bodega;
		}


		/**
		 * @return mixed
		 */
		public function getCodigo() {
			return $this -> codigo;
		}

		/**
		 * @param mixed $codigo
		 */
		public function setCodigo($codigo) {
			$this -> codigo = $codigo;
		}

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
		public function getCategoria() {
			return $this -> categoria;
		}

		/**
		 * @param mixed $categoria
		 */
		public function setCategoria($categoria) {
			$this -> categoria = $categoria;
		}

		/**
		 * @return mixed
		 */
		public function getTamanio() {
			return $this -> tamanio;
		}

		/**
		 * @param mixed $tamanio
		 */
		public function setTamanio($tamanio) {
			$this -> tamanio = $tamanio;
		}

		/**
		 * @return mixed
		 */
		public function getColor() {
			return $this -> color;
		}

		/**
		 * @param mixed $color
		 */
		public function setColor($color) {
			$this -> color = $color;
		}

		/**
		 * @return mixed
		 */
		public function getFechaVencimiento() {
			return $this -> fecha_vencimiento;
		}

		/**
		 * @param mixed $fecha_vencimiento
		 */
		public function setFechaVencimiento($fecha_vencimiento) {
			$this -> fecha_vencimiento = $fecha_vencimiento;
		}

		/**
		 * @return mixed
		 */
		public function getCosto() {
			return $this -> costo;
		}

		/**
		 * @param mixed $costo
		 */
		public function setCosto($costo) {
			$this -> costo = $costo;
		}

		/**
		 * @return mixed
		 */
		public function getGanancia() {
			return $this -> ganancia;
		}

		/**
		 * @param mixed $ganancia
		 */
		public function setGanancia($ganancia) {
			$this -> ganancia = $ganancia;
		}

		/**
		 * @return mixed
		 */
		public function getPrecio() {
			return $this -> precio;
		}

		/**
		 * @param mixed $precio
		 */
		public function setPrecio($precio) {
			$this -> precio = $precio;
		}

		/**
		 * @return mixed
		 */
		public function getCantidadStock() {
			return $this -> cantidad_stock;
		}

		/**
		 * @param mixed $cantidad_stock
		 */
		public function setCantidadStock($cantidad_stock) {
			$this -> cantidad_stock = $cantidad_stock;
		}

		/**
		 * @return mixed
		 */
		public function getCantidadBodega() {
			return $this -> cantidad_bodega;
		}

		/**
		 * @param mixed $cantidad_bodega
		 */
		public function setCantidadBodega($cantidad_bodega) {
			$this -> cantidad_bodega = $cantidad_bodega;
		}

		public function guardarArticulo() {

		}

	}