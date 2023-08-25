/**
 * We'll load Bootstrap
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

import $ from 'jquery';

try {
    window.$ = window.jQuery = $;
    window.Popper = require('popper.js').default;

    require("bootstrap");
} catch (e) {}
