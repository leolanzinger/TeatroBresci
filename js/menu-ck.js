/**
 * cbpHorizontalMenu.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */var cbpHorizontalMenu=function(){function i(){t.on("click",s);e.on("click",function(e){e.stopPropagation()})}function s(t){r!==-1&&e.eq(r).removeClass("cbp-hropen");var i=$(t.currentTarget).parent(".dropdown"),s=i.index();$(".dropdown").removeClass("cbp-hropen");if(r===s){i.removeClass("cbp-hropen");r=-1}else{i.addClass("cbp-hropen");r=s;n.off("click").on("click",o)}return!1}function o(t){e.eq(r).removeClass("cbp-hropen");r=-1}var e=$("#cbp-hrmenu > ul > .dropdown"),t=e.children("a"),n=$("body"),r=-1;return{init:i}}();