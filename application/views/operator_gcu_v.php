<div class="content">
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">GCU SYAMRABU</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Data Permintaan</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          
          <!-- <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <!-- Dark table -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header bg-gradient-info">
            <div class="row">
              <div class="col-xl-4">
              </div>
              <div class="col-xl-4 ">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col lg-4">
                        <h5 class="card-title text-uppercase text-muted text-center mb-0">Total Permintaan</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 ">
              </div>
            </div>
            <div class="pt-4 text-center">    
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data Permintaan</h4>
              <div class="row">
                <div class="col-md-4">
                </div>
                  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Edit Data Antrian </span>
                              </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              <form role="form">
                                <div class="form-group mb-3">
                                  <input id="idUser" type="hidden">
                                  <label class="form-control-label" for="exampleFormControlSelect1">Status Layanan Pasien</label>
                                  <select class="form-control" id="editStatus">
                                    <option value="1">Belum Dilayani</option>
                                    <option value="2">Sedang dilayani</option>
                                    <option value="3">ambil resep</option>
                                    <option value="4">Selesai Sudah Ambil Obat</option>
                                    <option value="5">Selesai Belum Ambil Obat</option>
                                  </select>
                                </div>
                                <div class="badge badge-danger" id="pesanErrorEdit"></div>
                                <div class="text-center">
                                  <button type="button" onClick="edit()" id="tombolEdit" class="btn btn-success my-2">Edit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                </div>
              </div>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive py-4" id="tempatTabel">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalCetak" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-bd">
          <h5 class="modal-title">
            <span class="fw-mediumbold">
              Cetak Data</span>
            <!-- <span class="fw-light">
              User
            </span> -->
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="teksCetak"></p>
          <input type="hidden" id="id_cetak" name="id_cetak" />
        </div>
        <div class="modal-footer no-bd">
          <button type="button" id="cetak" onClick="cetak()" class="btn btn-primary">Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-bd">
          <h5 class="modal-title">
            <span class="fw-mediumbold">
              Hapus Data Master</span>
            <span class="fw-light">
              User
            </span>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="teksHapus"></p>
          <input type="hidden" id="id_hapus" name="id_hapus" />
        </div>
        <div class="modal-footer no-bd">
          <button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  // $(document).ready(function() {
  //   //  add_list();
  //   tampilkan();
  // }); 
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-flush" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Tanggal</th><th>Nama</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Berat Badan</th><th>Tinggi Badan</th><th>Kecamatan</th><th>Kabupaten</th><th>Alamat</th></tr></thead><tbody>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>operator_gcu/tampil',
        dataType :'json',
        success: function(data){
          // console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" class="badge badge-danger" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="fa fa-times"></i></div>'
            baris += ' <div style="cursor:pointer;" title="edit?" class="badge badge-info" id="edit' + data[i].id + '" onClick="tryEdit(' + data[i].id+ ')"><i class="fa fa-edit"></i></div>'
            baris += ' <div style="cursor:pointer;" title="Cetak?" class="badge badge-success" id="cetak' + data[i].id + '" onClick="tryCetak(' + data[i].id+ ')"><i class="fa fa-print"></i></div>'
            // baris += ' <div style="cursor:pointer;" title="Cetak?" class="badge badge-success" id="cetak' + data[i].id + '" onClick="send_form()"><i class="fa fa-print"></i></div>'
            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].tgl_daftar_gcu + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            baris += '<td>' + data[i].tempat_lahir + '</td>'
            baris += '<td>' + data[i].ttl_pasien_gcu + '</td>'
            baris += '<td>' + data[i].bb_pasien_gcu + '</td>'
            baris += '<td>' + data[i].tb_pasien_gcu + '</td>'
            baris += '<td>' + data[i].kecamatan_pasien_gcu + '</td>'
            baris += '<td>' + data[i].kabupaten_pasien_gcu + '</td>'
            baris += '<td>' + data[i].alamat_pasien_gcu + '</td>'
            baris += '</td></tr>'
          }
          baris += '</tbody></table>'
          $("#tempatTabel").html(baris);
          $('#tabelUser').DataTable({
            "pageLength": 10,
          });
        }
      });
  }



  function tryCetak(id) {
    $("#cetak" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: 'operator_gcu/dataById',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_cetak").val(id)
        $("#teksCetak").html("apakah anda yakin ingin Mencetak  dengan nama '" + data.nama + "' ?")

        $("#cetak" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalCetak").modal('show')
  }

  function cetak() {
    $("#cetak").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_cetak").val()
    $.ajax({
      // url: 'operator_gcu/open_form',
      url: 'operator_gcu/dataById',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        
        $("#id_cetak").val("")
        $("#teksCetak").html("")
        $("#modalCetak").modal('hide')
        $("#Cetak").html('Cetak')
        window.open(
              '<?= site_url('operator_gcu/open_form') ?>',
              '_blank'
            );
      }
    });
  }

  // function printLaporan() {
  //   $("#linkPrintLaporan").html('<i class="fas fa-spinner fa-pulse"></i> Memproses....')
  //   var tanggalMulai = formatTanggal($("#tanggalMulai").val())
  //   var tanggalSelesai = formatTanggal($("#tanggalSelesai").val())

  //   window.open("<?= base_url("laporan_internal/printLaporan?") ?>mulai=" + tanggalMulai + "&selesai=" + tanggalSelesai)

  //   $("#linkPrintLaporan").html('Print Laporan')
  // }

  function tryEdit(id) {
    $("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>operator/dataByid',
      method: 'post',
      data: "target=syarefa&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalEdit").modal('show')
        $("#editStatus").val(data.nama)
        console.log(data)
        $("#edit" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function edit() {
    $("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var status = $("#editStatus").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>operator/edit',
      method: 'post',
      data: {
        id: id,
        status: status
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#idUser").val("")
          $("#nama").val("")
          $('#pesanErrorTambah').html("")
        } else {
          $('#pesanErrorEdit').html(data)
        }
        $("#modalEdit").modal('hide');
        tampilkan();
        $("#tombolEdit").html('Edit')
      }
    });
  }

  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: 'operator/dataById',
      method: 'post',
      data: "target=syarefa&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus Antrian '" + data.no_antrian + "'  dengan nama '" + data.nama + "' ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: 'operator/hapus',
      method: 'post',
      data: "target=syarefa&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val("")
        $("#teksHapus").html("")
        tampilkan()
        $("#modalHapus").modal('hide')
        $("#hapus").html('Hapus')
      }
    });
  }
</script>