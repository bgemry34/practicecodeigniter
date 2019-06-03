<?php
	class Posts extends CI_Controller
	{
		public function index(){
			$data['title'] = 'Latest Posts';
			$data['posts'] = $this->post_model->get_posts();
 
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);

			if(empty($data['post'])){
				show_404();
			}

			$this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer'); 
		}

		public function create(){
			$data['title'] = 'Create Post';
			$data['categories'] = $this->post_model->get_categories();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if(!$this->form_validation->run()){
			$this->load->view('templates/header');
            $this->load->view('posts/create', $data); 
            $this->load->view('templates/footer'); 
			}
			else{
				//upload image
				$config['upload_path'] = './assets/images/posts';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$path_parts = pathinfo($_FILES["userfile"]["name"]);
				$post_image = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];
				$config['file_name'] = $post_image;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors=array('error' => $this->upload->display_errors());
					$post_image='noimage.jpeg';
				}else{
					//problem uploading still not changed by time in the end of
					//filename so even if the filename is same still can upload due to its uniqueness of time
					//problem unsolved
					$data = array('upload_data' => $this->upload->data());
				}

				$this->post_model->create_post($post_image);
				header("location: ".base_url()."posts");
			}
		}

		public function delete($id){
			$this->post_model->delete_post($id);
			header("location: ".base_url()."posts");
		}

		public function edit($slug){
			$data['post'] = $this->post_model->get_posts($slug);
			$data['categories'] = $this->post_model->get_categories();


			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = 'Edit Post';

			$this->load->view('templates/header');
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/footer');
		}

		public function update(){
			$this->post_model->update_post();
			redirect('posts');
		}
	}
	