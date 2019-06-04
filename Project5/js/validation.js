function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["username"].value;
    var z = document.forms["myForm"]["years"].value;
    var x1 = document.forms["myForm"]["course"].value;
    var y1 = document.forms["myForm"]["courseCode"].value;
    var z1 = document.forms["myForm"]["quantity"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    if (y == "") {
        alert("Username must be filled out");
        return false;
    }
    if (z == "") {
        alert("Years must be filled out");
        return false;
    }
    if (x1 == "") {
        alert("Course must be filled out");
        return false;
    }
    if (y1 == "") {
        alert("Course Code must be filled out");
        return false;
    }
    if (z1 == "") {
        alert("Quantity must be filled out");
        return false;
    }
}