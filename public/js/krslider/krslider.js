(function(window, document, $){
	$(function(){

		let KRSliderOctopus = (function(){
			function KRSliderOctopus(){
				this.init();
				this.krsliderView = new KRSliderView();
			}

			KRSliderOctopus.prototype.init = function(){
				(function(_this){
					$('#add_image')
						.on('change', function(event){
							Promise.all(Array.prototype.map.call(event.target.files, _this.readFile(this)))
								.then(function(response){
									_this.krsliderView.renderImagesToCanvas(response);
								});
						});
					})(this);
			};

			KRSliderOctopus.prototype.readFile = function(_this){
				return function(file){
					return (new Promise(function(resolve, reject){
						let reader = new FileReader();
						reader.onload = function(e){
							resolve(e.target.result);
						};

						reader.onerrors = function(e){
							reject(e);
						};

						reader.readAsDataURL(file);
					}));
				};
			};

			return KRSliderOctopus;
		})();

		let KRSliderView = (function(){
			function KRSliderView(){
				this.canvas = $('.krslider-canvas');
			};

			KRSliderView.prototype.renderImagesToCanvas = function(images){
				let tmpImages = [];
				(function(_this){
					images.map(function(image){
						_this.canvas
							.append(`<div class="krslider-canvas-image-container"><img src="${image}" class="krslider-canvas-image"/></div>`);
						$('.krslider-canvas-image-container')
							.draggable();
						$('.krslider-canvas-image')
							.resizable({
								aspectRatio: true,
							    	handles: 'ne, se, sw, nw'
							});
					});
				})(this);
			};
			return KRSliderView;
		})();

		(new KRSliderOctopus());
	});
})(window, document, window.jQuery);