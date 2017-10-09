/**
* Theme: Montran Admin Template
* Author: Coderthemes
* Chart Js Page
*
*/

!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function respChart(selector,type,data, options) {
        // get selector by context
        var ctx = document.getElementById("bar").getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Bar':
                    new Chart(ctx).Bar(data, options);
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {

        //barchart
        var colleges;
        $.ajax({
            type: "POST",
            url: 'actions/drawGraph.php',
            dataType: 'json',
            success: function(data){
                // console.log(data.colleges);
                colleges = data.colleges;
            },
            async:false
        });

        var resultspercollege = [5,9,9,8,5,5];
        var data3 = {
            labels : colleges,
                    datasets : [
                        {
                            fillColor : "#317eeb",
                            strokeColor : "#317eeb",
                            data : resultspercollege
                        }/*,
                        {
                            fillColor : "#dcdcdc",
                            strokeColor : "#dcdcdc",
                            data : [28,48,40,19,96,27,100,48,40,19,96,27,100]
                        }*/
                    ],
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        }
        this.respChart($("#bar"),'Bar',data3);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);
