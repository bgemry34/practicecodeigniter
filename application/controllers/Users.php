<?php
	class Users extends CI_Controller{
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 
			'required|matches[password]');

			if(!$this->form_validation->run()){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			}else{
				//encryp password
				$enc_password=md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('posts');
			}

		}

		//log in user
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if(!$this->form_validation->run()){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			}else{
				//get username
				$username = $this->input->post('username');
				
				//get and encrypt the password
				$password =  md5($this->input->post('password'));

				//login user
				$user_id = $this->user_model->login($username,$password);

				if($user_id){
					//create session
					$user_data = array(
						'user_id'=>$user_id,
						'username'=>$username,
						'logged_in'=> TRUE
					);

					$this->session->set_userdata($user_data);

					//set message
					$this->session->set_flashdata('user_login', 'You are now logged in');
					redirect('posts');

				}else{
					//set message
					$this->session->set_flashdata('login_failed', 'Invalid Username or Password ');
					redirect('users/login');
				}
			}

		}

		//user log out
		public function logout(){
			//unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout', 'You are now logged out!');
			redirect('users/login');
		}


		//check if username exist
		function check_username_exists($username){
			$this->form_validation->
			set_message('check_username_exists', 'That Username is taken. Please choose a different one');

			if($this->user_model->check_username_exists($username)){
				return true;
			}else{
				return false;
			}
		}

		function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Email Already used. Try another one');
			
			if($this->user_model->check_email_exists($email)){
				return true;
			}else{
				return false;
			}
		}
	}
