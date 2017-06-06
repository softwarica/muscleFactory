<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model{
public function saveMember($mname,$image,$address,$email,$contact,$jdate,$package){
$arr=array(
'mname'=>$mname,
'image'=> $image,
'address'=>$address,
'email'=>$email,
'contact'=>$contact,
'jdate'=>$jdate,
'package'=>$package
);

$this->db->insert("tblregister",$arr);

}

public function retriveMember(){
  $result=$this->db->get("tblregister");
  return $result;
}

public function deleteMember($id){
$this->db->where("id",$id);
$this->db->delete("tblregister");
}

public function retriveMemberById($id){
	$this->db->where("id",$id);
	$result=$this->db->get("tblregister");
	return $result;
}

public function updateMember($id,$mname,$address,$email,$contact,$jdate,$package){
	$arr=array(
		"id"=>$id,
		"mname"=>$mname,
		"address"=>$address,
		"email"=>$email,
		"contact"=>$contact,
		"jdate"=>$jdate,
		"package"=>$package
		);
$this->db->where("id",$id);
$this->db->update("tblregister",$arr);
}

public function getImage(){
	
}
}
?>
