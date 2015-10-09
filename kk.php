<?
class Equipo //extends ccc
{
	private $_nombre;
	private $_pais;
	private $_bandera;
	private $_escudo;
	
	public function __construct($nombre, $pais, $bandera, $escudo)
	{ 
		$this->_nombre = $nombre;
		$this->_pais = $pais;
		$this->_bandera = $bandera;
		$this->_escudo = $escudo;
		//parent::__construct($this->_connection, $this->_ispermanent);
	}

}
class Grupo
{
	private $equipo1;
	private $equipo2;
	private $equipo3;
	private $equipo4;
	
	private $partido1;
	private $partido2;
	private $partido3;
	private $partido4;
	private $partido5;
	private $partido6;
	private $partido7;
	private $partido8;
	
	private $clasificado1;
	private $clasificado2;
}

class Puntos 
{
	private $_equipo;
	private $_jugado;
	private $_ganado;
	private $_empatado;
	private $_perdido;
	private $_golesfavor;
	private $_golescontra;
	private $_golesdiferencia;
	private $_puntos;
}

class Partidos
{
	private $_equipo1;
	private $_equipo2;
	private $_resultado1;
	private $_resultado2;
}

?>