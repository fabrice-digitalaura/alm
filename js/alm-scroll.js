/* 
 * 
 * 
 * 
 *  Enables change on header on scroll
 */

var header = document.querySelector("#masthead");

function scrolled(){
	var windowHeight = document.body.clientHeight,
		currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
        var myClass = "scrolled";
        var arr;
        
        /* console.log ('Windows Height : '+windowHeight);
        console.log ('header.offsetHeight : '+header.offsetHeight);
     
        console.log ('Class Name : '+header.className);
        */
        
//           console.log ('currentScroll : '+currentScroll);
        
        if(currentScroll > 10){
            
            arr = header.className.split(" ");
            if (arr.indexOf(myClass) == -1) {
                header.className += " " + myClass;
            }
                        
        } else {
            header.className = header.className.replace(/\bscrolled\b/g, "");
        }

}

addEventListener("scroll", scrolled, false);

