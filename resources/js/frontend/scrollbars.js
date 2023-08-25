import PerfectScrollbar from 'perfect-scrollbar';
import 'perfect-scrollbar/css/perfect-scrollbar.css';

/**
 * Enabling PerfectScrollbar
 **/
const scrollbars = document.querySelectorAll("[data-ps]");

if (scrollbars && scrollbars.length > 0) {
    scrollbars.forEach(scrollbar => {
        const ps = new PerfectScrollbar(scrollbar, {
            suppressScrollX: true
        });

        ps.update();
    })
}
