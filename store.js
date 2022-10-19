///var currentItems = 0;
$(document).ready(function () {

    /* $(".add-to-cart").click(function () {
        currentItems++;
        $(".nav-cart-icon").text(currentItems);
    }); */

    console.log("wtf is hapning")

    $(".cd-select option").filter(function () {
        return $.trim($(this).text()) == ''
    }).remove();

});


var ism = document.getElementsByClassName("dolar")


var th2 = document.getElementById("h2")

btn.onclick = function () {
    var t = ism.value          // tokhredjlk laktiba li ktabtha
    th2.innerText = t
}

ism.onkeyup = function () {
    var t = ism.value
    th3.innerText = t     // hna ta3tilna ch7al men 7arf kayn
}

function myNewFunction(sel) {
    //alert(sel.options[sel.selectedIndex].text);
    console.log(sel.options[sel.selectedIndex].text);
    th2.innerText = sel.options[sel.selectedIndex].text;

    //console.log(th2.value)
}

btn.onclick = function () {
    console.log(th2.value)
}










