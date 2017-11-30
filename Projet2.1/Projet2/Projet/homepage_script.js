(function($){
    function last_published_getPostsTitle(page){
        let mainContent = $('.mainContent');
        mainContent.empty();
        $.get(`https://workspace-cryz.c9.io/CodingPool3/Projet2.1/Projet2/Projet/posts.php?q=last_published&page=${page}`).done(data =>{
            for (let i = 0;i<data.length;i++){
                let article = $('<div>').addClass('article');
                let labelTitle = $('<div>').addClass('labelTitle');
                labelTitle.append('<div class="dashed-border label"></div><h1>'+data[i].title+'</h1>');
                
                
                article.append(labelTitle);
                
                let bodyArticle = $('<div>', {id :"bodyArticle", "class": "row top-xs"});
                let imgArticle = $('<div>', {id :"imgArticle", "class": "col-xs-4"});
                let contentArticle = $('<div>', {id :"contentArticle", "class": "col-xs-8"});
                contentArticle.append("<p>"+data[i].body+"</p>");
                bodyArticle.append(imgArticle);
                bodyArticle.append(contentArticle);
                bodyArticle.append(`<button class='readMore'><a href="article.php?id=${data[i].id}">Lire la suite</a></button>`);
                article.append(bodyArticle);
                
                let row = $('<div>').addClass("row");
                let legend = $('<div>', {id:"legendArticle", "class":"col-xs-6"});
                legend.append("<span class=''>"+data[i].published_at+"</span> - écrit par <span class='writerArticle'>"+data[i].name+"</span>");
                
                row.append(legend);
                row.append('<hr/>');
                article.append(row);
                mainContent.append(article);
            }
            // mainContent.append("<button id='previous' data-page='0'>Previous</button><div id='numberpage' style='display:inline-block'>1</div><button id='next' data-page='2'>Next</button>");
        });
        
        // let posts = $('#last_published');
        // posts.empty();
        // $.get(`https://workspace-cryz.c9.io/CodingPool3/Projet2.1/Projet2/Projet/posts.php?q=last_published&page=${page}`).done(data =>{
        //     for (let i = 0;i<data.length;i++){
                
                
                
        //         let li = $('<li>');
        //         let a = $(`<h3><a href="article.php?id=${data[i].id}">${data[i].title}</a></h3>`);
        //         let content = $('<div>');
        //         content.append(data[i].body2+' ...');
        //         let details = $('<div>');
        //         details.append('écrit par '+data[i].name+" - publié le "+data[i].published_at);
        //         li.append(a);
        //         posts.append(li);
        //         posts.append(details);
        //         posts.append(content);
        //     }
        // });
    }
    last_published_getPostsTitle(1);
    
    function most_popular_getPostsTitle(){
        let posts = $('#most_popular');
        posts.empty();
        
        $.get(`https://workspace-cryz.c9.io/CodingPool3/Projet2.1/Projet2/Projet/posts.php?q=most_popular`).done(data =>{
            for (let i = 0;i<data.length;i++){
                let row = $('<div>', {id:"articleAside","class":"row"});
                let div = $('<div>');
                div.addClass("col-xs-12");
                let img = $('<div>').addClass("imgArticleAside");
                let content = $('<div>');
                content.append(`<h3><a href="article.php?id=${data[i].id}">`+data[i].title+"</h3>");
                content.append("<p>"+data[i].extrait+" ...</p>");
                content.append("<i>"+Math.round(data[i].moyenne)+"/20</i> - écrit par : "+data[i].author);
                
                div.append(img);
                div.append(content);
                row.append(div);
                posts.append(row);
                
                // let li = $('<li>');
                // let a = $(`<h3><a href="article.php?id=${data[i].id}">${data[i].title}</a></h3>`);
                // let content = $('<div>');
                // content.append(Math.round(data[i].moyenne)+"/20 - écrit par : "+data[i].author);
                // li.append(a);
                // posts.append(li);
                // posts.append(content);
            }
        });
    }
    most_popular_getPostsTitle();
    
    function best_authors_getPostsTitle(){
        let authors = $('#best_authors');
        authors.empty();
        $.get(`https://workspace-cryz.c9.io/CodingPool3/Projet2.1/Projet2/Projet/posts.php?q=best_authors`).done(data =>{
            for (let i=0;i<data.length;i++){
                let li = $('<li>');
                if(data[i].note_user !== null || data[i].note_user !== 0){
                    li.append(data[i].name +" <i>"+Math.round(data[i].note_user)+"/20</i>");
                    authors.append(li);
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