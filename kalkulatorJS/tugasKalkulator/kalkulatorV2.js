kali.onclick = function () {
    let a = document.querySelector("#bil-1").value;
    let b = document.querySelector("#bil-2").value;
    let c = a * b;
    document.querySelector("#hasil").innerHTML = c;
};

bagi.onclick = function () {
    let a = document.querySelector("#bil-1").value;
    let b = document.querySelector("#bil-2").value;
    let c = a / b;
    document.querySelector("#hasil").innerHTML = c;
}

tambah.onclick = function () {
    let a = parseFloat(document.querySelector("#bil-1").value);
    let b = parseFloat(document.querySelector("#bil-2").value);
    let c = a + b;
    document.querySelector("#hasil").innerHTML = c;
}

kurang.onclick = function () {
    let a = parseFloat(document.querySelector("#bil-1").value);
    let b = parseFloat(document.querySelector("#bil-2").value);
    let c = a - b;
    document.querySelector("#hasil").innerHTML = c;
}

let halo = function () {
    alert("Hello world!");
}

// document.querySelector("#bil-1").style.backgroundColor = "red";

