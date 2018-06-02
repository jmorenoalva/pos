<?php

class Conexion{

	public static function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=botica", "root", "scmj010400");

		$link -> exec("set names utf8");

		return $link;

	}

}