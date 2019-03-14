// index.js

import _ from 'lodash';

// Main Stylesheet
import './index.less';

// AOS Framework
import '../node_modules/aos/dist/aos.css';
import '../node_modules/aos/dist/aos.js';

function component() {
    let element = document.createElement('div');

    // Lodash, currently included via a script, is required for this line to work
    element.innerHTML = _.join(['Hello', 'webpack'], ' ');

    return element;
}

document.body.appendChild(component());
