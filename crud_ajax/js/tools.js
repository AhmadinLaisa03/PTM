$(document).ready(function () {
    selectData();

    function selectData() {
        $('.targetData').html('');

        $.ajax({
        type: "GET",
        url: "php/select.php",
        dataType: "JSON",
        success: function (response) {
            let data = '';
            for (let i = 0; i < response.length; i++) {
                data += 
                `
                <tr>
                <td>`+ (i+1) +`</td>
                <td>`+ response[i].namabarang +`</td>
                <td>Rp. `+ response[i].hargabarang +`</td>
                <td>`+ response[i].stok +`</td>
                <td>
                    <button class='btn-edit' id='`+ response[i].idBarang +`'>Edit</button>
                    <button class='btn-hapus' id='`+ response[i].idBarang +`'>Hapus</button>
                </td>
                </tr>
                `
            }

            $('.targetData').append(data);

            // mengambil 1 data untuk di edit
            $('.btn-edit').click(function () { 
                id = $(this).attr('id')
                getSingleData(id);
            });

            // hapus data

            $('.btn-hapus').click(function () {
                let konfirmasi = confirm("Yakin ingin menghapus ?");

                if (konfirmasi) {
                    id = $(this).attr('id');
                    hapusData(id);
                }
            });
        }
        });
    }

    function getSingleData(id) {
        $.ajax({
            type: "POST",
            url: "php/getSingleData.php",
            data: "idbarang="+id,
            dataType: "JSON",
            success: function (response) {
                // console.log(response);
                $('.btn-tambah').hide();
                $('.btn-simpan').show();
                $('.btn-batal').show();

                $('.id').val(response.idBarang);
                $('.namabarang').val(response.namabarang);
                $('.hargabarang').val(response.hargabarang);
                $('.stokbarang').val(response.stok);
            }
        });
    }

    function tambahData() {
        let namaBarang = $('.namabarang').val();
        let hargaBarang = $('.hargabarang').val();
        let stokBarang = $('.stokbarang').val();

        // console.log("&namabarang="+namaBarang+"&hargabarang="+hargaBarang+"&stok="+stokBarang);

        $.ajax({
            type: "POST",
            url: "php/insert.php",
            data: "namabarang="+namaBarang+"&hargabarang="+hargaBarang+"&stok="+stokBarang,
            dataType: "JSON",
            success: function (response) {
                if (response.status == 1) {
                    alert(response.pesan);
                    selectData();
                    resetForm();
                } else {
                    alert(response.pesan);
                    selectData();
                }
            }
        });
    }

    function updateData() {

        // alert(id);
        let idBarang = $('.id').val();
        let namaBarang = $('.namabarang').val();
        let hargaBarang = $('.hargabarang').val();
        let stokBarang = $('.stokbarang').val();

        // console.log("idbarang"+idBarang+"&namabarang="+namaBarang+"&hargabarang="+hargaBarang+"&stok="+stokBarang);

        $.ajax({
            type: "POST",
            url: "php/update.php",
            data: "idbarang="+idBarang+"&namabarang="+namaBarang+"&hargabarang="+hargaBarang+"&stok="+stokBarang,
            dataType: "JSON",
            success: function (response) {
                if (response.status == 1) {
                    alert(response.pesan);
                    selectData();
                    resetForm();
                } else {
                    alert(response.pesan);
                    selectData();
                }
            }
        });
    }
    
    function resetForm() {
        $('.namabarang').val('');
        $('.hargabarang').val('');
        $('.stokbarang').val('');
    }

    function hapusData(id) {
        $.ajax({
            type: "POST",
            url: "php/deleteData.php",
            data: "idbarang="+id,
            dataType: "JSON",
            success: function (response) {
                if (response.status == 1) {
                    alert(response.pesan);
                    selectData();
                    resetForm();
                } else {
                    alert(response.pesan);
                    selectData();
                }
            }
        });
    }

    $('.btn-tambah').click(function () {
        tambahData();
    });

    $('.btn-simpan').click(function () {
        updateData();
    });

    $('.btn-batal').click(function () { 
        $('.btn-tambah').show();
        $('.btn-simpan').hide();
        $('.btn-batal').hide();

        $('.id').val('');
        $('.namabarang').val('');
        $('.hargabarang').val('');
        $('.stokbarang').val('');
    });
});
