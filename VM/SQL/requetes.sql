


SELECT post.title, AVG(comment.rate) FROM post LEFT JOIN comment ON comment.post_id = post.id GROUP BY post.title HAVING AVG(comment.rate)<10 ;



-- 3 users les mieux notés

SELECT user.name, AVG(comment.rate) 
FROM post 
LEFT JOIN comment ON comment.post_id = post.id
LEFT JOIN user ON post.author_id = user.id
GROUP BY user.name
ORDER BY AVG(comment.rate) DESC
LIMIT 5;


-- Requetes préparées

-- main page
SELECT `post`.`title`, LEFT(post.content, 100) as preview, post.published_at, user.name FROM post
LEFT JOIN user ON post.author_id = user.id;