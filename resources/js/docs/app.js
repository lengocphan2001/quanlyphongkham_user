import './bootstrapping';

import '../frontend/fonts';
import '../frontend/scrolling';
import "../frontend/syntax-highlighter.js";

$(() => {
    $('body').scrollspy({ target: '.nav-menu', offset: 50 });
});
