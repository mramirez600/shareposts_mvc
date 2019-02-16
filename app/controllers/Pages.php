<?php
  class Pages extends Controller {
    public function __construct(){
      // $this->postModel = $this->model('Post');
    }
    
    public function index(){
     
      // $posts = $this->postModel->getPosts();
     
      $data = [
        'title' => 'Shareposts',
        'description' => 'Simple social network built on the PHPMVC Framework'
        // 'posts' => $posts
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }