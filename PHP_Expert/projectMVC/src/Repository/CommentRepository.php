<?php

namespace App\Repository;

use Core\Database\Repository;

class CommentRepository extends Repository{

    public function findPostComments($post_id){
        //PAS DE TABLE COMMENTS DONC COMMENTAIRE
//        $stmt = $this->db->query("SELECT * FROM comment WHERE comment.post_id = $post_id");
//        $comments = $stmt->fetchAll();
//        return $comments;
        return [];
    }
}