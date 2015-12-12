<?php 
require_once("model/model.php");
class controller{
	private $Mymodel;

	public function __construct(){
		$this->myModel = new model();
	}
	public function Index(){
        require_once 'views/header.inc';	
        require_once 'views/login.php';        
        require_once 'views/footer.inc';
	}
	public function valida(){
		session_start();
		$estado="";
		$datos = $this->myModel->validacion($_REQUEST['email'],$_REQUEST['pass']);
		if($datos > 0){
			$getData = $this->myModel->get_id_sucursal($_REQUEST['email'],$_REQUEST['pass']);
			foreach ($getData as $dato) {
            	$_SESSION['idsucursal']=$dato['idsucursal'];
            	$estado = $dato['est_pago'];
            }
            if ($estado == "PAGADO") {
            	$myController = new controller();
				$myController->listadoProductos();
            }else{
				require_once 'views/header.inc';		
				require_once 'views/formPago.php';        
				require_once 'views/footer.inc';            	
            }
		}else{
				require_once 'views/header.inc';		
				require_once 'views/errorLogin.php';        
				require_once 'views/footer.inc';
		}
	}
	public function addNewProduct(){
		session_start();
		$datos = $this->myModel->add_new_pro($_SESSION['idsucursal'],$_REQUEST['nom'],$_REQUEST['des'],$_REQUEST['cont'],$_REQUEST['cat'],$_REQUEST['exi'],$_REQUEST['pre']);
		if($datos > 0){
				require_once 'views/header.inc';		
				require_once 'views/successLog.php';  
            	$myController = new controller();
				$myController->listadoProductos();
		}else{
			require_once 'views/header.inc';		
			require_once 'views/errorLog.php';        
			require_once 'views/footer.inc';
		}
	}

	public function listadoProductos(){
		$datos = $this->myModel->listado_Productos($_SESSION['idsucursal']);
		require_once 'views/header.inc';		
		require_once 'views/listProducts.php';        
		require_once 'views/footer.inc';
	}

	public function formNewProduct(){
		require_once 'views/header.inc';		
		require_once 'views/add.php';        
		require_once 'views/footer.inc';
	}

	public function formUpdate(){
	session_start();
	$datos = $this->myModel->pro_select($_REQUEST['id']);
		require_once 'views/header.inc';		
		require_once 'views/formUpdate.php';        
		require_once 'views/footer.inc';
	}
	public function updateProduct(){
		session_start();
		$datos = $this->myModel->update_pro($_REQUEST['id'],$_REQUEST['nom'],$_REQUEST['des'],$_REQUEST['cont'],$_REQUEST['cat'],$_REQUEST['exi'],$_REQUEST['pre']);
		if($datos > 0){
				require_once 'views/header.inc';		
				require_once 'views/successLog.php';  
            	$myController = new controller();
				$myController->listadoProductos();
		}else{
			require_once 'views/header.inc';		
			require_once 'views/errorLog.php';        
			require_once 'views/footer.inc';
		}

	}
	public function formDelete(){
		session_start();
		$_SESSION['deleteProd'] = $_REQUEST['idpr'];
		require_once 'views/header.inc';		
		require_once 'views/confirmDelete.php';        
		require_once 'views/footer.inc';
	}
	public function btnCancel(){
		session_start();
       	$myController = new controller();
		$myController->listadoProductos();		
	}
	public function deleteProduct(){
		session_start();
		$datos = $this->myModel->delete_pro($_SESSION['deleteProd']);
		if($datos > 0){
				require_once 'views/header.inc';		
				require_once 'views/successLog.php';  
            	$myController = new controller();
				$myController->listadoProductos();
		}else{
			require_once 'views/header.inc';		
			require_once 'views/errorLog.php';        
			require_once 'views/footer.inc';
		}
	}
	public function formRegistro(){
		require_once 'views/header.inc';		
		require_once 'views/formRegistro.php';        
		require_once 'views/footer.inc';
	}
	public function addNewSucursal(){
		$datos = $this->myModel->add_new_sucursal($_REQUEST['email'],$_REQUEST['pass'],$_REQUEST['rfc'],$_REQUEST['enc'],$_REQUEST['pat'],$_REQUEST['mat'],$_REQUEST['suc'],$_REQUEST['dir']);
		if($datos > 0){
			echo "SUCCESS";
			$myController = new controller();
			$myController->Index();
		}else{
			echo "ERROR";
		}
	}
	public function formRecovery(){
		require_once 'views/header.inc';		
		require_once 'views/formRecovery.php';        
		require_once 'views/footer.inc';
	}
	public function recoverPass(){ 
		$subject = "FAST PRICE RECOVER PASS";
		$p="";
		$destino = $_REQUEST['email'];
		$datos = $this->myModel->recover_pass($_REQUEST['email']);
		foreach ($datos as $dato) {
			$p=$dato['pass'];
		}
		$myMsn = "Excelente dia!! Tu password es: ".$p;
		try {
			mail($destino,$subject, $myMsn);
		} catch (Exception $e) {
			echo "Error:".$e;
		}
		$myController = new controller();
		$myController->Index();	
	}
		
}
	?>