!(function(o) {
    "use strict";
    function t() {}
    (t.prototype.initCustomSelect = function() {
        o('[data-plugin="customselect"]').select2();
    }),
        (t.prototype.initFlatpickr = function() {
            o(".basic-datepicker").flatpickr();
        }),
        (t.prototype.initTouchspin = function() {
            var a = {};
            o('[data-toggle="touchspin"]').each(function(t, i) {
                var e = o.extend({}, a, o(i).data());
                o(i).TouchSpin(e);
            });
        }),
        (t.prototype.init = function() {
            this.initCustomSelect(), this.initFlatpickr(), this.initTouchspin();
        }),
        (o.Components = new t()),
        (o.Components.Constructor = t);
})(window.jQuery),
    (function() {
        "use strict";
        window.jQuery.Components.init();
    })();
