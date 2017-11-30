<?php 
namespace App\Controller;

use App\Repository\PostRepository;
use Core\Controller\Controller /* as Test */;
use App\Repository\CommentRepository;

//require_once __DIR__.'/../../core/Controller/Controller.php';


class PostsController extends Controller /* or "Test" */{
    public function getPosts(){
        $postRepository = new PostRepository();
        
        
        $popular = $postRepository->findPopular();
        $new = $postRepository ->findNew();
        
        $commentsRepository = new CommentRepository();
        $comments = $commentsRepository->findPostComments(1);
        
        $this->render("posts.php",[
            'popular' => $popular,
            'new' => $new
        ]);
    }
    // ===== EXO ===== //
    public function getPost($id){
        $postRepository = new PostRepository();
        $post = $postRepository->find($id);
        
        $commentRepository = new CommentRepository();
        $comments = $commentRepository->findPostComments($id);
        
        $this->render("post.php",[
            'post' => $post,
            'comments' => $comments
        ]);
    }
    
    // ======= JSON ====== //
    public function getJSONPosts(){
        $postRepository = new PostRepository();
        $post = $postRepository->findPopular();
        $this->json(["post" => $post]);
    }
}
