<?php
class HomeModel extends MainModel
{
    public function list(){
        $sql="SELECT * FROM moviment";
        $retorno=$this->db->query($sql, null);
		While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
			$resultado[]=$item;
        }
        return $resultado;
        }

        public function date(){
            $sql="SELECT DISTINCT date FROM moviment";
            $retorno=$this->db->query($sql, null);
            While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
                $resultado[]=$item;
            }
            return $resultado;
            }
        
        public function input(){
                $sql="SELECT value,date FROM moviment m WHERE date= m.date AND type='input'";
                $retorno=$this->db->query($sql, null);
                While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
                    $resultado[]=$item;
                }
                return $resultado;
                }

        public function output(){
                    $sql="SELECT value,date FROM moviment m WHERE date= m.date AND type='output'";
                    $retorno=$this->db->query($sql, null);
                    While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
                        $resultado[]=$item;
                    }
                    return $resultado;
                    }

        public function tinput(){
                        $sql="SELECT SUM(value) FROM moviment m WHERE date= m.date AND type='input'";
                        $retorno=$this->db->query($sql, null);
                        While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
                            $resultado[]=$item;
                        }
                        return $resultado;
                        }     
                        
                        public function toutput(){
                            $sql="SELECT SUM(value) FROM moviment m WHERE date= m.date AND type='output'";
                            $retorno=$this->db->query($sql, null);
                            While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
                                $resultado[]=$item;
                            }
                            return $resultado;
                            }
        }