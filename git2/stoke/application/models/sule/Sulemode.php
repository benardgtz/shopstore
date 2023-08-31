<?php
class Sulemode extends CI_Model{

      public function __construct (){
            parent::__construct ();
      
         }

      function insert($pid,$pname,$price,$status,$qty){
      $post_data=[
         'pid'=>$pid,
         'pname'=>$pname,
         'price'=>$price,
         'status'=>$status
      ];
      $this->db->insert('product', $post_data);

      $data =[
         'pi'=>$pid,
         'qty'=>$qty
      ];
      $this->db->insert('kiwango',$data);
    }
       
    function getproduct()
    {
   return $this->db->query("select * from product as p left join kiwango as k on k.pi = p.pid")->result();
    }
    function count()
           {
              $keyword=$this->input->get('keyword');        
              $this->db->like('pid', $keyword);
              $this->db->or_like('pcode',$keyword); 
              $this->db->or_like('pname',$keyword); 

             return $this->db->get('product')->num_rows();
          }

          //delete product secton

          function delete_product($pid)
          {
            $query=$this->db->query("delete from 'product' where pid='$pid'");
         // $this->db->where("pid",$pid);
         // $this->db->delete("product");
         return true;
         
         }
         

         //update of product

         function getBy_using_id($pid)
           {
   $query=$this->db->query("select * from product where pid='".$pid."'");
   return $query->result();
 }	
 function product_update($pid,$pname,$price,$status)
 {
  $query=$this->db->query("update product SET pid='$pid', pname='$pname',price='$price',status='$status', time=DEFAULT where pid='".$pid."'");
  }	

          public function get_current_record($limit, $start){
            $this->db->limit($limit,$start);
            $query=$this->db->get("product");
            if($query->num_rows()>0){
               foreach($query->result() as $row){
                  $data[]=$row;
               }
               return $data;
            }
            return false;
          }

          public function get_total() 
          {
             return $this->db->count_all("product");
          }


          //login/chek of user 

          function check_user($username,$password){
            $this->db->select('*');//select all
            $this->db->from('users');//from table_name
            $this->db->where('email',$username); //where username is equal to $username 
            $this->db->where('password',$password);//and password is equal to $password
            $query=$this->db->get(); //get data from db
            return $query;
            
         
         } 
         
}
?>