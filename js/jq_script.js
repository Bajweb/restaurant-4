//Skrollr
jQuery(document).ready(function($){
   
     var s = skrollr.init({
  render: function(data) {
    //Log the current scroll position.
    $('#info').text(data.curTop);
  }
});

});

// Window width
jQuery(document).ready(function($){
       
       $(window).resize(function(){
       
          var sirinaWindows = $(this).innerWidth();
          
          $('.sirina-window').text(sirinaWindows);
       })
});

//loading screen
window.addEventListener("load", function(){
  var load_screen = document.getElementById("load_screen");
  document.body.removeChild(load_screen);
});

// slider not dots
jQuery(document).ready(function($) {
   $('.cycle-pager span').text('');
});

// ahow Play pause video button
 var vid, playbtn;
function intializePlayer(){
  // Set object references
  vid = document.getElementById("my_video");
  playbtn = document.getElementById("video-play-pause");
  // Add event listeners
  playbtn.addEventListener("click",playPause,false);
}
window.onload = intializePlayer;
function playPause(){
  if(vid.paused){
    vid.play();
  } else {
    vid.pause();
  }
}

// play pause youtube
jQuery(document).ready(function($){

  var index = 1;

  $('#video-play-pause').on('click', function() {  

    $(this).toggleClass('play-btn');

    if( index ==1 ){
      
      $('#youtube_video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
      index = 0;
    }else if( index ==0 ){

      $('#youtube_video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
      index = 1;
    }

  }); 
   
}); 

// full image on post and page
jQuery(document).ready(function($) {
   $('.move-div').insertBefore('#wrap-primary-secondary'); 
});
 
 jQuery(document).ready(function($) {
  
});
