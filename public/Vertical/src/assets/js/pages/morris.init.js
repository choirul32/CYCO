/*
Template Name: Xoric - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Version: 1.0.0
Website: https://themesdesign.in/
File: Morris Init Js
*/


$(function () {
    'use strict';

    // Line Chart
    if ($('#morris-line-example').length) {
        Morris.Line({
            element: 'morris-line-example',
            gridLineColor: 'rgba(108, 120, 151, 0.1)',
            lineColors: ['#3051d3', '#3ddc97'],
            xkey: 'y',
            ykeys: ['a', 'b'],
            hideHover: 'auto',
            resize: true,
            lineWidth: 2,
            labels: ['Series A', 'Series B'],
            data: [
                {
                    y: '2010',
                    a: 110,
                    b: 125
                },
                {
                    y: '2011',
                    a: 170,
                    b: 190
                },
                {
                    y: '2012',
                    a: 120,
                    b: 140
                },
                {
                    y: '2013',
                    a: 80,
                    b: 100
                },
                {
                    y: '2014',
                    a: 110,
                    b: 130
                },
                {
                    y: '2015',
                    a: 90,
                    b: 110
                },
                {
                    y: '2016',
                    a: 120,
                    b: 140
                },
                {
                    y: '2017',
                    a: 110,
                    b: 125
                },
                {
                    y: '2018',
                    a: 170,
                    b: 190
                },
                {
                    y: '2019',
                    a: 120,
                    b: 140
                }
            ]
        });
    }

    // Bar Chart
    if ($("#morris-bar-example").length) {
        Morris.Bar({
            element: 'morris-bar-example',
            barColors: ['#eff2f7', '#00a7e1'],
            data: [
            {
                y: '2010',
                a: 110,
                b: 125
            },
            {
                y: '2011',
                a: 170,
                b: 190
            },
            {
                y: '2012',
                a: 120,
                b: 140
            },
            {
                y: '2013',
                a: 80,
                b: 100
            },
            {
                y: '2014',
                a: 110,
                b: 130
            },
            {
                y: '2015',
                a: 90,
                b: 110
            },
            {
                y: '2016',
                a: 120,
                b: 140
            },
            {
                y: '2017',
                a: 110,
                b: 125
            },
            {
                y: '2018',
                a: 170,
                b: 190
            },
            {
                y: '2019',
                a: 120,
                b: 140
            }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            hideHover: 'auto',
            gridLineColor: 'rgba(108, 120, 151, 0.1)',
            resize: true,
            barSizeRatio: 0.3,
            preUnits:"$",
            labels: ['Series A', 'Series B']
        });
    }

    // Area Chart
    if ($('#morris-area-example').length) {
        Morris.Area({
            element: 'morris-area-example',
            lineColors: ['#3051d3', '#7c8a96'],
            data: [{
                y: '2013',
                a: 80,
                b: 100
            },
            {
                y: '2014',
                a: 110,
                b: 130
            },
            {
                y: '2015',
                a: 90,
                b: 110
            },
            {
                y: '2016',
                a: 120,
                b: 140
            },
            {
                y: '2017',
                a: 110,
                b: 125
            },
            {
                y: '2018',
                a: 170,
                b: 190
            },
            {
                y: '2019',
                a: 120,
                b: 140
            }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            hideHover: 'auto',
            gridLineColor: 'rgba(108, 120, 151, 0.1)',
            resize: true,
            fillOpacity:.4,
            lineWidth: 2,
            labels: ['Series A', 'Series B']
        });
    }

    // Donut Chart
    if ($("#morris-donut-example").length) {
        Morris.Donut({
            element: 'morris-donut-example',
            resize: true,
            colors: ['#00a7e1', '#3051d3', '#eff2f7'],
            data: [{
                label: "Samsung Mobiles",
                value: 12
            },
            {
                label: "Apple Mobiles",
                value: 30
            },
            {
                label: "Vivo Mobiles",
                value: 20
            }
            ]
        });
    }

    // Stacked Chart
    if ($("#morris-stacked-example").length) {
        Morris.Bar({
            element: 'morris-stacked-example',
            barColors: ['#3051d3', '#eff2f7'],
            data: [
            {
                y: '2010',
                a: 110,
                b: 125
            },
            {
                y: '2011',
                a: 170,
                b: 190
            },
            {
                y: '2012',
                a: 120,
                b: 140
            },
            {
                y: '2013',
                a: 80,
                b: 100
            },
            {
                y: '2014',
                a: 110,
                b: 130
            },
            {
                y: '2015',
                a: 90,
                b: 110
            },
            {
                y: '2016',
                a: 120,
                b: 140
            },
            {
                y: '2017',
                a: 110,
                b: 125
            },
            {
                y: '2018',
                a: 170,
                b: 190
            },
            {
                y: '2019',
                a: 120,
                b: 140
            }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            hideHover: 'auto',
            gridLineColor: 'rgba(108, 120, 151, 0.1)',
            resize: true,
            barSizeRatio: 0.3,
            preUnits:"$",
            stacked: true,
            labels: ['Series A', 'Series B']
        });
    }

    // Line Straight Chart
    if ($('#morris-line-straight-example').length) {
        Morris.Line({
            element: 'morris-line-straight-example',
            gridLineColor: 'rgba(108, 120, 151, 0.1)',
            lineColors: ['#3ddc97', '#7c8a96'],
            xkey: 'y',
            ykeys: ['a', 'b'],
            hideHover: 'auto',
            resize: true,
            lineWidth: 2,
            smooth: false,
            labels: ['Series A', 'Series B'],
            data: [
                {
                    y: '2010',
                    a: 110,
                    b: 125
                },
                {
                    y: '2011',
                    a: 170,
                    b: 190
                },
                {
                    y: '2012',
                    a: 120,
                    b: 140
                },
                {
                    y: '2013',
                    a: 80,
                    b: 100
                },
                {
                    y: '2014',
                    a: 110,
                    b: 130
                },
                {
                    y: '2015',
                    a: 90,
                    b: 110
                },
                {
                    y: '2016',
                    a: 120,
                    b: 140
                },
                {
                    y: '2017',
                    a: 110,
                    b: 125
                },
                {
                    y: '2018',
                    a: 170,
                    b: 190
                },
                {
                    y: '2019',
                    a: 120,
                    b: 140
                }
            ]
        });
    }

});
