(function($){
    function getParameterByName(name) {
        let url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    
    
    function getArticle(page_id){
        $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/posts.php?q=article&id=${page_id}`).done(data =>{
            $('#title').html(data.title);
            $('.content').html(data.body);
        });
    }
    function getComments(page_id){
        let comments = $('#comments');
        comments.empty();
        $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/comments.php?post=${page_id}`).done(data =>{
            for (let i = 0;i<data.length;i++){
                let div = $('<div>');
                div.append(data[i].name+" - "+data[i].body +" - "+data[i].rate+"/20");
                comments.append(div);
            }
        });
    }
    
    function getInfoAuthor(page_id){
        let infos = $('#info_author');
        $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/authors.php?id_post=${page_id}`).done(data =>{
            for (let i=0;i<data.length;i++){
                let div = $('<div>');
                div.append(data[i].name+' - '+data[i].email+' - ');
                if (data[i].enabled == 1){
                    div.append('UTILISATEUR AUTHENTIFIE');
                }else if (data[i].enabled == 0){
                    div.append("UTILISATEUR NON AUTHENTIFIE");
                }
                infos.append(div);
            }
        });
    }
    let page_id = getParameterByName("id");
    getArticle(page_id);
    getComments(page_id);
    getInfoAuthor(page_id);
    
    
})(jQuery);