(function($){
    function getPostsTitle(page){
        let posts = $('#posts');
        posts.empty();
        $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/posts.php?page=${page}`).done(data =>{
            for (let i = 0;i<data.length;i++){
                let li = $('<li>');
                let a = $(`<a href="article.php?id=${data[i].id}">${data[i].title}</a>`);
                li.append(a);
                posts.append(li);
            }
        });
    }
    getPostsTitle(1);
    
    let lp = $('#last_published');
    $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/posts.php?q=last_published`).done(data =>{
        for(let i=0;i>data.length;i++){
            let div = $('<div>');
            console.log(data.title);
            div.append(data.title);
            lp.append(div);
        }
    });
    
    
    
    $(document).on('click','#next', event =>{
        let target = $(event.target);
        let page = target.data('page');
        if(page>=1 && page <=3){
            getPostsTitle(page);
            target.data('page',page+1);
            $('#previous').data('page',page-1);
            $('#numberpage').html(page);
        }
    });
    
    $(document).on('click','#previous', event =>{
        let target = $(event.target);
        let page = target.data('page');
        if(page>=1 && page <=3){
            getPostsTitle(page);
            target.data('page',page-1);
            $('#next').data('page',page+1);
            $('#numberpage').html(page);
        }
    });
})(jQuery);