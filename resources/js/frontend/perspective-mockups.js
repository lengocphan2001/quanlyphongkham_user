$(function() {
// This element is used as reference for relocation of the mockups on mobile devices.
// If you remove it please be sure you add another reference element preferably within the same section and/or position the button was.
// You can change the selector (".learn-more") to one that uniquely identifies the reference element.
    const $topReference = $(".learn-more", ".lightweight-template");

    /** Perspective mockups reference **/
    const $perspectiveMockups = $(".perspective-mockups");

    const setMockupsTop = function () {
        // check if the perspective mockups elements are on the page, if you're not going to use them, you can remove all its references
        if (!$perspectiveMockups.length) return;

        if ($(window).outerWidth() < 768) {
            $perspectiveMockups.css({top: $topReference.offset().top + "px"});
            return;
        }

        $perspectiveMockups.removeAttr("style");
    };

    /**
     * Position the perspective mockups at the end of the first content section on mobile
     **/
    $perspectiveMockups.removeClass("hidden-preload");
    $(window).on("resize", setMockupsTop);

    setMockupsTop();
});
