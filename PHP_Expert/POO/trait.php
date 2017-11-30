<?php


trait CreatedAt{
    protected $created_at;
    public function getCreatedAt(){
        return $this->created_at;
    }
    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }
}

trait slug{
    protected $slug;
    public function getSlug(){
        return $this->slug;
    }
    public function setSlug($slug) {
        $this->slug = $slug;
    }
}
class User {
    use CreatedAt;
}
class Post {
    use CreatedAt;
    use Slug;
}
class Product {
    use CreatedAt;
    use Slug;
}

$user = new User();
$user->setCreatedAt("Bonjour");
echo $user->getCreatedAt();
?>