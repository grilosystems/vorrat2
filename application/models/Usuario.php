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
        
    	return $encontrado;
    }

    public function searchUsuarioById($id_user)
    {

    }

    public function getUsuarioByCuenta($usuario)
    {
        $this->cuenta = $usuario;

        $qry = $this->db->get_where($this->tabla, array('cuenta'=>$this->cuenta));
        $usuario = $qry->row_array();

        return $usuario;
    }

    public function getAllUsuarios()
    {
        
    }

    public function updateUsuario($id_user, $data_field)
    {
        
    }

    public function deleteUsuario($id_user)
    {

    }

    public function addUsuario($data_usuario)
    {

    }

}