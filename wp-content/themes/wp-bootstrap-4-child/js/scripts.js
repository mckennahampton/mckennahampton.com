(function ($) {

    $(document).ready(function () {

        $('#homepageLargeSlider').layerSlider({
            height: 800,
            width: 800,
            type: 'responsive',
            showCircleTimer: false
        });

        $('.ls-tilt').tilt({
            maxTilt: 20,
            speed: 2000,
            scale: 0.8
        })

        $('.logo-tilt').tilt({
            scale: 1.05,
            speed: 1000,
            perspective: 2000
        });

  
    var time = 2000; // Change this value, it's the animation time
    var container = $('[data-color]'); // The attr that define colors
    var color = container.attr('data-color'); // Get the values
    var color = color.split(','); // Split them if ',' found
    var svg = container.find('svg [data-change*="color"]'); // Find the svg path that will have a color change
    
    
    svg.attr('fill', color[0]); // Apply the first color
      
    
    // Then launch the interval
        var i = 0;
        setInterval(function(){
            $('#r1 path').attr('fill', color[Math.floor(Math.random()*color.length)]);
            if (i >= color.length) {
                i = 0;
            } else {
                i++;
            }
        }, Math.floor(Math.random() * 3000) + 1000 )
        setInterval(function(){
            $('#r2 path').attr('fill', color[Math.floor(Math.random()*color.length)]);
            if (i >= color.length) {
                i = 0;
            } else {
                i++;
            }
        }, Math.floor(Math.random() * 3000) + 1000 )
        setInterval(function(){
            $('#r3 path').attr('fill', color[Math.floor(Math.random()*color.length)]);
            if (i >= color.length) {
                i = 0;
            } else {
                i++;
            }
        }, Math.floor(Math.random() * 3000) + 1000 )
        setInterval(function(){
            $('#r4 path').attr('fill', color[Math.floor(Math.random()*color.length)]);
            if (i >= color.length) {
                i = 0;
            } else {
                i++;
            }
        }, Math.floor(Math.random() * 3000) + 1000 )
        setInterval(function(){
            $('#r5 path').attr('fill', color[Math.floor(Math.random()*color.length)]);
            if (i >= color.length) {
                i = 0;
            } else {
                i++;
            }
        }, Math.floor(Math.random() * 3000) + 1000 )
        setInterval(function(){
            $('#r6 path').attr('fill', color[Math.floor(Math.random()*color.length)]);
            if (i >= color.length) {
                i = 0;
            } else {
                i++;
            }
        }, Math.floor(Math.random() * 3000) + 1000 )
        setInterval(function(){
            $('#r7 path').attr('fill', color[Math.floor(Math.random()*color.length)]);
            if (i >= color.length) {
                i = 0;
            } else {
                i++;
            }
        }, Math.floor(Math.random() * 3000) + 1000 )

});

}) (jQuery);