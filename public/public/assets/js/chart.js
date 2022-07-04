/* ========================================================================
 * Lambda: chart.js
 * Loads charts
 * ========================================================================
 * Copyright 2014 Oxygenna LTD
 * ======================================================================== */

'use strict';

// ignore camel case because it breaks jshint for vars from php localisation
/* jshint camelcase: false */

/* global jQuery: false, Chart: false */

jQuery(document).ready(function( $ ) {

    // line chart
    var lineChart = new Chart(document.getElementById('line-chart').getContext('2d')).Line(
        {
            labels : ['June',' July',' August',' Sep',' Oct',' Nov'],
            datasets : [{
                fillColor   : 'rgba(131,200,236,0.7)',
                strokeColor : 'rgba(131,200,236,1)',
                pointColor  : 'rgba(131,200,236,1)',
                pointStrokeColor : '#ffffff',
                data        : [40,43,61,50,45,30]},
                {
                fillColor   : 'rgba(117,117,117,0.7)',
                strokeColor : 'rgba(117,117,117,1)',
                pointColor  : 'rgba(117,117,117,1)',
                pointStrokeColor : '#ffffff',
                data        : [33,15,40,22,18,10]
            }]
        },
        {
            animation: true,
            scaleFontSize: 12,
            scaleFontColor: '#666666',
            scaleOverride:true,
            scaleSteps:6,
            scaleStepWidth:10,
            scaleStartValue:0
        }
    );

    var pieChart = new Chart(document.getElementById('pie-chart').getContext('2d')).Pie(
        [{
            value   : 10,
            color   : '#93979b'
            },{
            value   : 55,
            color   : '#83c8ec'
            },{
            value   : 30,
            color   : '#84deee'
            },{
            value   : 25,
            color   : '#e9e9e9'
            },{
            value   : 15,
            color   : '#757575'
            },{
            value   : 8,
            color   : '#3c3c3c'
        }],
        {
            animation: false
        });

    // Doughnut chart
    $('#purple-dougnut').each(function() {
        var purpleDoughnut = new Chart(this.getContext('2d')).Doughnut(
            [{
                value   : 30,
                color   : '#b6b8bb'
            },{
                value   : 10,
                color   : '#93979b'
            },{
                value   : 55,
                color   : '#83c8ec'
            },{
                value   : 25,
                color   : '#e9e9e9'
            },{
                value   : 15,
                color   : '#757575'
            },{
                value   : 8,
                color   : '#3c3c3c'
            }],
            {
                animation: false,
            }
        );
    });

    // Radar chart
    var chartRadar = new Chart(document.getElementById('radar-chart').getContext('2d')).Radar(
        {
            labels : ['design',' drinking',' coding',' playing',' bloging'],
            datasets : [{
                fillColor   : 'rgba(147,151,155,0.7)',
                strokeColor : 'rgba(147,151,155,1)',
                pointColor  : 'rgba(147,151,155,1)',
                pointStrokeColor : '#FFFFFF',
                data        : [20,22,40,25,55]
                },{
                fillColor   : 'rgba(130,201,237,0.7)',
                strokeColor : 'rgba(130,201,237,1)',
                pointColor  : 'rgba(130,201,237,1)',
                pointStrokeColor : '#FFFFFF',
                data        : [15,20,30,40,35]
            }]
        },
        {
            animation: true,
            scaleFontSize: 12,
            scaleFontColor: '#666666',
            scaleOverride:false,
            scaleSteps:null,
            scaleStepWidth:null,
            scaleStartValue:null
        }
    );

    // Polar chart
    var polarChart = new Chart(document.getElementById('polar-chart').getContext('2d')).PolarArea(
        [{
            value   : 30,
            color   : 'b6b8bb'
            },{
            value   : 10,
            color   : '#93979b'
            },{
            value   : 55,
            color   : '#83c8ec'
            },{
            value   : 25,
            color   : '#e9e9e9'
            },{
            value   : 15,
            color   : '#757575'
            },{
            value   : 8,
            color   : '#3c3c3c'
        }],
        {
            animation: false,
            scaleFontSize: 12,
            scaleFontColor: '#666666',
            scaleOverride:false,
            scaleSteps:null,
            scaleStepWidth:null,
            scaleStartValue:null
        }
    );

    // bar chart
    var chartBar = new Chart(document.getElementById('bar-chart').getContext('2d')).Bar(
        {
            labels : ['June',' July',' August',' Sep',' Oct',' Nov'],
            datasets : [{
                fillColor   : 'rgba(131,200,236,0.7)',
                strokeColor : 'rgba(131,200,236,1)',
                data        : [40,43,61,50,45,30]
                },{
                fillColor   : 'rgba(117,117,117,0.7)',
                strokeColor : 'rgba(117,117,117,1)',
                data        : [33,15,40,22,18,10]
            }]
        },
        {
            animation: true,
            scaleFontSize: 12,
            scaleFontColor: '#666666',
            scaleOverride:true,
            scaleSteps:6,
            scaleStepWidth:10,
            scaleStartValue:0
        }
    );
});