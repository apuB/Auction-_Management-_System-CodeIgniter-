<?php
class AuctionModel extends CI_Model
{
	function registration()
		{
			$reg=$this->input->post('reg');
			if(isset($reg))
			{
				$type=$this->input->post('typ');
				if($type=="Seller")
				{
			
				$name=$this->input->post('snm');
				//$gender=$this->input->post('sgn');
				//$city=$this->input->post('scity');
				$email=$this->input->post('semail');
				//$this->db->where('email',$email);
				//$query=$this->db->get('seller1');
				//$error=0;
				//if ($query->num_rows > 0)
			//	{
			//		$error++;
			//	}
				$pass=$this->input->post('spass');
				//date_default_timezone_set("Asia/Kolkata");
				//$date=date("d-m-y h:i:sa");
				$insertarray = array(
						'seller_name'			=>		$name,
						//'gender'		=>		$gender,
						//'location'		=>		$city,
						'seller_email'			=>		$email,
						'seller_password'		=>		$pass,
						//'date'			=>		$date
				);
			//	if ($error==0)
			//	 {
				 	//$this->db->insert('seller1',$insertarray);
					if($this->db->insert('seller',$insertarray))
					{
						return true;
					}
					else
					{
						return false;
					} 
				}
				else if($type=="Buyer")
				{
					
				$name=$this->input->post('snm');
				//$gender=$this->input->post('sgn');
				//$city=$this->input->post('scity');
				$email=$this->input->post('semail');
				//$this->db->where('email',$email);
				//$query=$this->db->get('seller1');
				//$error=0;
				//if ($query->num_rows > 0)
				//{
				//	$error++;
				//}
				$pass=$this->input->post('spass');
				//date_default_timezone_set("Asia/Kolkata");
				//$date=date("d-m-y h:i:sa");
				$insertarray = array(
						'buyer_name'			=>		$name,
						//'gender'		=>		$gender,
						//'location'		=>		$city,
						'buyer_email'			=>		$email,
						'buyer_password'		=>		$pass,
						//'date'			=>		$date
				);
				//if ($error==0) {
					if($this->db->insert('buyer',$insertarray)){
						return true;
					}else{
						return false;
					}
				}	
				}
			}
	function buyersignin()
	{
		$email=$this->input->post('buyeremail');
		$pass=$this->input->post('buyerpass');
		$this->db->where('buyer_email',$email);
		$this->db->where('buyer_password',$pass);
		$query=$this->db->get('buyer');
		if ($query->num_rows()>0) {
			//return $query->result_array();
			return true;
		}
		else
		{
			return false;
		}
	}
	function buyersigninsuccess()
	{
		$email=$this->input->post('buyeremail');
		$pass=$this->input->post('buyerpass');
		$this->db->where('buyer_email',$email);
		$query=$this->db->get('buyer');
		$result=$query->row();
		$id=$result->buyer_id;
		$name=$result->buyer_name;
		$details=array(
			'buyername'	=>	$name,
			'buyerid'	=>	$id
		);
		$logindetails=$this->session->set_userdata($details);
		return $logindetails;
	}
	function sellersignin()
	{
		$email=$this->input->post('selleremail');
		$pass=$this->input->post('sellerpass');
		$this->db->where('seller_email',$email);
		$this->db->where('seller_password',$pass);
		$query=$this->db->get('seller');
		if ($query->num_rows()>0) {
			//return $query->result_array();
			return true;
		}
		else
		{
			return false;
		}
	}
	function sellersigninsuccess()
	{
		$email=$this->input->post('selleremail');
		$pass=$this->input->post('sellerpass');
		$this->db->where('seller_email',$email);
		$query=$this->db->get('seller');
		$result=$query->row();
		$id=$result->seller_id;
		$name=$result->seller_name;
		$details=array(
			'sellername'	=>	$name,
			'sellerid'		=>	$id
		);
		$logindetails=$this->session->set_userdata($details);
		return $logindetails;
	}
	function auctionstatus()
	{
		$this->db->where('auction_status','unsold');
		$query=$this->db->get('product');
		return $query->result_array();
	}

	function sellerlogout()
	{
		$this->session->unset_userdata('sellerid');
		$this->session->unset_userdata('sellername');
		$this->session->sess_destroy();
	}



	function startauction()
	{
		$this->db->where('auction_status','unsold');
		$query=$this->db->get('product');
		return $query->result_array();
	}

	function getcart()
	{
		$id=$this->session->userdata('buyerid');
		$this->db->where('buyer_id',$id);
		$this->db->where('auction_status','sold');
		$query=$this->db->get('product');
		if ($query->num_rows()>0) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function viewcart()
	{
		$id=$this->session->userdata('buyerid');
		$this->db->where('buyer_id',$id);
		$this->db->where('auction_status','sold');
		$query=$this->db->get('product');
	}
	
	function buyerlogout()
	{
		$this->session->unset_userdata('buyerid');
		$this->session->unset_userdata('buyername');
		$this->session->sess_destroy();
	}
	

}

?>