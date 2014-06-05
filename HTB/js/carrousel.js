<script type="text/javascript">
    $(document).ready(function(){
        $("#carousel").each(function(){
            var t = setInterval(function(){
                $("#carousel ul").animate({marginLeft:-100},100,function(){
                    $("#carousel ul li:last").after($("#carousel ul li:first"));
                    $(this).css({marginLeft:0});
                })
            },2000);
        });
    });
</script>