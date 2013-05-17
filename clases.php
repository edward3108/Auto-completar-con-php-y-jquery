<?php
class conectar 
{
  
	public static function conexion()
	{	
		$server="localhost";
		$usuario="root";
		$password="";
		$db="libreria";
		$con=mysql_connect($server,$usuario,$password);
		mysql_query("set names 'utf8'");
		mysql_select_db($db);
		return $con;
	}
}


//fin clase conectar..............................................................
class listar
{	
	private $lista;

	public function _listado()
	{
		$this->lista= array();
	}
	
	
	public function seleccionar_2($termino)
	{
		$sql="SELECT *FROM paginacion WHERE REGISTRO LIKE '%$termino%'";
		$ejecutar=mysql_query($sql,conectar::conexion());
		while ($reg=mysql_fetch_assoc($ejecutar))
		{
			$this->lista[]=$reg['REGISTRO'];
		}
		return $this->lista;
		
	}

}

//otra lista...............................
class otra_lista
{	
	
	
	
