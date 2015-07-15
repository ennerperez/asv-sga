<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">

        <style>
            #svg_not_supported {
                color: red;
            }
            path {
                stroke: #fff;
                fill-rule: evenodd;
            }
            div.tooltip {
                position: fixed;
                text-align: center;
                min-width: 60px;
                min-height: 14px;
                padding: 4px;
                font: 12px sans-serif;
                background: white;
                border: 0px;
                pointer-events: none;
            }

            body {
                text-align: center;
            }

            * {
                font-family: 'RobotoDraft';
            }
            
            /*.svg-container {
                display: inline-block;
                position: relative;
                width: 100%;
                padding-bottom: 100%;
                vertical-align: middle;
                overflow: hidden;
            }*/
            
        </style>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>

    </head>
    <body>
        <h1>Disk Usage</h1>
        <div id="svg_not_supported"></div>
        <div id="rbdusb_loading">
            <p>Please wait ultil load finished.</p>
            <img src="https://raw.githubusercontent.com/wp-plugins/disk-usage-sunburst/master/img/loading.gif" alt="Loading...">
        </div>
        <div id="content" class="svg-container"></div>
        <script>

            function supportsSVG() {
                return !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', "svg").createSVGRect;
            }
            if (!supportsSVG()) {
                $('#svg_not_supported').html("This plugin depends on SVG. Unfortunately your browser does not support SVG. Please update to a modern browser...");
            }

            var width = 500; //screen.width/1.5;
            var height = 500; //screen.height/1.5;
            var radius = Math.min(width, height) / 2;

            var x = d3.scale.linear()
                                        .range([0, 2 * Math.PI]);

            var y = d3.scale.sqrt()
                                        .range([0, radius]);

            var color = d3.scale.category20c();

            var svg = d3.select("#content").append("svg")
                                        .attr("id", "rbdusb_svg")
                                        .attr("width", width)
                                        .attr("height", height)
                                        .attr("preserveAspectRatio", "xMinYMin meet")
                                        .append("g")
                                        .attr("transform", "translate(" + width / 2 + "," + (height / 2 + 10) + ")");

            var partition = d3.layout.partition()
                                        .value(function (d) { return d.size; });

            var arc = d3.svg.arc()
                                        .startAngle(function (d) { return Math.max(0, Math.min(2 * Math.PI, x(d.x))); })
                                        .endAngle(function (d) { return Math.max(0, Math.min(2 * Math.PI, x(d.x + d.dx))); })
                                        .innerRadius(function (d) { return Math.max(0, y(d.y)); })
                                        .outerRadius(function (d) { return Math.max(0, y(d.y + d.dy)); });

            var tooltip = d3.select("#content").append("div")
                                        .attr("class", "tooltip")
                                        .style("opacity", 0);

            $.ajax({
                url: "usage.php"
            }).done(
                        function (rawData) {

                            jQuery('#rbdusb_loading').fadeOut();

                            var root = rawData;
                            var path = svg.selectAll("path")
                                .data(partition.nodes(root))
                              .enter().append("path")
                                .attr("d", arc)
                                .style("fill", function (d) { return color((d.children ? d : d.parent).name); })
                                .on("click", click)
                                .on("mousemove", function (d) {
                                    tooltip.transition().duration(200).style("opacity", .9);
                                    tooltip.html(d.name)
                                      .style("left", (d3.event.clientX + 20) + "px")
                                      .style("top", (d3.event.clientY - 20) + "px");
                                })
                                .on("mouseout", function () {
                                    tooltip.transition().duration(200).style("opacity", 0);
                                });
                            function click(d) {
                                path.transition()
                                .duration(750)
                                .attrTween("d", arcTween(d));
                            }
                        }
                        ).fail(function () {
                            jQuery('#rbdusb_loading').html('Unfortunately there was an error. File/directory sizes could not be determined. Reload to try again.');
                        });

            d3.select(self.frameElement).style("height", height + "px");
            // Interpolate the scales!
            function arcTween(d) {
                var xd = d3.interpolate(x.domain(), [d.x, d.x + d.dx]),
                          yd = d3.interpolate(y.domain(), [d.y, 1]),
                          yr = d3.interpolate(y.range(), [d.y ? 20 : 0, radius]);
                return function (d, i) {
                    return i
                            ? function (t) { return arc(d); }
                            : function (t) { x.domain(xd(t)); y.domain(yd(t)).range(yr(t)); return arc(d); };
                };
            }


        </script>
    </body>
</html>

