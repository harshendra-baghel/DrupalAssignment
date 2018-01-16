$(document).ready(function(){
    if ($(window).width() < 992) {
         $('.hamb-icn').on ('click',function(){
              $('.left-sidebar').toggleClass('active-sidebar');
         });
       }
    
       $('.parent-grid a.view-all').on('click',function(){
              $(this).text(function(i, v){
                   return v === 'View All' ? 'View Less' : 'View All'
                });
             $(this).toggleClass('viewallToggle');
             $(this).parent().children('span').toggleClass('toggle-text');
             $(this).parent().children('h5').toggleClass('toggle-title');
        })
    resizeDiv();
});

window.onresize = function(event) {
 resizeDiv();
}

function resizeDiv() {
    vph = $(window).height();
    $('.login_bg').css({
       "height": vph
    });
}
