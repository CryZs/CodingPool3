(function($){
    let modal = $(".modal");
    $(document).on('click','.modal-content', event =>{
        $('.modal').addClass("hidden"); 
    });
    
    $(document).on('click','.labelTitle', event=>{
        $('.labelTitle').addClass("blue");
    });
})(jQuery);

