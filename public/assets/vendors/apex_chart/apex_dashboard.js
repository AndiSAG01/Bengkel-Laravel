// currently sale
var options = {
    series: [74],
    chart: {
        height: 300,
        type: 'radialBar',
        offsetY: 0
    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,

            hollow: {
                margin: 0,
                size: "70%"
            },
            dataLabels: {
                showOn: "always",
                name: {
                    show: true,
                    fontSize: "13px",
                    fontWeight: "700",
                    offsetY: -5,
                    color: ["#000000", "#E5ECFF"],
                },
                value: {
                    color: ["#000000", "#E5ECFF"],
                    fontSize: "30px",
                    fontWeight: "700",
                    offsetY: -40,
                    show: true
                }
            },
            track: {
                background: ["#E5ECFF", "#E5ECFF"],
                strokeWidth: '100%'
            }
        }
    },
    colors: ["#9767FD", "#E5ECFF"],
    stroke: {
        lineCap: "round",
    },
    labels: ["Progress"]
};

var chart = new ApexCharts(document.querySelector("#chart-currently"), options);
chart.render();

/* -------------------------------------------------------------------------- */
/*                                     chart                                    */
/* -------------------------------------------------------------------------- */

options = {
    chart: {
        height: 339,
        type: "line",
        stacked: !1,
        toolbar: {
            show: !1
        }
    },
    stroke: {
        width: [0, 2, 4],
        curve: "smooth"
    },
    plotOptions: {
        bar: {
            columnWidth: "30%"
        }
    },
    colors: ["#9767FD", "#dfe2e6", "#f1b44c"],
    series: [{
            name: "Desktops",
            type: "column",
            data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
        },
        {
            name: "Laptops",
            type: "area",
            data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
        },
        {
            name: "Tablets",
            type: "line",
            data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
        },
    ],
    fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
            inverseColors: !1,
            shade: "light",
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
        }
    },
    labels: ["01/01/2003", "02/01/2003", "03/01/2003", "04/01/2003", "05/01/2003", "06/01/2003", "07/01/2003", "08/01/2003", "09/01/2003", "10/01/2003", "11/01/2003"],
    markers: {
        size: 0
    },
    xaxis: {
        type: "datetime"
    },
    yaxis: {
        title: {
            text: "Points"
        }
    },
    tooltip: {
        shared: !0,
        intersect: !1,
        y: {
            formatter: function(e) {
                return void 0 !== e ? e.toFixed(0) + " points" : e;
            },
        },
    },
    grid: {
        borderColor: "#f1f1f1"
    },
};
(chart = new ApexCharts(document.querySelector("#management_bar"), options)).render();


// cart area 

// currently sale
var options = {
    series: [{
        name: 'Net Profit',
        data: [30, 25, 45, 30, 55, 55]
    }],
    chart: {
        type: 'area',
        height: 270,
        offsetY: 0,
        toolbar: {
            show: false
        },
        zoom: {
            enabled: false
        },
        sparkline: {
            enabled: true
        }
    },
    plotOptions: {},
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: 'solid',
        opacity: .2
    },
    stroke: {
        curve: 'smooth',
        show: true,
        width: 3,
        colors: ["#9767FD", "#E5ECFF"],
    },
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
            show: false,
            style: {
                // colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                fontSize: '12px',
                // fontFamily: KTApp.getSettings()['font-family']
            }
        },
        crosshairs: {
            show: false,
            position: 'front',
            stroke: {
                color: ["#9767FD", "#E5ECFF"],
                width: 1,
                dashArray: 3
            }
        },
        tooltip: {
            enabled: true,
            formatter: undefined,
            offsetY: 0,
            style: {
                fontSize: '12px',
                // fontFamily: KTApp.getSettings()['font-family']
            }
        }
    },
    yaxis: {
        min: 0,
        max: 60,
        labels: {
            show: false,
            style: {
                // colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                fontSize: '12px',
                // fontFamily: KTApp.getSettings()['font-family']
            }
        }
    },
    states: {
        normal: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        hover: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: 'none',
                value: 0
            }
        }
    },
    tooltip: {
        style: {
            fontSize: '12px',
            // fontFamily: KTApp.getSettings()['font-family']
        },
        y: {
            formatter: function(val) {
                return "$" + val + " thousands"
            }
        }
    },
    colors: ["#9767FD", "#E5ECFF"],
    markers: {
        colors: ["#9767FD", "#E5ECFF"],
        strokeColor: ["#9767FD", "#E5ECFF"],
        strokeWidth: 3
    }
};

var chart = new ApexCharts(document.querySelector("#chart4"), options);
chart.render();