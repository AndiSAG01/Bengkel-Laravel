var options1 = {
        series: [{
            name: "2020",
            type: "column",
            data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }, {
            name: "2019",
            type: "line",
            data: [23, 32, 27, 38, 27, 32, 27, 38, 22, 31, 21, 16]
        }],
        chart: {
            height: 280,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            width: [0, 3],
            curve: "smooth"
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "20%"
            }
        },
        dataLabels: {
            enabled: !1
        },
        legend: {
            show: !1
        },
        colors: ["#FF725E", "#FF725E"],
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    },
    chart1 = new ApexCharts(document.querySelector("#line-column-chart"), options1);
chart1.render();


// line chart 2 
var options = {
        series: [{
            name: "2020",
            type: "column",
            data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }, {
            name: "2019",
            type: "line",
            data: [23, 32, 27, 38, 27, 32, 27, 38, 22, 31, 21, 16]
        }],
        chart: {
            height: 280,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            width: [0, 3],
            curve: "smooth"
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "20%"
            }
        },
        dataLabels: {
            enabled: !1
        },
        legend: {
            show: !1
        },
        colors: ["#6F7BD9", "#3EC59D"],
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    },
    chart = new ApexCharts(document.querySelector("#line-column-chart2"), options);
chart.render();