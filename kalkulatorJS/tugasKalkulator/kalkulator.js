// let kali = document.querySelector("#kali");
// let bagi = document.querySelector("#bagi");
// let tambah = document.querySelector("#tambah");
// let kurang = document.querySelector("#kurang");

let bil1 = document.querySelector("#bil-1");
let bil2 = document.querySelector("#bil-2");
let hasil = document.querySelector("#hasil");

// memberi event
kali.onclick = function () {
    let a = bil1.value;
    let b = bil2.value;
    let c = a * b;
        
    hasil.innerHTML = c ;
};
bagi.onclick = function () {
    let a = bil1.value;
    let b = bil2.value;
    let c = a / b;
        
    hasil.innerHTML = c ;
};
tambah.onclick = function () {
    let a = parseInt(bil1.value);
    let b = parseInt(bil2.value);
    let c = a + b;
        
    hasil.innerHTML = c ;
};
kurang.onclick = function () {
    let a = bil1.value;
    let b = bil2.value;
    let c = a - b;
        
    hasil.innerHTML = c ;
};

// bagi.onclick = function () {
//     alert("lorem");
// };
// tambah.onclick = function () {
//     alert("lorem");
// };
// kurang.onclick = function () {
//     alert("lorem");
// };