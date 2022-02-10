clear.onclick = function () {
    $("#bilangan1, #bilangan2").val('');
    $("#hasil").html(0);
}

kali.onclick = function () {
    bilangan1 = $("#bilangan1").val();
    bilangan2 = $("#bilangan2").val();
    
    hasilKali = bilangan1 * bilangan2;
    $("#hasil").html(hasilKali);
}

bagi.onclick = function () {
    bilangan1 = $("#bilangan1").val();
    bilangan2 = $("#bilangan2").val();
    
    hasilBagi = bilangan1 / bilangan2;
    $("#hasil").html(hasilBagi);
}

kurang.onclick = function () {
    bilangan1 = parseFloat($("#bilangan1").val());
    bilangan2 = parseFloat($("#bilangan2").val());
    
    hasilBagi = bilangan1 - bilangan2;
    $("#hasil").html(hasilBagi);
}

tambah.onclick = function () {
    bilangan1 = parseFloat($("#bilangan1").val());
    bilangan2 = parseFloat($("#bilangan2").val());
    
    hasilBagi = bilangan1 + bilangan2;
    $("#hasil").html(hasilBagi);
}
