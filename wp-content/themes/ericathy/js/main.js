$(document).ready(function(){
    $('.timer[data-time]').each(function(){
        var $this = $(this);
        var timer = getTimer();
        timer.get( $this.data('time'), function(html){
            $this.html(html);
            if( $this.is(':hidden') ){
                $this.slideDown();
            }
        });
    });
    $('.clock').each(function(){
        var $this = $(this);
        setClock.call( this, function(i, s){
            $this.css({ 'transform': 'rotate('+i+'deg)' });
            $this.find('.clock-m').css({ 'transform': 'rotate('+s+'deg)' });
        });
    });
});

var SECOND = 1000;
var MINUTE = 60 * SECOND;
var HOUR = 60 * MINUTE;
var DAY = 24 * HOUR;
var MONTH = 30 * DAY;
var YEAR = 365 * DAY;
var PI = 3.141592653;

function setClock( callback ){
    var time = new Date(),
        i = Math.floor( (time % HOUR) / MINUTE * 6 ),
        s = Math.floor( (time % MINUTE) / SECOND * 6 );

    callback( i, s );
}
function getTimer(){
    return new function(){
        var the = this;

        this.timer_id = 1;
        this.start = this.time;
        this.callback = function(){};
        this.get = function ( timeString, callback ) {
            var time = new Date(timeString);
            this.time = new Date();
            this.start = timeString;
            this.callback = callback || function(){};
            if( time ) {
                var diff = Math.abs( time - this.time );
                return this.getHTML({
                    y : Math.floor( diff / YEAR ),
                    m : Math.floor(( diff % YEAR ) / MONTH ),
                    d : Math.floor(( diff % MONTH ) / DAY ),
                    h : Math.floor(( diff % DAY ) / HOUR ),
                    i : Math.floor(( diff % HOUR ) / MINUTE ),
                    s : Math.floor(( diff % MINUTE )  / SECOND )
                });
            }
        }
        this.getHTML = function ( timer ) {
            var html = '<span id="'+this.timer_id+'">';
            this.timer_id++;
            if( timer.y ){
                html += '<strong class="timer_y">'+timer.y+'</strong><small>Y</small>';
            }
            if( timer.y || timer.m ){
                html += '<strong class="timer_m">'+timer.m+'</strong><small>M</small>';
            }
            if( timer.y || timer.m || timer.d ){
                html += '<strong class="timer_d">'+timer.d+'</strong><small>D</small>';
            }
            //if( timer.y || timer.m || timer.d || timer.h ){
                html += '<strong class="timer_h">'+timer.h+'</strong><small>H</small>';
            /*
            }
            if( timer.y || timer.m || timer.d || timer.h || timer.i ){
                html += '<strong class="timer_i">'+timer.i+'</strong><small>M</small>';
            }
            html += '<strong class="timer_s">'+timer.s+'</strong><small>S</small>';
            */
            html += '</span>';
            this.setTimer();
            the.callback(html);
            return html;
        }
        this.setTimer = function(){
            window.setTimeout(function(){
                the.get(the.start, the.callback);
            }, HOUR - ((new Date())%HOUR) );
        }
    }
}
