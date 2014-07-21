// Use the following URL to minify script
// http://fmarcia.info/jsmin/test.html

(function(document, window, undefined) {
	var initCounter = 0;

	function Linkcious_loadScript(url, callback, self) {
	    var script = document.createElement("script")
	    script.type = "text/javascript";
	    if (script.readyState) { //IE
	        script.onreadystatechange = function () {
	            if (script.readyState == "loaded" || script.readyState == "complete") {
	                script.onreadystatechange = null;
	                callback(self);
	            }
	        };
	    } else { //Others
	        script.onload = function () {
	            callback(self);
	        };
	    }
	    script.src = url;
	    document.getElementsByTagName("head")[0].appendChild(script);
	}

	var LinkciousWidget = {
		init: function(config) {
			self = this;
			self.config = config;
		},

		process: function(container) {
			var main = jQuery(container);

			jQuery.each(self.config.theme, function(c, value) {
				switch(c) {					
					case 'ads':
						jQuery.each(value, function(k, v) {
							//console.log("Key: " +k+ " | Value: " +v);			
							if (k == 'color') {
								self.render('.linkcious_header > h3 > a', k, v);									
								self.render('.linkcious_title > .linkcious_title_h3 > a', k, v);									
								self.render('.linkcious_price', k, v);									
							} else if (k == 'description') {
								self.render('.linkcious_description', 'color', v);
							} else if (k == 'font') {
								self.render('.linkcious_ads', 'font-family', v);
								self.render('.linkcious_header > h3', 'font-family', v);
								self.render('.linkcious_header > h3 > a', 'font-family', v);
								self.render('.linkcious_title > .linkcious_title_h3', 'font-family', v);
								self.render('.linkcious_title > .linkcious_title_h3 > a', 'font-family', v);
								self.render('.linkcious_ads .linkcious_description', 'font-family', v);
								self.render('.linkcious_price', 'font-family', v);									
							} else if (k == 'size') {
								//v +='px';
								self.render('.linkcious_ads .linkcious_description', 'fontSize', v+"px");																
								self.render('.linkcious_header > h3', 'fontSize', v+"px");
								self.render('.linkcious_header > h3 > a', 'fontSize', v+"px");

								self.render('.linkcious_title > .linkcious_title_h3 > a', 'fontSize', v+"px");
								self.render('.linkcious_title > .linkcious_title_h3', 'fontSize', v+"px");
								self.render('.linkcious_price', 'fontSize', v+"px");									
							} else if (k == 'title_bold') {
								if (v) {
									if (self.config.theme.ads.font == 'Helvetica Neue') {
										fontWeight = 500;
									} else {
										fontWeight = "bold";
									}

									self.render('.linkcious_title > .linkcious_title_h3', 'font-weight', fontWeight);
									self.render('.linkcious_title > .linkcious_title_h3 > a', 'font-weight', fontWeight);
									self.render('.linkcious_price', 'font-weight', fontWeight);									
								} else {
									self.render('.linkcious_title > .linkcious_title_h3', 'font-weight', 'normal');
									self.render('.linkcious_title > .linkcious_title_h3 > a', 'font-weight', 'normal');
									self.render('.linkcious_price', 'font-weight', 'normal');																		
								}
							} else if (k == 'img_border') {
								if (v) {
									self.render('.linkcious_img', 'border', '1px solid #FFFFFF');
								} else {
									self.render('.linkcious_img', 'border', 'none');
								}								
							} else if (k == 'img_border_color') {
								self.render('.linkcious_img', 'border-color', v);
								self.render('.linkcious_img:hover', 'border-color', v);
							} else {
								if (k == 'background' && self.config.settings.type == 'products') {
									v = 'transparent';
								}
								self.render('.linkcious_ads', k, v);								
							}
						});
						break;
				} // switch
								
			});
		},
		
		render: function(c, k, v) {
			jQuery(c).css(k,v);													
		},
	};

	var Linkcious = {
		init: function(config) {

			if (initCounter == 0) {
				var self    = this;
				self.config = config;
				if (typeof jQuery != 'undefined') {
					this.fetch(self);
				} else {
				    Linkcious_loadScript("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", this.fetch, self);			
				}
				initCounter += 1;
			} 
		},
		
		fetch: function(self) {

			var linkcious_ads = jQuery('#linkcious_ads');
			linkcious_ads.css('width', '100%');
			linkcious_ads.css('text-align', 'center');
			linkcious_ads.css('padding-top', '20px');
			linkcious_ads.css('padding-bottom', '20px');
			
			linkcious_ads.html("<img src = 'http://www.linkcious.com/wp-content/themes/linkcious//img/linkcious_loader.gif' style = 'float: none; display: inline-block;' />");

			jQuery.ajaxSetup({
			     timeout: 20000
		  	});
			
			queryString = jQuery.param(self.config.settings);
			queryString += "&callback=?";			
			var url = 'http://www.linkcious.com/linkcious_ads.php/?'+queryString;
			// console.log(queryString);
			jQuery.getJSON(url, function(data){
				// console.log("Receive from JSON");
				// console.log(data.content);
				linkcious_ads.fadeOut(100, function() {
					// linkcious_ads.html(data.content).delay(500).fadeIn(500);						
					setTimeout(function() {
						linkcious_ads.html(data.content).fadeIn(300);						
						LinkciousWidget.init(self.config);
						LinkciousWidget.process('#linkcious');

						linkcious_ads.css('width', '');
						linkcious_ads.css('text-align', '');
						linkcious_ads.css('padding-top', '');
						linkcious_ads.css('padding-bottom', '');

					}, 500);
					// self.process(self);

				});
				
				url += "&process=true";
				jQuery.ajax({
				  url: url,
				});
				
			});
		},		
	};
	
	window.Linkcious = Linkcious;
	window.LinkciousWidget = LinkciousWidget;
})(document, window);