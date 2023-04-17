<!--Load the AJAX API-->
<!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script> -->
<!-- <script type="text/javascript">
    google.load('visualization', '1.0', {
        'packages': ['corechart']
    });
    google.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        var data=new google.visualization.data;

        var rows=new Array();
        var tenhh=new Array();
        var soluongban=new Array();
        var datatenhh=0;
        var soluonghh=0;
        <?php
        // $hh=new HangHoa();
        // $result=$hh->getListThongke_SL_mathang()->fetch();
        // while ($set=$result)
        // {
        //     $tenhh=$set['tenhh'];
        //     $slb=$set['soluongban'];
        //     echo"tenhh.push('".$tenhh."');";
        //     echo"soluongban.push('".$slb."');";
        // }
        ?>    

        for (var i=0;i<tenhh.length; i++) 
        {
            datatenhh=tenhh[i];
            soluonghh=parseInt(soluongban[i]);
            rows.push([datatenhh,soluonghh]);
        }

        data.addCollumn("string","Hàng hoá");
        data.addCollumn('number',"Số lượng bán");
        data.addRows(rows);


        var option={
            title: 'Thống kê số lượng bán của hàng hoá',
            'width': 600,
            'height': 400,
            'backgroundcolor':'#ffffff',
            is3D:true
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, option);
    }
</script> -->
<!-- <div class="container">
    <div style=" width:50%;" id="chart_div"><h3>Thống Kê</h3></div>
</div> -->


<!-- ---------------------------------------------------------------------------------------- -->

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!--Soluongban-->
    <?php
    $con = new connect('localhost', 'root', '', 'test');
    $query = $con->getlist("select a.tenhh, sum(b.soluongmua)as soluongban from hanghoa a INNER join cthoadon b on a.mahh=b.mahh 
    GROUP by a.tenhh");

    foreach ($query as $data) {
        $tenhh[] = $data['tenhh'];
        $soluongban[] = $data['soluongban'];
    }
    ?>

    <div class="container" style="width: 100%; height: 700px; text-align: center; font-family: Arial, Helvetica, sans-serif;">
        <h1><p>Bảng Thống Kê Số Lượng Bán</p></h1>
        <canvas id="myChart"></canvas>
    </div>

    <script>
        // === include 'setup' then 'config' above ===
        const labels = <?php echo json_encode($tenhh) ?>;
        const data = {
            labels: labels,
            datasets: [{
                label: 'Thống kê số lượng bán của hàng hoá',
                data: <?php echo json_encode($soluongban) ?>,
                fill: false,
                borderColor: 'rgb(255, 20, 55)',
                tension: 0.2
            }]
        };

        const config = {
            type: 'line',
            data: data,
        };
        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
</body>