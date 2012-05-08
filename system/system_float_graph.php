<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Flot Examples</title>
    <link href="basic_files/layout.css" rel="stylesheet" type="text/css">
    <!--[if IE]><script language="javascript" type="text/javascript" src="../excanvas.pack.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="http://localhost/latihan/views/admin/jquery/jquery_002.js"></script>
    <script language="javascript" type="text/javascript" src="http://localhost/latihan/views/admin/jquery/jqueryplot.js"></script>
 </head><body>
    <h1>Flot Examples</h1>

    <div id="placeholder" style="width: 600px; height: 300px; position: relative;"><canvas width="600" height="300"></canvas><canvas style="position: absolute; left: 0px; top: 0px;" width="600" height="300"></canvas><div class="tickLabels" style="font-size: smaller; color: rgb(84, 84, 84);"><div style="position: absolute; top: 284px; left: -20px; width: 100px; text-align: center;" class="tickLabel">0</div><div style="position: absolute; top: 284px; left: 63.2593px; width: 100px; text-align: center;" class="tickLabel">2</div><div style="position: absolute; top: 284px; left: 146.519px; width: 100px; text-align: center;" class="tickLabel">4</div><div style="position: absolute; top: 284px; left: 229.778px; width: 100px; text-align: center;" class="tickLabel">6</div><div style="position: absolute; top: 284px; left: 313.037px; width: 100px; text-align: center;" class="tickLabel">8</div><div style="position: absolute; top: 284px; left: 396.296px; width: 100px; text-align: center;" class="tickLabel">10</div><div style="position: absolute; top: 284px; left: 479.556px; width: 100px; text-align: center;" class="tickLabel">12</div><div style="position: absolute; top: 271px; right: 575px; width: 25px; text-align: right;" class="tickLabel">-2.5</div><div style="position: absolute; top: 228.081px; right: 575px; width: 25px; text-align: right;" class="tickLabel">0.0</div><div style="position: absolute; top: 185.162px; right: 575px; width: 25px; text-align: right;" class="tickLabel">2.5</div><div style="position: absolute; top: 142.243px; right: 575px; width: 25px; text-align: right;" class="tickLabel">5.0</div><div style="position: absolute; top: 99.3245px; right: 575px; width: 25px; text-align: right;" class="tickLabel">7.5</div><div style="position: absolute; top: 56.4057px; right: 575px; width: 25px; text-align: right;" class="tickLabel">10.0</div><div style="position: absolute; top: 13.4868px; right: 575px; width: 25px; text-align: right;" class="tickLabel">12.5</div></div></div>

    <p>Simple example. You don't need to specify much to get an
       attractive look. Put in a placeholder, make sure you set its
       dimensions (otherwise the plot library will barf) and call the
       plot function with the data. The axes are automatically
       scaled.</p>

<script id="source" language="javascript" type="text/javascript">
$(function () {
    var d1 = [];


    var d2 = [[1254614400000,5],[1255219200000, 2],[1255392000000,4]];
	var d3 = [[1254614400000,1],[1255219200000, 5],[1255392000000,2]];
	
	 var axis={
				mode: "time",
				timeformat: "%d/%m/%y",
				monthName: ["jan", "feb", "mar", "apr", "maj", "jun", "jul", "aug", "sep", "okt", "nov", "dec"],
				};
	 
	 var option={		
	 		points: {show:true},
			lines: {show:true},
			grid: { hoverable: true, clickable: true },
			xaxis:axis
		};
		function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #fdd',
            padding: '2px',
            'background-color': '#fee',
            opacity: 0.80
        }).appendTo("body").fadeIn(200);
    }
	$("#placeholder").bind("plothover", function (event, pos, item) {
		if (item) {         
		 var x = item.datapoint[0].toFixed(2),
             y = item.datapoint[1].toFixed(2);        
            showTooltip(item.pageX, item.pageY,
            item.series.label + " of " + x + " = " + y);
            }
            else {
            $("#tooltip").remove();
            }
		});

    $.plot($("#placeholder"), [
	{ data:d2,
	  label:"dofol",
	},
	{ data:d3,
	  label:"dodol",
	}
	  ],option);
});
</script>

 </body></html>