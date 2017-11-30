(function($){
        $(document).ready(function(){
        $("input").keyup(function(){
            var key = $(this).val();
            $(".preview").text(key);
        });
});
})(jQuery);