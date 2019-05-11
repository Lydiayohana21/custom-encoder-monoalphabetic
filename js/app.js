var fruits = ["Apple", "Grape", "Cherry"];
const colors = ["#e1e1f1", "#c1c1c1", "#484848"];
var bgColorIdx = -1;
var vvote0 = 0;
var vvote1 = 0;
var vvote2 = 0;

function randomizeFruit(elementId) {
    var fruitIdx = Math.floor(Math.random() * fruits.length);
    var element = $("#" + elementId);
    element.text(fruits[fruitIdx]);
}

function changeBackground() {
    ++bgColorIdx;
    if (bgColorIdx == colors.length) {
        bgColorIdx = 0;
    }
    $("body").css("background", colors[bgColorIdx]);
}


function vote(num) {
    if (num == 0) {
        ++vvote0;
        $(".vote-0").html(vvote0);
    }
    else if (num == 1) {
        ++vvote1;
        $(".vote-1").html(vvote1);
    }
    else if (num == 2) {
        ++vvote2;
        $(".vote-2").html(vvote2);
    }
    else if (num == 3) {
        ++vvote3;
        $(".vote-3").html(vvote3);
    }

    // document.querySelector()
}

function loadFruit(increase) {
    const seq = getNextFruitSeq(increase);
    const url = "json/" + seq + ".json";
    console.log("url " + url);
    $.ajax({
        url: url,
        success: function (data) {
            renderFruit(data);
        }
    });
}

function renderFruit(data) {
    console.log(JSON.stringify(data));
    $("#image").attr("src", data.image);
    $("#name").text(data.name);
    $("#latin").text(data.latin);
    $("#color").text(data.color);
}

function getNextFruitSeq(increase) {
    if (increase) {
        ++fruitSeq;
    } else {
        --fruitSeq;
    }

    if (fruitSeq > 4) {
        fruitSeq = 1;
    }

    if (fruitSeq == 0) {
        fruitSeq = 4;
    }
    return (fruitSeq);
}