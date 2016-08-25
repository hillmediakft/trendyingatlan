var Home = function () {

 
    var OwlCarousel = function () {

      var owl = $("#owl-properties");
     
      owl.owlCarousel({
         
          itemsCustom : [
            [0, 2],
            [450, 2],
            [600, 3],
            [700, 4],
            [1000, 4],
            [1200, 4],
            [1400, 4],
            [1600, 6]
          ],
          navigation : false
     
      });
    }



    return {
        //main function to initiate the module
        init: function () {
            OwlCarousel();

        }
    };


}();


jQuery(document).ready(function ($) {
    Home.init();
});


