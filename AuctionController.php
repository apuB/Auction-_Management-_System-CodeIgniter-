<?php

class AuctionController extends CI_Controller
{
	
	function index()
	{
		$this->load->view('auctionhome');
		/*$image_properties = array(
        'src'   => 'pexels-photo-193004.jpg',
        'alt'   => 'Me, demonstrating how to eat 4 slices of pizza at one time',
        'class' => 'post_images',
        'width' => '200',
        'height'=> '200',
        'title' => 'That was quite a night',
        'rel'   => 'lightbox'
		);
		img($image_properties);*/
	}
	function contact(){
			$this->load->view('auctionhome');
			$this->load->view('ProContact');
	}
	function signupform(){
			$this->load->view('auctionhome');
			$this->load->view('ProRegister');	
	}
	function register(){
			$this->load->model('AuctionModel');
			$status=$this->AuctionModel->registration();
			if ($status==true) {
				$message['msg']="<script>alert('Successfully registered');</script>";
			}else{
				$message['msg']="<script>alert('Unsuccessfully registered');</script>";	
			}
			$this->load->view('auctionhome',$message);
	}
	function buyersignin()
	{
		$this->load->view('auctionhome');
		$this->load->view('buyersignin');
		
	}
	function buyersigninsuccess()
	{
		$this->load->model('AuctionModel');
		$status=$this->AuctionModel->buyersignin();
		if ($status==true) {
			$buyerinfo['msg1']=$this->AuctionModel->buyersigninsuccess();
			//$this->load->view('auctionhome');
			$this->load->view('buyermain',$buyerinfo);
		}
		else{
			$message['msg']="inavlid login";
			$this->load->view('auctionhome');
			$this->load->view('buyersignin',$message);
		}
	}
	function sellersignin()
	{
		$this->load->view('auctionhome');
		$this->load->view('sellersignin');
	}

	function sellersigninsuccess()
	{
		$this->load->model('AuctionModel');
		$status=$this->AuctionModel->sellersignin();
		if ($status==true) {
			$sellerinfo['msg1']=$this->AuctionModel->sellersigninsuccess();
			//$this->load->view('auctionhome');
			$this->load->view('sellermain',$sellerinfo);
		}
		else{
			$message['msg']="inavlid login";
			$this->load->view('auctionhome');
			$this->load->view('sellersignin',$message);
		}
	}

	function productupload()
	{
		$this->load->view('sellermain');
		$this->load->view('productupload');
	}

	function upload()
	{
		$config['upload_path']          = '.view/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('uploads', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            echo "<center>Error</center>";
            $this->load->view('sellermain');
            $this->load->view('productupload');
        }
  
        else
        {
            $filename = $this->upload->data('file_name');
            $pname=$this->input->post('name');
			$pdesc=$this->input->post('desc');
			$pinitprice=$this->input->post('initprice');
			$id=$this->session->userdata('sellerid');
			$name=$this->session->userdata('sellername');
			$status="unsold";
            $array=array(
            	'product_name'	=> $pname,
				'product_desc'	=> $pdesc,
				'seller_id'		=> $id,
				'seller_name'	=> $name,
				'initprice'		=> $pinitprice,
				'lastbid'		=> $pinitprice,
				'image'			=> $filename,
				'auction_status'=> $status    	
            );

            $this->db->insert('product', $array);
			if ($status==true) {
				$message['msg']="Successfully uploaded. Waiting for Admin's approval";
				$this->load->view('sellermain');
				$this->load->view('productupload',$message);
			}
			else
			{
				$message['msg']="Update Error";
				$this->load->view('productupload',$message);
			}				
        }
	}

	function auctionstatus()
	{
		$this->load->model('AuctionModel');
		$sellerinfo['msg1']=$this->AuctionModel->auctionstatus();
		$this->load->view('sellermain',$sellerinfo);
	}

	function sellerlogout()
	{
		$this->load->model('AuctionModel');
		$this->AuctionModel->sellerlogout();
		$this->load->view('auctionhome');
		$this->load->view('sellersignin');
	}
	
	function startauction()
	{
		$this->load->model('AuctionModel');
		$buyerinfo['msg1']=$this->AuctionModel->startauction();
		$this->load->view('buyermain',$buyerinfo);
	}

	function getcart()
	{
		$this->load->model('AuctionModel');
		$status=$this->AuctionModel->getcart();
		if ($status==true) {
			$buyerinfo['msg2']=$this->AuctionModel->viewcart();
			$this->load->view('buyermain',$buyerinfo);
		}
		else
		{
			$message['msg']="No items in cart";
			$this->load->view('buyermain',$message);
		}
	}

	function buyerlogout()
	{
		$this->load->model('AuctionModel');
		$this->AuctionModel->buyerlogout();
		$this->load->view('auctionhome');
		$this->load->view('buyersignin');
	}
}
?>