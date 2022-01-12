$("#img1").on({
    mouseenter: function () {
        $("#iov1").css("opacity", "1");
    },
    mouseleave: function () {
        $("#iov1").css("opacity", "0");
    }
});
$('#img1').click(function(){

    $('#imgblock1').css("display", "flex");

});
$('#imgblockbc1').click(function(){

    $('#imgblock1').css("display", "none");

});