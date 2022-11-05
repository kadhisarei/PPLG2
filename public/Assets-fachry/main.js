function increase() {
    // Change the variable to modify the speed of the number increasing from 0 to (ms)
    let SPEED = 40;
    // Retrieve the percentage value
    let limit = parseInt(document.getElementById("value1").innerHTML, 10);
    let limit2 = parseInt(document.getElementById("value2").innerHTML, 10);
    let limit3 = parseInt(document.getElementById("value3").innerHTML, 10);

    for(let i = 0; i <= limit; i++) {
        setTimeout(function () {
            document.getElementById("value1").innerHTML = i + "%";
        }, SPEED * i);
    }
    for(let i = 0; i <= limit2; i++) {
        setTimeout(function () {
            document.getElementById("value2").innerHTML = i + "%";
        }, SPEED * i);
    }
    for(let i = 0; i <= limit3; i++) {
        setTimeout(function () {
            document.getElementById("value3").innerHTML = i + "%";
        }, SPEED * i);
    }
}

increase();