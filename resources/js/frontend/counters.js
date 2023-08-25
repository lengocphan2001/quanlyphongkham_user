import counterUp from 'counterup2'

const counters = document.querySelectorAll( '.counter' )

// Start counting, do this on DOM ready or with Waypoints.
if (counters && counters.length > 0) {
    counters.forEach(el =>
        new Waypoint({
            element: el,
            handler: function() {
                counterUp(el, {
                    duration: 1000,
                    delay: 16,
                })

                this.destroy()
            },
            offset: 'bottom-in-view',
        })
    );
}
