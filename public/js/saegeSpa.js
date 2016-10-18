window.onpopstate = function() {
	
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange= function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	if(window.location.pathname=="/")
	    		var urlPath = "#home";
	    	else
	    		var urlPath = (window.location.pathname).replace("/","#");
	    	$(urlPath).siblings().removeClass("active");
	    	$(urlPath).addClass("active");
	    	var data = xhr.responseText;
	    	var pos=data.search("<!--content-->");
	    	data=data.substr(pos+14);
	    	pos=data.search("<!--/content-->");
	    	data=data.substr(0,pos);

	    	$('#main').html(data);
	    }
	};
	xhr.open("GET",window.location.href,true);
	xhr.send();
}

loadAjax=function(event,url,banner){
	event.preventDefault();
	console.log(url);
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange= function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	if(banner === true){
	    		$('#home').siblings().removeClass("active");
		    	var data = xhr.responseText;
		    	var pos=data.search("<!--content-->");
		    	data=data.substr(pos+14);
		    	pos=data.search("<!--/content-->");
		    	data=data.substr(0,pos);
		    	history.pushState( null , window.title,url);
		    	$('#main').fadeOut(200,function(){
		    		$('#home').addClass("active");
		    		$('#main').html(data);
		    		$('#main').fadeIn(200);
		    	});
	    	}else{
	    		$(event.target).parent().siblings().removeClass("active");
		    	var data = xhr.responseText;
		    	var pos=data.search("<!--content-->");
		    	data=data.substr(pos+14);
		    	pos=data.search("<!--/content-->");
		    	data=data.substr(0,pos);
		    	history.pushState( null , window.title,url);
		    	$('#main').fadeOut(200,function(){
		    		$(event.target).parent().addClass("active");
		    		$('#main').html(data);
		    		$('#main').fadeIn(200);
		    		
		    	});
	    	}
	    	
	    }
	};
	xhr.open("GET",url,true);
	xhr.send();
}