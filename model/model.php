<?php 
class model{
	private $db;
	private $myDataGet=array();
	public function __construct(){
		$this->db=Conectar::conexion();
		$this->myDataGet=array();
	}

    public function validacion($email,$pass){
        $contador=0;
        $consulta=$this->db->query("select * from sucursales where email='".$email."' and pass='".$pass."'");
        while ($filas=$consulta->fetch_assoc()) {
            $contador++;
        }
        if($contador>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function add_new_sucursal($email,$pass,$rfc,$enc,$pat,$mat,$suc,$dir){
        $consulta=$this->db->query("insert into sucursales values(null,'$email','$pass','$rfc','$suc','$enc','$pat','$mat','$dir','SIN PAGAR','');");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function add_new_pro($idsucursal,$nom,$des,$cont,$cat,$exi,$pre){
        $consulta=$this->db->query("insert into productos values(null,$idsucursal,'$nom','$des','$cont','$cat','img',$exi,$pre);");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function pro_select($idpro){
        $consulta=$this->db->query("select * from productos where idproducto=".$idpro."");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function update_pro($id,$nom,$des,$cont,$cat,$exi,$pre){
        $consulta=$this->db->query("update productos set nombre_pro='$nom', descripcion='$des', contenido='$cont', categoria='$cat',existencia=$exi, precio=$pre where idproducto=$id;");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function delete_pro($id){
        $consulta=$this->db->query("delete from productos where idproducto=$id;");
        if($consulta>0){
            return 1;
        }else{
            return 0;
        }
    }
    public function get_id_sucursal($email,$pass){
        $consulta=$this->db->query("select * from sucursales where email='".$email."' and pass='".$pass."'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function listado_productos($ids){
        $consulta=$this->db->query("select * from productos where idsucursal=$ids");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;
        }
        return $this->myDataGet;
    }
    public function recover_pass($email){
        $consulta=$this->db->query("select * from sucursales where email='$email'");
        while ($filas=$consulta->fetch_assoc()) {
            $this->myDataGet[]=$filas;       
        }
        return $this->myDataGet;
    }
}
?>