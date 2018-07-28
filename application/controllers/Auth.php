<?php
	
	/* 
		* To change this license header, choose License Headers in Project Properties.
		* To change this template file, choose Tools | Templates
		* and open the template in the editor.
	*/
	
	class Auth extends CI_Controller
	{
		public function _construct()
		{
			parent::_construct();
			$this->load->library('javascript');
			$this->load->library('form_validation');
			$this->load->library('session');
			if(!isset($_SESSION['user_logged']))
			{
				echo "<script>alert('Please Login to Continue!')</script>";
				redirect('auth/login','refresh');
			}
		}
		public function home()
		{
			$this->load->view('home');
			
		}
		public function login()
		{
			if(isset($_POST['submit']))
			{
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('password','Password','required');
				
				
				if($this->form_validation->run()==TRUE)
				{
					$username= $_POST['username'];
					$password= md5($_POST['password']);
					$date= date("Y-m-d h:i:sa");
					$ipaddress = '';
					if (getenv('HTTP_CLIENT_IP'))
					$ipaddress = getenv('HTTP_CLIENT_IP');
					else if(getenv('HTTP_X_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
					else if(getenv('HTTP_X_FORWARDED'))
					$ipaddress = getenv('HTTP_X_FORWARDED');
					else if(getenv('HTTP_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_FORWARDED_FOR');
				else if(getenv('HTTP_FORWARDED'))
				$ipaddress = getenv('HTTP_FORWARDED');
				else if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
				else
				$ipaddress = 'UNKNOWN';
				$audit_data=array('Username'=>$username,'Password'=>$password,'time'=>$date,'ipaddress'=>$ipaddress);
				$this->db->insert('audittable',$audit_data);
				$this->db->select('*');
				$this->db->from('userlogin');
				$this->db->where(array('Username' => $username, 'Password' => $password));
				$query1= $this->db->get();
				$user= $query1->row();
				if($user->Username)
				{
				$this->session->set_flashdata("success","You are logged in");
				$_SESSION['user_logged']=TRUE;
				$_SESSION['username']=$user->Username;
				redirect('auth/userdashboard','refresh');
				}
				else
				{
				$this->session->set_flashdata("error","No such account exists");
				redirect('auth/login','refresh');
				
				}
				
				
				}
				}
				$this->load->view('login');
				}
				
				public function registration()
				{
				
				if(isset($_POST['register']))
				{
				$this->form_validation->set_rules('firstname','Firstname','required');
				
				
				}
				
				if($this->form_validation->run()==TRUE)
				{
				
				$name= $_POST['firstname']." ".$_POST['middlename']." ".$_POST['lastname'];
				$fathername= $_POST['fname']." ".$_POST['mname']." ".$_POST['lname'];
				$nationality= $_POST['Nationality'];
				if($nationality=="Others*")
				$nationality=$_POST['nation'];
				
				if(isset($_POST['gender']))
				$gender= $_POST['gender'];
				
				$dateofbirth= $_POST['date'];
				$address= $_POST['house'].", ".$_POST['building']." ,".$_POST['street']." ,".$_POST['city']." ,".$_POST['state'];
				$city=$_POST['city'];
				$state=$_POST['state'];
				$profession=$_POST['prof'];
				if($profession=="Others*")
				$profession=$_POST['prof'];
				$aadhar=$_POST['aadhar'];
				$phone= $_POST['phone'];
				$email=$_POST['email'];
				$income=$_POST['income'];
				$license=$_POST['license'];
				$day=date("d");
				$month=date("m");
				$year= date("Y");
				$benificiary=$year.$month.$day;
					
				
				//generating benificiary id
				$this->db->select_max('benificiary_id');
				$res1 = $this->db->get('userdata');
				
				if ($res1->num_rows() > 0)
				{
				$res2 = $res1->result_array();
				$result = $res2[0]['benificiary_id'];
				
				if(strcmp($benificiary,substr($result,0,8))==0) 
				{
				$benificiary= $result+1;
				}
				
				else
				$benificiary=$benificiary."001";
				}
				else  
				
				$benificiary=$benificiary."001";
				
				
				//adding user data into table
				$data= array(
				'benificiary_id'=>$benificiary,'user_name' => $name,'father_name' => $fathername, 'nationality' =>$nationality,'gender'=>$gender,'address'=>$address
				,'city'=>$city,'state'=>$state ,'profession'=>$profession,'aadhar'=>$aadhar,'phone'=>$phone,'email'=>$email, 'license'=> $license
				);
				$this->db->insert('userdata',$data);
				
				
				//password generation
				
				$string='';
				
				for($i=0;$i<12;$i++)
				{
				$a=rand(0,9);
				$b=chr(rand(97,122));
				$c=chr(rand(65,90));
				$d=chr(rand(33,38));
				$e=rand(1,4);
				if($e==1)
				$string=$string.$a;
				else  if($e==2)
				$string=$string.$b;
				else if($e==3)
				$string=$string.$c;
				else
				$string=$string.$d;
				}   
				$password=$string;
				$encryptedpassword= md5($password);
				
				//adding value into table
				$logincredentials= array('Username'=>$benificiary,'Password'=>$encryptedpassword);
				$this->db->insert('userlogin',$logincredentials);
				//sending mail          
				$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'gecsdhi@gmail.com',
				'smtp_pass' => 'dhi@gecs',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
				);
				$this->load->library('email', $config);
				;
				$this->email->set_newline("\r\n");
				
				$this->email->from('iamakshay.v@gmail.com', 'noreply-dhi');
				$this->email->to($email);
				
				$this->email->subject('Login Credentials');
				$this->email->message('Your username is: '.$benificiary."<br>Your password is:".$password);
				
				if($this->email->send())
				{
				echo "<script>alert('Email has been sent to your mail!');</script>";
				redirect(base_url(),"refresh");
				}
				else
				echo "error";
				}
				
				$this->load->view('registration');
				}
				
				
				
				public function userlogin()
				{
				$this->load->view('login');
				}
				
				
				
				
				public function certi()
				{
				
				
				
				if(isset($_POST['certi']))
				{
				$this->form_validation->set_rules('name','Name','required');
				$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_matching_captcha');
				
				
				
				
				if($this->form_validation->run()==TRUE){   
				echo "done";
				$name=$_POST['name'];
				$optradio=$_POST['optradio'];
				$optradio1=$_POST['optradio1'];
				$optradio2=$_POST['optradio2'];
				$optradio3=$_POST['optradio3'];
				$sel1=$_POST['sel1'];
				if($sel1=="Others*")
				$sel1=$_POST['deformity'];
				$optradio4=$_POST['optradio4'];
				$Figures=$_POST[ 'Figures'];
				$words=$_POST['words'];
				$use_app =$_POST['use_app'];
				$optradio5 = $_POST['optradio5'];
				
				
				
				$dat= array(
				'name' =>$name ,
				'generalmedicalcondition' => $optradio,
				'generalstateofhealth' => $optradio1,
				'vision' => $optradio2,
				'hearing' => $optradio3,
				'stateofmentalhealth' => $optradio4,
				'impairment' => $sel1,
				'percentageofdisability' => $Figures,
				'use_app' => $use_app,
				'permanantnature' => $optradio5
                );
				$this->db->insert('tabledoctor', $dat);
				
				
				//        redirect("http://google.com","refresh");
				}
				
                
				
				
				
				
				}
				$this->load->helper('captcha');
				$vals = array(
				'img_path' => './captcha/',
				
				'img_url' => base_url().'captcha/',
				
				'expiration' => 7200,
				
				'word_lenght' => 8,
				
				'font_size' => 22
				);
				$cap = create_captcha($vals);
				$data['captcha'] = $cap['image'];
				$this->session->set_userdata('captchaWord', $cap['word']);
				$this->load->view('certi',$data);
				}
				public function matching_captcha($str){
				if(strtolower($str) != strtolower($this->session->userdata('captchaWord'))){
				$this->form_validation->set_message('matching_captcha', 'The {field} did not matching');
				return false;
				}else{
				$this->load->library('Pdf');
				$this->load->view('makepdf');
				return true;
				}
				}
				
				public function dashboard()
				{
				if(isset($_POST['changepasswordbutton']))
				{
				redirect('changepassword');
				}
				$this->load->view('dashboard');
				}
				public function dashboardtable()
				{
				$this->load-> model('Auth_model');
				
				$da["getUser"]=$this->Auth_model->getUser();
				
				$this->load->view('dashboardtable',$da);
				
				
				}
				public function doctorlogin()
				{
				if(isset($_POST['submit']))
				{
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('password','Password','required');
				
				
				if($this->form_validation->run()==TRUE)
				{
				$username= $_POST['username'];
				$password=$_POST['password'];
				$date= date("Y-m-d h:i:sa");
				
				$this->db->select('*');
				$this->db->from('doctorlogin');
				$this->db->where(array('Username' => $username, 'Password' => $password));
				$query1= $this->db->get();
				$user= $query1->row();
				if($user->Username)
				{
				$this->session->set_flashdata("success","You are logged in");
				$_SESSION['user_logged']=TRUE;
				$_SESSION['username']=$user->Username;
				redirect('auth/dashboard','refresh');
				}
				else
				{
				echo "<script>alert('Incorrect Usename/Password');</script>";
				redirect('auth/doctorlogin','refresh');
				}
				
				
				}
				}
				$this->load->view('doctorlogin');
				}
                                public function departmentcertificate()
                                {
                                     $this->load->library('Pdf');
				$this->load->view('departmentcertificate');
                                }
				public function userdashboard()
				{
				$this->load->library('Pdf');
				$this->load->view('userdashboard');
                               
				}
				public function userchangepassword()
				{
				if(isset($_POST['changepasswordbutton']))
				{
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('currentpassword','Current Password','required');
				$this->form_validation->set_rules('newpassword','New Password','required|min_length[5]');
				$this->form_validation->set_rules('newpasswordcheck','Confirm new password','required|min_length[5]|matches[newpassword]');
				
				if($this->form_validation->run()==TRUE)
				{
				$username=$_POST['username'];
				$current= $_POST['currentpassword'];
				$new=$_POST['newpassword'];
				$confirm=$_POST['newpasswordcheck'];
				$password=$new;
				$data=array('password'=>md5($new));

$this->db->where('username',$username);
$this->db->update('userlogin',$data);
				echo "<script>alert('done');</script>";
				}
				}
				$this->load->view('userchangepassword');
				}
				public function changepassword()
				{
				if(isset($_POST['changepasswordbutton']))
				{
				
				$this->form_validation->set_rules('currentpassword','Current Password','required');
				$this->form_validation->set_rules('newpassword','New Password','required|min_length[5]');
				$this->form_validation->set_rules('newpasswordcheck','Confirm new password','required|min_length[5]|matches[newpassword]');
				
				if($this->form_validation->run()==TRUE)
				{
				$username=$_POST['username'];
				$current= $_POST['currentpassword'];
				$new=$_POST['newpassword'];
				$confirm=$_POST['newpasswordcheck'];
				$password=$new;
				$data=array('password'=>$new);

$this->db->where('username',$username);
$this->db->update('userlogin',$data);
				echo "<script>alert('done');</script>";
				}
				}
				$this->load->view('changepassword');
				}
				
				}
								