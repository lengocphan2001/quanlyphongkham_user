(function() {
    $(".whyus-progress-bars").animateBar({
        orientation: "horizontal",
        step: 100,
        duration: 1000,
        elements: [
            { label: "Implementation", value: 19, style: { progress: "xs" } }, // style: { progress: "progress-4" }
            { label: "Design", value: 75, style: { progress: "xs" } },
            { label: "Branding", value: 34, style: { progress: "xs" } },
            { label: "Beauty", value: 55, style: { progress: "xs" } },
            { label: "Responsiveness", value: 89, style: { progress: "xs" } }
        ]
    });
})();
