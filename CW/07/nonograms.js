
// =======================================================================
// ***********************************************************************
// Author : Shivani Kolanu
// Assignment : Classwork 7
// Course : Web Programming
// Assignment Description : Nonogram puzzle for practice with DOM manipulation using JavaScript.
// Filename : nonograms.js
// ************************************************************************
// ======================================================================== 
function $(id) {
    return document.getElementById(id);
}
    
function $$(que) {
    return document.querySelectorAll(que);
}


window.onload = function() {
    tiles_fill(); 
    $("clear").onclick = clear;
};


window.onmouseup = function() {
    status_of_tile = "";
    down_move = false;
};

function tiles_fill() {
    let tiles = $$(".box");
    for (let i = 0; i < tiles.length; i++) {
        let div = tiles[i];
        div.onmousedown = change_tile_box;
        div.onmouseover = drag_and_fill;
        div.onclick = function() {
        down_move = false;
        status_of_tile = "";
        };
    }
}


function change_tile_box() {
    down_move = true;
    // alert("You clicked a Tile!");

    if (this.classList.contains("filled")) {
        this.classList.remove("filled");
        this.classList.add("crossed-out");
        status_of_tile = "crossed-out";
    } else if (this.classList.contains("crossed-out")) {
        this.classList.remove("crossed-out");
        status_of_tile = "";
    } else {
        this.classList.add("filled");
        status_of_tile = "filled";
    }
}


function drag_and_fill() {
    if (down_move) {
        if (status_of_tile == "") {
        this.classList.remove("crossed-out");
        } else if (status_of_tile == "filled") {
        this.classList.add("filled");
        this.classList.remove("crossed-out");
        } else {
        this.classList.add("crossed-out");
        this.classList.remove("filled");
        }
    }
}

function clear() {
    if (confirm("Confirm if you want to clear the nonogram puzzle?")) {
        let boxes = $$(".box");
        for (let i = 0; i < boxes.length; i++) {
        boxes[i].classList.remove("filled", "crossed-out");
        }
    }
}


