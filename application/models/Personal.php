<?php 
class Personal extends CI_Model {

	private $tabla = 'personal';
	private $idpersonal;
	private $nombre;
	private $cargo;
	private $tipo;
	
	public function __construct()
    {
            parent::__construct();
            $this->load->database();
    }

    public function getPersonalById($idpersonal)
    {
    	$encontrado = false;
        $this->idpersonal = $idpersonal;

        $qry = $this->db->get_where($this->tabla, array('idpersonal' => $this->idpersonal));
        $personalData = $qry->row_array();

        if($personalData['idpersonal'] === $this->idpersonal) $encontrado = $personalData;
        
    	return $personalData;
    }

    public function savePersonal($datospersonal)
    {
    	$id = false;

    	if(count($datospersonal)==3){
    		foreach ($datospersonal as $campo => $dato) {
    			if(!is_null($dato) && !empty($dato)){
    				if($campo == 'nombre') $this->nombre = $dato;
    				if($campo == 'cargo') $this->cargo = $dato;
    				if($campo == 'tipo') $this->tipo = $dato;
    			}
    		}

    		$dataInsert = array(
    			'nombre' => $this->nombre,
    			'cargo' => $this->cargo,
    			'tipo' => $this->tipo
    		);
    	}

		if($this->db->insert($this->tabla, $dataInsert)){
			$this->db->select_max('idpersonal');
    		$id = $this->db->get($this->tabla);
		}

		return $id; 
    }
}