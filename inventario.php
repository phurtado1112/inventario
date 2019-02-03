<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 02/02/2019
	 * Time: 7:10 PM
	 */
	session_start();
	if(!isset($_SESSION['usuario'])) {
	    header('Location: index.php');
    }
	require_once 'cabecera.php';
	require_once 'menu.php';
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1 text-center">
                    <h2>Ingreso de Inventarios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="index.php" method="post" autocomplete="off" id="articulo">
                        <div class="row"> <!-- PRIMERA LINEA -->
                            <div class="form-group col-6">
                                <label for="codigo" class="texto_rojo">UPC/EAN/ISBN</label>
                                <input type="text" name="codigo" id="codigo" autofocus class="form-control"
                                       placeholder="Código">
                            </div>
                            <div class="form-group col-6">
                                <label for="nombre" class="texto_rojo">Nombre</label>
                                <input type="text" name="nombre" id="nombre" autofocus class="form-control"
                                       placeholder="Nombre del artículo">
                            </div>
                        </div> <!-- FIN PRIMERA LINEA -->

                        <hr>
                        <h5>Características:</h5>
                        <div class="row justify-content-center"> <!-- SEGUNDA LINEA -->
                            <div class="form-group col-4">
                                <label for="categoria">Categoría</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <option value="1">Categoría 1</option>
                                    <option value="3">Categoría 2</option>
                                    <option value="2">Categoría 3</option>
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label for="tamanio">Tamaño</label>
                                <input type="number" name="tamanio" id="tamanio" autofocus class="form-control"
                                       placeholder="123">
                            </div>
                        </div> <!-- FIN SEGUNDA LINEA -->

                        <div class="row justify-content-center"> <!-- TERCERA LINEA -->
                            <div class="form-group col-4">
                                <label for="color">Color</label>
                                <select name="color" id="color" class="form-control">
                                    <option value="1">Rojo</option>
                                    <option value="3">Verde</option>
                                    <option value="2">Azul</option>
                                </select>
                            </div>
                            <div class="form-group col-4">
                                <label for="fecha_vencimiento">Fecha Vencimiento</label>
                                <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" autofocus class="form-control">
                            </div>
                        </div> <!-- FIN TERCERA LINEA -->

                        <hr>

                        <h5>Valores:</h5>
                        <div class="row"> <!-- CUARTA LINEA -->
                            <div class="form-group col-4">
                                <label for="costo">Costo US $</label>
                                <input type="number" name="costo" id="costo" autofocus class="form-control"
                                       placeholder="0.00" step="1">
                            </div>
                            <div class="form-group col-4">
                                <label for="ganancia" class="texto_rojo">Ganancia US $</label>
                                <input type="number" name="ganancia" id="ganancia" autofocus class="form-control"
                                       placeholder="0.00" step="1">
                            </div>
                            <div class="form-group col-4">
                                <label for="precio" class="texto_rojo">Precio de venta US $</label>
                                <input type="number" name="precio" id="precio" autofocus class="form-control"
                                       placeholder="0.00" step="1">
                            </div>
                        </div> <!-- FIN CUARTA LINEA -->

                        <hr>

                        <h5>Inventario:</h5>
                        <div class="row justify-content-center"> <!-- QUINTA LINEA -->
                            <div class="form-group col-4">
                                <label for="cantidad_stock" class="texto_rojo">Cantidad Stock</label>
                                <input type="number" name="cantidad_stock" id="cantidad_stock" autofocus class="form-control"
                                       placeholder="0">
                            </div>
                            <div class="form-group col-4">
                                <label for="cantidad_bodega">Cantidad Bodega</label>
                                <input type="number" name="cantidad_bodega" id="cantidad_bodega" autofocus class="form-control"
                                       placeholder="0">
                            </div>
                        </div> <!-- FIN QUINTA LINEA -->

                        <div class="row"> <!-- SEXTA LINEA -->
                            <div class="form-group col-4 text-center">
                                <input type="submit" value="Guardar" class="btn btn-success btn-block">
                            </div>

                            <div class="form-group col-4 text-center">
                                <input type="reset" value="Limpiar" class="btn btn-light btn-block">
                            </div>
                            <div class="form-group col-4 text-center">
                                <a href="main.php" class="btn btn-dark btn-block">Salir</a>
                            </div>
                        </div> <!-- FIN SEXTA LINEA -->
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
	require_once 'pie.php';