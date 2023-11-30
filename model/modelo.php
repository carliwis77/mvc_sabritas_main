<?php
class Juego
{
	private $juego;
	private $dbh;

	public function __construct()
	{
		$this->juego = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_xbox', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_juegos()
	{
		self::set_names();
		$sql="select * from tbl_juegos ";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->juego[]=$res;
		}
		return $this->juego;
		$this->dbh=null;
	}
}
?>