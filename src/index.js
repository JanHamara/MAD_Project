// index.js

// Main Stylesheet
import './index.less';

// AOS Framework
import '../node_modules/aos/dist/aos.css';
import '../node_modules/aos/dist/aos.js';

// Chart.js Framework
import Chart from 'chart.js';

// ----------------------------------------------------
//
// // #mad-chart-1 & #mad-chart-2
//
// ----------------------------------------------------


// I use Chart.js framework to create beautiful charts or doughnuts from my data

var ctx = document.getElementById('mad-chart-1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Millionaires (%)', 'Rest of Population (%)'],
        datasets: [{
            label: '% of Millionaires',
            data: [3, 97],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(50, 50, 50, 0.6)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(50, 50, 50, 0.6)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        gridLines: {
            display: false
        },
    },
    ticks: {
        fontColor: 'rgba(0, 0, 0, 0.6)',
        fontFamily: "'Raleway', sans-serif",
    },
});

var ctx2 = document.getElementById('mad-chart-2').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['World Wealth owned by Millionaires (%)', 'World Wealth owned by rest of population (%)'],
        datasets: [{
            label: '% of Millionaires',
            data: [50, 50],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(50, 50, 50, 0.6)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(50, 50, 50, 0.6)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        gridLines: {
            display: false
        },
    },
    ticks: {
        fontColor: 'rgba(0, 0, 0, 0.6)',
        fontFamily: "'Raleway', sans-serif",
    },
});

// ----------------------------------------------------
//
// #mad-chart-2
//
// ----------------------------------------------------

var ctx3 = document.getElementById('mad-chart-3').getContext('2d');
var myChart3 = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['Europe', 'Asia', 'Africa', 'North America', 'South America', 'Australia'],
        datasets: [{
            label: 'Number of Countries in Top 100',
            data: [40, 22, 12, 12, 8, 6],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
