// EDIT PASIEN
// jquery carikan saya kelas edit anak, jika saya klik jalankan fungsi berikut
$('.editpenddk').on('click', function () {  //editanak (button yg diklik saat itu (edit))
    // variabel data menampung yang saya klik sekarang ambil data idnya
    let data = $(this).data('penddk'); //datavit (nama data id nya terdapat di button (edit))
    $('.simedit').html('Ubah');  //simeditvit (button ubah)
    $.ajax({
        url: 'http://localhost:8080/kp-nuroktavia/penduduk/get_data', //alamat fungsi yg akan dieksekusi (json) terdapat di controller
        data: {
            nik: data //data (variabel data di atas)
        },
        method: 'post',
        dataType: "json",
        success: function (tampil) {
            console.log(tampil);
            $('#nik1').val(tampil.nik);
            $('#nama1').val(tampil.nama);
            $('#tmp_lahir1').val(tampil.tmp_lahir);
            $('#tgl_lahir1').val(tampil.tgl_lahir);
            if (tampil.jk == 'Perempuan') {
                $('#jkP').attr('checked', true);
            } else {
                $('#jkL').attr('checked', true);
            }
            $('#agama1').val(tampil.agama);
            $('#pekerjaan1').val(tampil.pekerjaan);
            $('#alamat1').val(tampil.alamat);
            $('#rt1').val(tampil.rt);
            $('#rw1').val(tampil.rw);
            $('#desa1').val(tampil.desa);
            $('#kecamatan1').val(tampil.kecamatan);
            $('#no_hp1').val(tampil.no_hp);
        }
    });
});

// EDIT PASIEN
// jquery carikan saya kelas edit anak, jika saya klik jalankan fungsi berikut
$('.editpegawi').on('click', function () {  //editanak (button yg diklik saat itu (edit))
    // variabel data menampung yang saya klik sekarang ambil data idnya
    let data = $(this).data('pegawi'); //datavit (nama data id nya terdapat di button (edit))
    $('.simedit').html('Ubah');  //simeditvit (button ubah)
    $.ajax({
        url: 'http://localhost:8080/kp-nuroktavia/pegawai/get_data', //alamat fungsi yg akan dieksekusi (json) terdapat di controller
        data: {
            nik_pegawai: data //data (variabel data di atas)
        },
        method: 'post',
        dataType: "json",
        success: function (tampil) {
            console.log(tampil);
            $('#nik1').val(tampil.nik_pegawai);
            $('#nama1').val(tampil.nm_pegawai);
            $('#no_hp1').val(tampil.no_hp);
            $('#alamat1').val(tampil.alamat);
            if (tampil.jk == 'aktif') {
                $('#stts_a').attr('checked', true);
            } else {
                $('#stts_k').attr('checked', true);
            }
            for (var i=0; i < result.length; i++){
                $('#jabatan1').append("<option value=''data-index='"+i+"'>"+
                result[i].jabatan1 + "</option>");
            }
            

        }
    });
});