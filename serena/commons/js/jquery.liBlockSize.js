/*
 * jQuery liBlockSize v 1.0
 * http://
 *
 * Copyright 2010, Linnik Yura
 * Free to use
 * 
 * October 2010
 */
 
 /*
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/jquery.liBlockSize.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(window).load(function(){						   
		$('.max').liBlockSize({
			type:'min', //Тип выравнивания [max/min]
			side:'w', //Сторона выравнивания [h(высота)/w(ширина)]
			child: 'div' //Эл-т, который выравниваем [child: '.selector']
		});
		$('.max2').liBlockSize({
			type:'max', //Тип выравнивания [max/min]
			side:'h', //Сторона выравнивания [h(высота)/w(ширина)]
			child: 'div' //Эл-т, который выравниваем [child: '.selector']
		});
	})
})
</script>
 */
jQuery.fn.liBlockSize = function(options){
	//Настройки по умолчанию
	var o = jQuery.extend({
		type:'max',
		side:'h',
		child: 'div'
	},options);
	return this.each(function(){
		type = o.type	
		side = o.side
		var	el = jQuery(this).children(o.child)
		var	el_length = el.length	
		//По максимальной высоте
		if(type == 'max' && side == 'h'){
			var	h_block = 0
			for(i = 0; i < el_length; i++){
				var el_i = el.slice(i)
				var h1 = el_i.height()
				if(h_block < h1) {
					var h_block = h1
				}
			}
			el.height(h_block)
		}
		//По минимальной высоте
		if(type == 'min' && side == 'h'){
			var	h_block = Infinity
			for(i = 0; i < el_length; i++){
				var el_i = el.slice(i)
				var h1 = el_i.height()
				if(h_block > h1) {
					var h_block = h1
				}
			}
			el.height(h_block)
		}
		//По максимальной ширине
		if(type == 'max' && side == 'w'){
			var	w_block = 0
			for(i = 0; i < el_length; i++){
				var el_i = el.slice(i)
				var w1 = el_i.width()
				if(w_block < w1) {
					var w_block = w1
				}
			}
			el.width(w_block)
		}
		//По минимальной ширине
		if(type == 'min' && side == 'w'){
			var	w_block = Infinity
			for(i = 0; i < el_length; i++){
				var el_i = el.slice(i)
				var w1 = el_i.width()
				if(w_block > w1) {
					var w_block = w1
				}
			}
			el.width(w_block)
		}
		//По минимальной высоте и ширине
		if(type == 'min' && side == 'wh'){
			var	w_block = Infinity
			var	h_block = Infinity
			for(i = 0; i < el_length; i++){
				var el_i = el.slice(i)
				var w1 = el_i.width()
				var h1 = el_i.height()
				if(w_block > w1) {
					var w_block = w1
				}
				if(h_block > h1) {
					var h_block = h1
				}
			}
			el.width(w_block)
			el.height(h_block)
		}
		//По максимальной высоте и ширине
		if(type == 'max' && side == 'wh'){
			var	w_block = 0
			var	h_block = 0
			for(i = 0; i < el_length; i++){
				var el_i = el.slice(i)
				var w1 = el_i.width()
				var h1 = el_i.height()
				if(w_block < w1) {
					var w_block = w1
				}
				if(h_block < h1) {
					var h_block = h1
				}
			}
			el.width(w_block)
			el.height(h_block)
		}
	});
};