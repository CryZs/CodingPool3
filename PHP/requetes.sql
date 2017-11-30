SELECT post.*, user.name, AVG(comment.rate) 
FROM post 
LEFT JOIN comment ON post.id = comment.post_id 
LEFT JOIN user ON post.author_id = user.id 
GROUP BY post.title
LIMIT $limit
OFFSET $offset