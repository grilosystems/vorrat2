<?php 
class Usuario extends CI_Model {

	private $tabla = 'usuario';
	private $idusuario;
	private $idtipoUsuario;
	private $idPersonal;
	private $cuenta;
	private $clave;
	
	public function __construct()
    {
            parent::__construct();
            $this->load->database();
    }

    public function searchUsuario($usuario)
    {
    	$encontrado = false;
        $this->cuenta = $usuario;

        $qry = $this->db->get_where($this->tabla, array('cuenta' => $this->cuenta));
        $usuarioFind = $qry->row_array();

        if($usuarioFind['cuenta'] === $this->cuenta) $encontrado = true;

        //var_dump(print_r($usuarioFind,1)); die();
        
    	return $encontrado;
    }

}