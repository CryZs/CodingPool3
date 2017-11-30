(function($){
    function last_published_getPostsTitle(page){
        let posts = $('#last_published');
        posts.empty();
        $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/posts.php?q=last_published&page=${page}`).done(data =>{
            for (let i = 0;i<data.length;i++){
                let li = $('<li>');
                let a = $(`<h3><a href="article.php?id=${data[i].id}">${data[i].title}</a></h3>`);
                let content = $('<div>');
                content.append(data[i].body2+' ...');
                let details = $('<div>');
                details.append('écrit par '+data[i].name+" - publié le "+data[i].published_at);
                li.append(a);
                posts.append(li);
                posts.append(details);
                posts.append(content);
            }
        });
    }
    last_published_getPostsTitle(1);
    
    function most_popular_getPostsTitle(){
        let posts = $('#most_popular');
        posts.empty();
        $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/posts.php?q=most_popular`).done(data =>{
            for (let i = 0;i<data.length;i++){
                let li = $('<li>');
                let a = $(`<h3><a href="article.php?id=${data[i].id}">${data[i].title}</a></h3>`);
                let content = $('<div>');
                content.append(Math.round(data[i].moyenne)+"/20 - écrit par : "+data[i].author);
                li.append(a);
                posts.append(li);
                posts.append(content);
            }
        });
    }
    most_popular_getPostsTitle();
    
    function best_authors_getPostsTitle(){
        let posts = $('#best_authors');
        posts.empty();
        $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/posts.php?q=best_authors`).done(data =>{
            for (let i = 0;i<data.length;i++){
                let user = $('<li>');
                if(data[i].note_user !== null){
                user.append(data[i].name +" <i>"+Math.round(data[i].note_user)+"</i>");
                posts.append(user);
                }
            }
        });
    }
    best_authors_getPostsTitle();
    
    
    $(document).on('click','#next', event =>{
        let target = $(event.target);
        let page = target.data('page');
        console.log(page);
        if(page>=1 && page <=3){
            last_published_getPostsTitle(page);
            target.data('page',page+1);
            $('#previous').data('page',page-1);
            $('#numberpage').html(page);
        }
    });
    
    $(document).on('click','#previous', event =>{
        let target = $(event.target);
        let page = target.data('page');
        console.log(page);
        if(page>=1 && page <=3){
            last_published_getPostsTitle(page);
            target.data('page',page-1);
            $('#next').data('page',page+1);
            $('#numberpage').html(page);
        }
    });
})(jQuery);