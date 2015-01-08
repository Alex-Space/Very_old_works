

$(document).ready(function () {

  $('.pix_diapo').diapo({
		fx: 'fade', 
		time: '5000',
		loader : 'none'
	});

	Galleria.loadTheme('commons/js/galleria.classic.min.js');
    
    // Initialize Galleria
    $('#galleria').galleria({
	auto:true,
	scroll:1
	});
 

  $(window).load(function(){ 
     var theWindow        = $(window),
      $bg              = $("#bg"),
      aspectRatio      = $bg.width() / $bg.height();
                    
  function resizeBg() {
    
    if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
        $bg
          .removeClass()
          .addClass('bgheight');
    } else {
        $bg
          .removeClass()
          .addClass('bgwidth');
    }
          
  }
                          
  theWindow.resize(resizeBg).trigger("resize");

     var mh = 0;
   $(".h2-b2").each(function () {
       var h_block = parseInt($(this).height());
       if(h_block > mh) {
          mh = h_block;
       };
   });
   
   $(".h2-b2").height(mh);
   
   var mh1 = 0;
   $(".h2-b1").each(function () {
       var h_block1 = parseInt($(this).height());
       if(h_block1 > mh1) {
          mh1 = h_block1;
       };
   });
   $(".h2-b1").height(mh1);
  
  $('.row1').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: '.same-height-news' //Эл-т, который выравниваем [child: '.selector']
    });
    
    $('.row2').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: '.same-height-news2' //Эл-т, который выравниваем [child: '.selector']
    });
    
    $('.inner-products').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: '.products_height' //Эл-т, который выравниваем [child: '.selector']
    });
    
    $('.media-menu').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: '.media-tools' //Эл-т, который выравниваем [child: '.selector']
    });
    
    $('.row4').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: 'div' //Эл-т, который выравниваем [child: '.selector']
    });
    
    $('.row5').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: 'div' //Эл-т, который выравниваем [child: '.selector']
    });

    $('.products_height').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: '.cols' //Эл-т, который выравниваем [child: '.selector']
    });

    $('.select').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: 'div' //Эл-т, который выравниваем [child: '.selector']
    });

      $("#carousel-demo1").sliderkit({
        auto:false,
        shownavitems:6,
        start:2,
        scroll:1
      });

      // second-carousel
      $("#carousel-demo2").sliderkit({
        auto:false,
        shownavitems:6,
        start:2,
        scroll:1
      });
      $("#carousel-demo3").sliderkit({
        auto:false,
        shownavitems:6,
        start:2,
        scroll:1
      });

	});
});
	                
