/*
(function(){
    var arr = [];
    for ( var i = 0; i < 10000000; i++ ) arr[i]=i;

    console.time('forEach');
    var sum = 0;
    arr.forEach(function(k){sum+=k});
    console.timeEnd('forEach');
})();

(function(){
    var arr = [];
    for ( var i = 0; i < 10000000; i++ ) arr[i]=i;
    
    console.time('for');
    var sum = 0;
    for ( var i = 0; i < arr.length; i++){sum+=arr[i]}
    console.timeEnd('for');
})()
//*/
~function() {
    var arr = [];
    for ( var i = 0; i < 1000000; i++)
        arr[i] = i;

    console.time('forEach');
    var sum = 0;
    arr.forEach(function(k, i) {
        sum += k + k % Number(i + "0");
    });
    console.timeEnd('forEach');

    console.time('for');
    var sum = 0;
    for ( var i = 0, L = arr.length; i < L; i++) {
        var k = arr[i];
        sum += k + k % Number(i + "0");
    }
    console.timeEnd('for');

}();
