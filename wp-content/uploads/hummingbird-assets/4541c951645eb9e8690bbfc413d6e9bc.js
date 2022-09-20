/**handles:wordfenceAJAXjs**/
!function(c,r,a){function s(e,t,i){var e=r.createElement(e);return t&&(e.id=ee+t),i&&(e.style.cssText=i),c(e)}function d(){return a.innerHeight||c(a).height()}function h(e,i){i!==Object(i)&&(i={}),this.cache={},this.el=e,this.value=function(e){var t;return void 0===this.cache[e]&&(void 0!==(t=c(this.el).attr("data-wfbox-"+e))?this.cache[e]=t:void 0!==i[e]?this.cache[e]=i[e]:void 0!==n[e]&&(this.cache[e]=n[e])),this.cache[e]},this.get=function(e){var e=this.value(e);return c.isFunction(e)?e.call(this.el,this):e}}function l(e){var t=I.length,e=(z+e)%t;return e<0?t+e:e}function u(e,t){return Math.round((/%/.test(e)?("x"===t?L.width():d())/100:1)*parseInt(e,10))}function g(e,t){return e.get("photo")||e.get("photoRegex").test(t)}function f(e,t){return e.get("retinaUrl")&&1<a.devicePixelRatio?t.replace(e.get("photoRegex"),e.get("retinaSuffix")):t}function o(e){"contains"in T[0]&&!T[0].contains(e.target)&&e.target!==k[0]&&(e.stopPropagation(),T.focus())}function p(e){p.str!==e&&(T.add(k).removeClass(p.str).addClass(e),p.str=e)}function w(i){z=0,i&&!1!==i&&"nofollow"!==i?(I=c("."+te).filter(function(){var e,t;return new h(this,c.data(this,Z)).get("rel")===i}),-1===(z=I.index(K.el))&&(I=I.add(K.el),z=I.length-1)):I=c(K.el)}function m(e){c(r).trigger(e),se.triggerHandler(e)}function v(e){var t,i,n,e,t,t,n;G||(t=c(e).data(Z),w((K=new h(e,t)).get("rel")),Q||(Q=$=!0,p(K.get("className")),T.css({visibility:"hidden",display:"block",opacity:""}),M=s(he,"LoadedContent","width:0; height:0; overflow:hidden; visibility:hidden"),W.css({width:"",height:""}).append(M),q=A.height()+E.height()+W.outerHeight(!0)-W.height(),J=H.width()+B.width()+W.outerWidth(!0)-W.width(),N=M.outerHeight(!0),X=M.outerWidth(!0),i=u(K.get("initialWidth"),"x"),n=u(K.get("initialHeight"),"y"),e=K.get("maxWidth"),t=K.get("maxHeight"),K.w=Math.max((!1!==e?Math.min(i,u(e,"x")):i)-X-J,0),K.h=Math.max((!1!==t?Math.min(n,u(t,"y")):n)-N-q,0),M.css({width:"",height:K.h}),Y.position(),m(ie),K.get("onOpen"),D.add(F).hide(),T.focus(),K.get("trapFocus")&&r.addEventListener&&(r.addEventListener("focus",o,!0),se.one(re,function(){r.removeEventListener("focus",o,!0)})),K.get("returnFocus")&&se.one(re,function(){c(K.el).focus()})),n=parseFloat(K.get("opacity")),k.css({opacity:n==n?n:"",cursor:K.get("overlayClose")?"pointer":"",visibility:"visible"}).show(),K.get("closeButton")?_.html(K.get("close")).appendTo(W):_.appendTo("<div/>"),y())}function x(){T||(t=!1,L=c(a),T=s(he).attr({id:Z,class:!1===c.support.opacity?ee+"IE":"",role:"dialog",tabindex:"-1"}).hide(),k=s(he,"Overlay").hide(),P=c([s(he,"LoadingOverlay")[0],s(he,"LoadingGraphic")[0]]),C=s(he,"Wrapper"),W=s(he,"Content").append(F=s(he,"Title"),S=s(he,"Current"),j=c('<button type="button"/>').attr({id:ee+"Previous"}),R=c('<button type="button"/>').attr({id:ee+"Next"}),e=c('<button type="button"/>').attr({id:ee+"Slideshow"}),P),_=c('<button type="button"/>').attr({id:ee+"Close"}),C.append(s(he).append(s(he,"TopLeft"),A=s(he,"TopCenter"),s(he,"TopRight")),s(he,!1,"clear:left").append(H=s(he,"MiddleLeft"),W,B=s(he,"MiddleRight")),s(he,!1,"clear:left").append(s(he,"BottomLeft"),E=s(he,"BottomCenter"),s(he,"BottomRight"))).find("div div").css({float:"left"}),O=s(he,!1,"position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"),D=R.add(j).add(S).add(e)),r.body&&!T.parent().length&&c(r.body).append(k,T.append(C,O))}function b(){function e(e){1<e.which||e.shiftKey||e.altKey||e.metaKey||e.ctrlKey||(e.preventDefault(),v(this))}return T&&(t||(t=!0,R.click(function(){Y.next()}),j.click(function(){Y.prev()}),_.click(function(){Y.close()}),k.click(function(){K.get("overlayClose")&&Y.close()}),c(r).bind("keydown."+ee,function(e){var t=e.keyCode;Q&&K.get("escKey")&&27===t&&(e.preventDefault(),Y.close()),Q&&K.get("arrowKey")&&I[1]&&!e.altKey&&(37===t?(e.preventDefault(),j.click()):39===t&&(e.preventDefault(),R.click()))}),c.isFunction(c.fn.on)?c(r).on("click."+ee,"."+te,e):c("."+te).live("click."+ee,e)),1)}function y(){var e,t,i,n=Y.prep,o=++le,r,i;U=!($=!0),m(ae),m(ne),K.get("onLoad"),K.h=K.get("height")?u(K.get("height"),"y")-N-q:K.get("innerHeight")&&u(K.get("innerHeight"),"y"),K.w=K.get("width")?u(K.get("width"),"x")-X-J:K.get("innerWidth")&&u(K.get("innerWidth"),"x"),K.mw=K.w,K.mh=K.h,K.get("maxWidth")&&(K.mw=u(K.get("maxWidth"),"x")-X-J,K.mw=K.w&&K.w<K.mw?K.w:K.mw),K.get("maxHeight")&&(K.mh=u(K.get("maxHeight"),"y")-N-q,K.mh=K.h&&K.h<K.mh?K.h:K.mh),e=K.get("href"),V=setTimeout(function(){P.show()},100),K.get("inline")?(r=c(e).eq(0),i=c("<div>").hide().insertBefore(r),se.one(ae,function(){i.replaceWith(r)}),n(r)):K.get("iframe")?n(" "):K.get("html")?n(K.get("html")):g(K,e)?(e=f(K,e),U=K.get("createImg"),c(U).addClass(ee+"Photo").bind("error."+ee,function(){n(s(he,"Error").html(K.get("imgError")))}).one("load",function(){o===le&&setTimeout(function(){var e;K.get("retinaImage")&&1<a.devicePixelRatio&&(U.height=U.height/a.devicePixelRatio,U.width=U.width/a.devicePixelRatio),K.get("scalePhotos")&&(t=function(){U.height-=U.height*e,U.width-=U.width*e},K.mw&&U.width>K.mw&&(e=(U.width-K.mw)/U.width,t()),K.mh&&U.height>K.mh&&(e=(U.height-K.mh)/U.height,t())),K.h&&(U.style.marginTop=Math.max(K.mh-U.height,0)/2+"px"),I[1]&&(K.get("loop")||I[z+1])&&(U.style.cursor="pointer",c(U).bind("click."+ee,function(){Y.next()})),U.style.width=U.width+"px",U.style.height=U.height+"px",n(U)},1)}),U.src=e):e&&O.load(e,K.get("data"),function(e,t){o===le&&n("error"===t?s(he,"Error").html(K.get("xhrError")):c(this).contents())})}var k,T,C,W,A,H,B,E,I,L,M,O,P,F,S,e,R,j,_,D,K,q,J,N,X,z,U,Q,$,G,V,Y,t,n={html:!1,photo:!1,iframe:!1,inline:!1,transition:"elastic",speed:300,fadeOut:300,width:!1,initialWidth:"600",innerWidth:!1,maxWidth:!1,height:!1,initialHeight:"450",innerHeight:!1,maxHeight:!1,scalePhotos:!0,scrolling:!0,opacity:.9,preloading:!0,className:!1,overlayClose:!0,escKey:!0,arrowKey:!0,top:!1,bottom:!1,left:!1,right:!1,fixed:!1,data:void 0,closeButton:!0,fastIframe:!0,open:!1,reposition:!0,loop:!0,slideshow:!1,slideshowAuto:!0,slideshowSpeed:2500,slideshowStart:"start slideshow",slideshowStop:"stop slideshow",photoRegex:/\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,retinaImage:!1,retinaUrl:!1,retinaSuffix:"@2x.$1",current:"image {current} of {total}",previous:"previous",next:"next",close:"close",xhrError:"This content failed to load.",imgError:"This image failed to load.",returnFocus:!0,trapFocus:!0,onOpen:!1,onLoad:!1,onComplete:!1,onCleanup:!1,onClosed:!1,rel:function(){return this.rel},href:function(){return c(this).attr("href")},title:function(){return this.title},createImg:function(){var i=new Image,e=c(this).data("cbox-img-attrs");return"object"==typeof e&&c.each(e,function(e,t){i[e]=t}),i},createIframe:function(){var i=r.createElement("iframe"),e=c(this).data("cbox-iframe-attrs");return"object"==typeof e&&c.each(e,function(e,t){i[e]=t}),"frameBorder"in i&&(i.frameBorder=0),"allowTransparency"in i&&(i.allowTransparency="true"),i.name=(new Date).getTime(),i.allowFullscreen=!0,i}},Z="wordfenceBox",ee="wfbox",te=ee+"Element",ie=ee+"_open",ne=ee+"_load",oe=ee+"_complete",i=ee+"_cleanup",re=ee+"_closed",ae=ee+"_purge",se=c("<a/>"),he="div",le=0,ce={},de=(fe=ee+"Slideshow_",pe="click."+ee,function(){ue?K.get("slideshow")||(se.unbind(i,be),be()):K.get("slideshow")&&I[1]&&(ue=!0,se.one(i,be),(K.get("slideshowAuto")?ve:xe)(),e.show())}),ue,ge,fe,pe;function we(){clearTimeout(ge)}function me(){(K.get("loop")||I[z+1])&&(we(),ge=setTimeout(Y.next,K.get("slideshowSpeed")))}function ve(){e.html(K.get("slideshowStop")).unbind(pe).one(pe,xe),se.bind(oe,me).bind(ne,we),T.removeClass(fe+"off").addClass(fe+"on")}function xe(){we(),se.unbind(oe,me).unbind(ne,we),e.html(K.get("slideshowStart")).unbind(pe).one(pe,function(){Y.next(),ve()}),T.removeClass(fe+"on").addClass(fe+"off")}function be(){ue=!1,e.hide(),we(),se.unbind(oe,me).unbind(ne,we),T.removeClass(fe+"off "+fe+"on")}c[Z]||(c(x),(Y=c.fn[Z]=c[Z]=function(t,e){var i,n=this;return t=t||{},c.isFunction(n)&&(n=c("<a/>"),t.open=!0),n[0]&&(x(),b()&&(e&&(t.onComplete=e),n.each(function(){var e=c.data(this,Z)||{};c.data(this,Z,c.extend(e,t))}).addClass(te),(i=new h(n[0],t)).get("open")&&v(n[0]))),n}).position=function(t,e){function i(){A[0].style.width=E[0].style.width=W[0].style.width=parseInt(T[0].style.width,10)-J+"px",W[0].style.height=H[0].style.height=B[0].style.height=parseInt(T[0].style.height,10)-q+"px"}var n,o,r,a=0,s=0,h=T.offset(),l;L.unbind("resize."+ee),T.css({top:-9e4,left:-9e4}),o=L.scrollTop(),r=L.scrollLeft(),K.get("fixed")?(h.top-=o,h.left-=r,T.css({position:"fixed"})):(a=o,s=r,T.css({position:"absolute"})),s+=!1!==K.get("right")?Math.max(L.width()-K.w-X-J-u(K.get("right"),"x"),0):!1!==K.get("left")?u(K.get("left"),"x"):Math.round(Math.max(L.width()-K.w-X-J,0)/2),a+=!1!==K.get("bottom")?Math.max(d()-K.h-N-q-u(K.get("bottom"),"y"),0):!1!==K.get("top")?u(K.get("top"),"y"):Math.round(Math.max(d()-K.h-N-q,0)/2),T.css({top:h.top,left:h.left,visibility:"visible"}),C[0].style.width=C[0].style.height="9999px",n={width:K.w+X+J,height:K.h+N+q,top:a,left:s},t&&(l=0,c.each(n,function(e){return n[e]!==ce[e]?void(l=t):void 0}),t=l),ce=n,t||T.css(n),T.dequeue().animate(n,{duration:t||0,complete:function(){i(),$=!1,C[0].style.width=K.w+X+J+"px",C[0].style.height=K.h+N+q+"px",K.get("reposition")&&setTimeout(function(){L.bind("resize."+ee,Y.position)},1),c.isFunction(e)&&e()},step:i})},Y.resize=function(e){var t;Q&&((e=e||{}).width&&(K.w=u(e.width,"x")-X-J),e.innerWidth&&(K.w=u(e.innerWidth,"x")),M.css({width:K.w}),e.height&&(K.h=u(e.height,"y")-N-q),e.innerHeight&&(K.h=u(e.innerHeight,"y")),e.innerHeight||e.height||(t=M.scrollTop(),M.css({height:"auto"}),K.h=M.height()),M.css({height:K.h}),t&&M.scrollTop(t),Y.position("none"===K.get("transition")?0:K.get("speed")))},Y.prep=function(e){function t(){return K.w=K.w||M.width(),K.w=K.mw&&K.mw<K.w?K.mw:K.w,K.w}function i(){return K.h=K.h||M.height(),K.h=K.mh&&K.mh<K.h?K.mh:K.h,K.h}var n,o;Q&&(o="none"===K.get("transition")?0:K.get("speed"),M.remove(),(M=s(he,"LoadedContent").append(e)).hide().appendTo(O.show()).css({width:t(),overflow:K.get("scrolling")?"auto":"hidden"}).css({height:i()}).prependTo(W),O.hide(),c(U).css({float:"none"}),p(K.get("className")),n=function(){function e(){!1===c.support.opacity&&T[0].style.removeAttribute("filter")}var t,i,n=I.length;Q&&(i=function(){clearTimeout(V),P.hide(),m(oe),K.get("onComplete")},F.html(K.get("title")).show(),M.show(),1<n?("string"==typeof K.get("current")&&S.html(K.get("current").replace("{current}",z+1).replace("{total}",n)).show(),R[K.get("loop")||z<n-1?"show":"hide"]().html(K.get("next")),j[K.get("loop")||z?"show":"hide"]().html(K.get("previous")),de(),K.get("preloading")&&c.each([l(-1),l(1)],function(){var e,t=I[this],i=new h(t,c.data(t,Z)),t=i.get("href");t&&g(i,t)&&(t=f(i,t),(e=r.createElement("img")).src=t)})):D.hide(),K.get("iframe")?(t=K.get("createIframe"),K.get("scrolling")||(t.scrolling="no"),c(t).attr({src:K.get("href"),class:ee+"Iframe"}).one("load",i).appendTo(M),se.one(ae,function(){t.src="//about:blank"}),K.get("fastIframe")&&c(t).trigger("load")):i(),"fade"===K.get("transition")?T.fadeTo(o,1,e):e())},"fade"===K.get("transition")?T.fadeTo(o,0,function(){Y.position(0,n)}):Y.position(o,n))},Y.next=function(){!$&&I[1]&&(K.get("loop")||I[z+1])&&(z=l(1),v(I[z]))},Y.prev=function(){!$&&I[1]&&(K.get("loop")||z)&&(z=l(-1),v(I[z]))},Y.close=function(){Q&&!G&&(Q=!(G=!0),m(i),K.get("onCleanup"),L.unbind("."+ee),k.fadeTo(K.get("fadeOut")||0,0),T.stop().fadeTo(K.get("fadeOut")||0,0,function(){T.hide(),k.hide(),m(ae),M.remove(),setTimeout(function(){G=!1,m(re),K.get("onClosed")},1)}))},Y.remove=function(){T&&(T.stop(),c[Z].close(),T.stop(!1,!0).remove(),k.remove(),G=!1,T=null,c("."+te).removeData(Z).removeClass(te),c(r).unbind("click."+ee).unbind("keydown."+ee))},Y.element=function(){return c(K.el)},Y.settings=n)}(jQuery,document,window),function(c,e,t){var d=t.wfi18n.__,u=t.wfi18n.sprintf;t.wordfenceAJAXWatcher||(t.wordfenceAJAXWatcher={blockWarningOpen:!1,init:function(){c(e).ajaxError(function(e,t,i,n){if(!wordfenceAJAXWatcher.blockWarningOpen&&!t.responseJSON){var o,r=/<!-- WFWAF NONCE: ([a-f0-9]+) -->/.exec(t.responseText);if(r&&r[1]==WFAJAXWatcherVars.nonce){var i=i.url;63<i.length&&(i=i.substring(0,30)+"..."+i.substring(i.length-30));for(var i=c("<div/>").text(i).html(),t=c.parseHTML(t.responseText),a=c(t).filter("#whitelist-form").add(c(t).find("#whitelist-form")).attr("action"),s=c(t).filter("input[name]").add(c(t).find("input[name]")),h={},l=0;l<s.length;l++)h[s[l].name]=s[l].value;"string"==typeof a&&(wordfenceAJAXWatcher.blockWarningOpen=!0,c.wordfenceBox({closeButton:!1,width:"400px",html:"<h3>"+d("Background Request Blocked")+"</h3><p>"+u(d("Wordfence Firewall blocked a background request to WordPress for the URL %s. If this occurred as a result of an intentional action, you may consider allowlisting the request to allow it in the future."),"<code>"+i+"</code>")+'</p><p class="wf-right"><a href="https://www.wordfence.com/help/?query=ajax-blocked" target="_blank" rel="noopener noreferrer" class="wfboxhelp" title="'+d("Help")+'"></a><a href="#" class="button" id="background-block-whitelist">'+d("Add action to allowlist")+'</a> <a href="#" class="button" id="background-block-dismiss">'+d("Dismiss")+"</a></p>",onComplete:function(){c("#background-block-dismiss").click(function(e){e.preventDefault(),e.stopPropagation(),c.wordfenceBox.close()}),c("#background-block-whitelist").click(function(e){e.preventDefault(),e.stopPropagation(),confirm(d("Are you sure you want to allowlist this action?"))&&c.ajax({method:"POST",url:a,data:h,global:!1,success:function(){alert(d("The request has been allowlisted. Please try it again.")),c.wordfenceBox.close()},error:function(){alert(d("An error occurred when adding the request to the allowlist.")),c.wordfenceBox.close()}})})},onClosed:function(){wordfenceAJAXWatcher.blockWarningOpen=!1}}))}}})}}),c(function(){wordfenceAJAXWatcher.init(),c("#wfboxPrevious, #wfboxNext, #wfboxSlideshow").remove()})}(jQuery,document,window);