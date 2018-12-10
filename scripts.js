/*
 Assignment: Create Your bscacad3.buffalostate Web Page
 Author: Daniel MacLachlan
 Date: 8/11/18
 Editor: PHP Storm
 */
function september(){
    var assignments, text, total, i;
    assignments = ["Brief Introduction", "Home Page", "Web Server Setup", "PHP Page"];
    total = assignments.length;
    text = "<ol>";
    for (i = 0; i < total; i++) {
        text += "<li>" + assignments[i] + "</li>";
    }
    text += "</ol>";
    document.getElementById("assign1").innerHTML = text;
    text = "<ol>";
}

function october(){
    var assignments, text, total, i;
    assignments = ["Loop/Array/Function Page", "File I/O Page", "MySQL Table", "PHP/MySQL Table"];
    total = assignments.length;
    text = "<ol>";
    for (i = 0; i < total; i++) {
        text += "<li>" + assignments[i] + "</li>";
    }
    text += "</ol>";
    document.getElementById("assign1").innerHTML = text;
    text = "<ol>";
}

function november(){
    var assignments, text, total, i;
    assignments = ["PHP/MySQL Form", "PHP/JavaScript AJAX Page", "User Registration Site", "Mango"];
    total = assignments.length;
    text = "<ol>";
    for (i = 0; i < total; i++) {
        text += "<li>" + assignments[i] + "</li>";
    }
    text += "</ol>";
    document.getElementById("assign1").innerHTML = text;
    text = "<ol>";
}

function december(){
    var assignments, text, total, i;
    assignments = ["User Administrator Site", "All Work Due By 11:59PM December 13th", "I Graduate!"];
    total = assignments.length;
    text = "<ol>";
    for (i = 0; i < total; i++) {
        text += "<li>" + assignments[i] + "</li>";
    }
    text += "</ol>";
    document.getElementById("assign1").innerHTML = text;
    text = "<ol>";
}