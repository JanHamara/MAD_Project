// index.js

import _ from 'lodash';

// Main Stylesheet
import './index.less';

// AOS Framework
import '../node_modules/aos/dist/aos.css';
import '../node_modules/aos/dist/aos.js';

// Chart.js Framework
import Chart from 'chart.js';

// ----------------------------------------------------

// #mad-chart-1

// ----------------------------------------------------
// var ctx = document.getElementById('mad-chart-1').getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//         labels: ['Millionaires', 'Rest of Population'],
//         datasets: [{
//             label: '% of Millionaires',
//             data: [3, 97],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.6)',
//                 'rgba(50, 50, 50, 0.6)',
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 0.6)',
//                 'rgba(50, 50, 50, 0.6)',
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         gridLines: {
//             display: false
//         },
//     },
//     ticks: {
//         fontColor: 'rgba(0, 0, 0, 0.6)',
//         fontFamily: "'Raleway', sans-serif",
//     },
// });