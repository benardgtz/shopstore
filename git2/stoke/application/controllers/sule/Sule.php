<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sule extends CI_Controller {
    public function __construct(){
        parent::__construct();
 if(empty($this->session->userdata('can_access'))){
            redirect('sule/Log');
         }

        $this->load->model('sule/Sulemode');
        $this->load->library('pagination');
     
        $this->load->library('session');
    }
        public function index(){
            

            $this->load->view('sule/ben');
            
        }


        public function stoke(){
           
            $this->load->view('sule/stoke-in');
            if($this->input->post('submit')){
                $pid=$this->input->post('pid');
                $pname=$this->input->post('pname');
                $price=$this->input->post('price');
                $status=$this->input->post('status');
                $quantity=$this->input->post('quantity');
              $this->Sulemode->insert($pid,$pname,$price,$status,$quantity);
               $this->session->set_flashdata('success','product delivered successfull');
                redirect('sule/Sule/stoke');
                }
            }

            public function productoverview()
            {
                $result['product']=$this->Sulemode->getproduct();
                $this->load->view('sule/productview',$result);
            }

            public function sumproduct(){
                $this->load->view('sule/sumproduct');
            }
            

            public function product_record(){
                //initialize parameter
                $this->load->model('sule/Sulemode');
                $params=array();
                $limit_per_page=1;
                $start_index=($this->uri->segment(3))? $this->uri->segment(3):0;
                $total_records= $this->Sulemode->get_total();
                if($total_records>0){

                    //get current page records
     
                   $params["result"]= $this->Sulemode->get_current_record($limit_per_page,$start_index);
                   $config['base-url']=base_url().'';
                   $config['total_rows']=$total_records;
                   $config['per_page']=$limit_per_page;
                   $config['uri_segment']=3;
                   $this->pagination->initialize($config);
                   $params["link"]=$this->pagination->create_links();

                }
                $this->load->view('sule/productpage',$params);
            }

            public function product_update()
   {
    $this->load->model('sule/sulemode');
    $pid=$this->input->get('pid');
    $result['product']=$this->sulemode->getBy_using_id($pid);
    $this->load->view('sule/product_update',$result);

		if($this->input->post('update'))
		{
		$t=$this->input->post('pid');
	
		$d=$this->input->post('pname');
        $s=$this->input->post('price');
        $ps=$this->input->post('status');

        $this->load->model('sule/sulemode');
		$this->sulemode->product_update($t,$d,$s,$ps);
        $this->session->set_flashdata('update','data updated successfully');
        redirect('sule/sule/productoverview');

	     
		}
	}


  

            public function stokeout(){
                $this->load->view('sule/stokeout');
            }   
//deleting of product
            public function delete_product(){

                $pid=$this->input->post('pid');
                $this->load->model('sule/sulemode');
                $this->sulemode->delete_product($pid); 
                echo 1; 
            }
            function purchase(){
                $data['products']= $this->db->query('SELECT * from product as p inner join kiwango as k on k.pi =p.pid  and k.qty>0')->result();//hii query inarudisha product zote ambazo zina quantity greater than 0
                $this->load->view('sule/purchase',$data);
                if($_POST){
                    $product_id =$_POST['product'];
                    $quantity =$_POST['amount'];
                    //insert to purchase table
                   
                    
                    //then natafuta quantity ya product
                    $available_qty =$this->db->query("SELECT qty from kiwango where pi ='$product_id'")->result_array();
                    // print $available_qty[0]['qty'];
                    // // print $quantity[0];
                    // exit;
                   if($available_qty[0]['qty']>=$quantity){
                    // print $quantity[0]['qty'];
                    // // print $available_qty[0];
                    // echo "there is no enough 3product to purchase";
                    // // exit;
                    $getprice =$this->db->query("SELECT * from product where pid ='$product_id'")->result_array();
                    $amount =$getprice[0]['price'] * $quantity;
                   $quan =$available_qty[0]['qty'];
                    //insert sales to purchase table
                    $collected_data =[
                        'pid'=>$product_id,
                        'amount'=>$amount
                    ];
                    $this->db->insert('purchases',$collected_data);
                    //update qunatity to the kiwango table
                    $quantity =$quan - $quantity;
                    $this->db->where('pi',$product_id);
                    $this->db->update('kiwango',['qty'=>$quantity]);

                    //return your message to user
                    $this->session->set_flashdata('success','Producted purchesed successfuly');
                    return redirect('sule/Sule/purchase');
                   }
                   else
                   {
                    $this->session->set_flashdata('error','there id no enough product to sale');
                    return redirect('sule/Sule/purchase');
                    // echo "there is no enough product to purchase";
                   }
                }
            }
            
            public function totalsale(){
            //  $query=$this->db->select_sum("purchases.amount")
            //  ->from("purchases")
            // //  $this->db->select('(SELECT SUM(purchases.amount)
            // //   FROM purchases 
            // //   WHERE purchases.amount=CURDATE()) 
            // //   AS amount_paid', FALSE);
            //  ->where("purchases.created_at=CURDATE()")
            //  ->get();


            $sum=$this->db->query(
                "SELECT SUM(amount) AS Total FROM purchases" 
            );
            if( $sum->num_rows() > 0 )
            {
                return $sum->result_array();
                print $sum[0]['amount'];
            }
            else{
                echo "my error";
            }
            
          
            exit;
            // print $sum[0]['amount'];
            // exit;
            //  $query=$query->result();
             return $query->result();
             echo  "'.$query.'";
             exit;
            }
       

public function logout()
{   //  $this->session->unset_userdata(array('username','password'));
$this->session->sess_destroy();
redirect('sule/Log');
}


}

?>

