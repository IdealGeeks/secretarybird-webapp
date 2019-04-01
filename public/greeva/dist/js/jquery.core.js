!function(o){"use strict";var t=function(){};t.prototype.initTooltipPlugin=function(){o.fn.tooltip&&o('[data-toggle="tooltip"]').tooltip()},t.prototype.initPopoverPlugin=function(){o.fn.popover&&o('[data-toggle="popover"]').popover()},t.prototype.initCustomModalPlugin=function(){o('[data-plugin="custommodal"]').on("click",function(t){t.preventDefault(),new Custombox.modal({content:{target:o(this).attr("href"),effect:o(this).attr("data-animation"),overlaySpeed:o(this).attr("data-overlaySpeed"),overlayColor:o(this).attr("data-overlayColor")}}).open()})},t.prototype.initSlimScrollPlugin=function(){o.fn.slimScroll&&o(".slimscroll-alt").slimScroll({position:"right",size:"5px",color:"#98a6ad",wheelStep:10}),o.fn.slimScroll&&o(".slimscroll").slimScroll({height:"auto",position:"right",size:"8px",color:"#9ea5ab"})},t.prototype.initRangeSlider=function(){o.fn.slider&&o('[data-plugin="range-slider"]').slider({})},t.prototype.initSwitchery=function(){o('[data-plugin="switchery"]').each(function(t,i){new Switchery(o(this)[0],o(this).data())})},t.prototype.initKnob=function(){o('[data-plugin="knob"]').each(function(t,i){o(this).knob()})},t.prototype.initCounterUp=function(){o(this).attr("data-delay")&&o(this).attr("data-delay"),o(this).attr("data-time")&&o(this).attr("data-time");o('[data-plugin="counterup"]').each(function(t,i){o(this).counterUp({delay:100,time:1200})})},t.prototype.init=function(){this.initTooltipPlugin(),this.initPopoverPlugin(),this.initSlimScrollPlugin(),this.initCustomModalPlugin(),this.initRangeSlider(),this.initSwitchery(),this.initKnob(),this.initCounterUp()},o.Components=new t,o.Components.Constructor=t}(window.jQuery),function(t){"use strict";window.jQuery.Components.init()}();