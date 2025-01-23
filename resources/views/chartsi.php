<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<body>
<div id="bar-example" style="height: 300px;width: 500px"></div>
<div id="line-example" style="height: 300px;width: 500px"></div>
<div id="area-example" style="height: 300px;width: 500px"></div>
<div id="donut-example" style="height: 300px;width: 500px"></div>
<script>
    Morris.Bar({
  element: 'bar-example',
  data: [
    { y: '2006', a: 100, b: 20, c: 20 },
    { y: '2007', a: 75,  b: 65, c: 45 },
    { y: '2008', a: 50,  b: 40, c: 72 },
    { y: '2009', a: 75,  b: 65, c: 66 },
    { y: '2010', a: 50,  b: 40, c: 44 },
    { y: '2011', a: 75,  b: 65, c: 40 },
    { y: '2012', a: 100, b: 90, c: 72 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b', 'c'],
  labels: ['Series A', 'Series B', 'Series C']
});
</script>
<script>
    Morris.Line({
  element: 'line-example',
  data: [
    { y: '2006', a: 100, b: 90, c: 20 },
    { y: '2007', a: 75,  b: 65, c: 75 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>
<script>
    Morris.Area({
      element: 'area-example',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>
<script>
    Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20},
    {label: "New-Order Sales", value: 15}
  ]
});
</script>
</body>
</html>