(function($){
    let modal = $(".modal");
    let submit = $(".send-btn-form");
    let modalAlert = $('.modal-alert');
    
    
    $(document).on('click','.modal-content button', event =>{
        $('.modal').addClass("hidden"); 
    });
    
    $(document).on('click','.send-btn-form', event =>{
        event.preventDefault();
        $('.modal-alert').removeClass("hidden");        
    });
    
    $(document).on('click','.confirm', event =>{
        event.preventDefault();
        let author = $('#name-writer').val();
        let email = $('#email').val();
        let commentaire = $('#comment').val();
        if (author == "" || comment == "" || commentaire == ""){
            alert(author);
            $('.modal-alert').addClass('hidden');
        } 
        else{
            $('.modal-alert').addClass("hidden");
            $('.comments').append("<hr/>");
            $('.comments').append(`<div class='comment-author'>${author} <small>a écrit :</small></div><div class="comment-commentaire">${commentaire}</div>`);
        }
    });
    $(document).on('click','.confirm-contact', event =>{
        event.preventDefault();
        let author = $('#name').val();
        let email = $('#email').val();
        let message = $('#message').val();
        if (author == "" || email == "" || message == ""){
            $('.modal-alert').addClass('hidden');
        } 
        else{
            $('.modal-alert').text("ATT");
        }
    });
    
    $(document).ready(function(){
        $(".live").keyup(function(){
            var key = $(this).val();
            $(".preview").html(key);
        });
    });
    $(window).keypress(e => {
        if (!(e.which == 115 && e.ctrlKey) && !(e.which == 19)) return true;
        alert("Ctrl-S pressed");
        event.preventDefault();
    }
});
})(jQuery);
