$(document).ready(function(){

    var box1 = $(".box-1");
    var box2 = $(".box-2");
    var box3 = $(".box-3");
    var box4 = $(".box-4");
    var box5 = $(".box-5");
    
    $(window).scroll(function(){
        console.log(this.scrollY);
        if(this.scrollY == 0){ //Box 1 unlock
            box1.css("opacity", "1");//see
            box1.css("transition", "all 0.8s");

            box2.css("opacity", "0.5");//hide
            box2.css("transition", "all 0.8s");

            box3.css("opacity", "0.5");//hide
            box3.css("transition", "all 0.8s");

            box2.css("opacity", "0.5");//hide
            box2.css("transition", "all 0.8s");
            
            box2.css("opacity", "0.5");//hide
            box2.css("transition", "all 0.8s");
        }
        if(this.scrollY > 300){
            box1.css("opacity", "1"); //see up

            box2.css("opacity", "1"); //see down
            box2.css("transition", "all 0.8s");
        }
        if(this.scrollY > 499){
            box1.css("opacity", "0.5");
        }
        if(this.scrollY > 900){
            box3.css("opacity", "0.5");
            box3.css("transition", "all 0.8s");
        }
        if(this.scrollY > 1000){
            box3.css("opacity", "1");
            box3.css("transition", "all 0.8s");
        }
        if(this.scrollY > 1199){
            box2.css("opacity", "0.5");
            box4.css("opacity", "0.5");
            box4.css("transition", "all 0.8s");
        }
        if(this.scrollY > 1800){
            box4.css("opacity", "1");
            box4.css("transition", "all 0.8s");
        }
        if(this.scrollY > 1960){
            box3.css("opacity", "0.5");
            box3.css("transition", "all 0.8s");
            box5.css("opacity", "0.5");
            box5.css("transition", "all 0.8s");
        }
        if(this.scrollY > 2400){
            box5.css("opacity", "1");
            box5.css("transition", "all 0.8s");
        }
        if(this.scrollY > 2732){
            box4.css("opacity", "0.5");
            box4.css("transition", "all 0.8s");
        }
    });

});