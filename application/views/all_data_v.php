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
                <li class="breadcrumb-item"><a href="#">Rekap Semua Data Permintaan</a></li>
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
          <div class="card-header bg-gradient-success">
            <div class="row">
              <div class="col-xl-4">
              </div>
              <div class="col-xl-4 ">
              </div>
            </div>
            <div class="pt-4 text-center">    
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data Permintaan</h4>
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Tambah Diagnosa </span>
                              </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              
                            <form role="form">
                                <div class="form-group mb-3">
                                  <input id="idUser" type="hidden">
                                  <select class="form-control" id="nama_dokter_gcu">
                                    <option value="">Dokter</option>
                                    <option value="dr.YULIA MAYASIN">dr.YULIA MAYASIN</option>
                                    <option value="dr.SRI WAHYU UTAMI">dr.SRI WAHYU UTAMI</option>
                                  </select>
                                </div>
                                <div class="form-group mb-3">
                                  <select class="form-control" id="nip_dokter_gcu">
                                    <option value="">NIP Dokter</option>
                                    <option value="197207082010012003">dr.YULIA | 197207082010012003</option>
                                    <option value="196102161988022001">dr.SRI | 196102161988022001</option>
                                  </select>
                                </div>
                                  <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                      </div>
                                      <input class="form-control" name="bb_pasien_gcu" id="bb_pasien_gcu" placeholder="Berat Badan :" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                      </div>
                                      <input class="form-control" name="tb_pasien_gcu" id="tb_pasien_gcu" placeholder="Tinggi Badan :" type="text">
                                    </div>
                                  </div>
                                <div class="form-group mb-3">
                                  <select class="form-control" id="pendengaran_pasien_gcu">
                                    <option value="">Pendengaran</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup Baik">Cukup Baik</option>
                                  </select>
                                </div>
                                  <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                      </div>
                                      <input class="form-control" name="warna_pasien_gcu" id="warna_pasien_gcu" placeholder="Warna" type="text">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group mb-3">
                                      <label class="form-control-label" for="keterangan_pasien gcu">Keterangan</label>
                                      <textarea class="form-control" id="keterangan_pasien_gcu" rows="3"></textarea>
                                    </div>
                                  </div>
                                <div class="badge badge-danger" id="pesanErrorEdit"></div>
                                <div class="text-center">
                                  <button type="button" onClick="edit()" id="tombolEdit" class="btn btn-success my-2">Tambah</button>
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
    var baris = '<table class="table table-flush" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Tanggal</th><th>Nama</th><th>Keperluan</th><th>Pendengaran</th><th>Warna</th></tr></thead><tbody>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>all_data/tampil',
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
            baris += '<td>' + data[i].keperluan_pasien_gcu + '</td>'
            baris += '<td>' + data[i].pendengaran_pasien_gcu + '</td>'
            baris += '<td>' + data[i].warna_pasien_gcu + '</td>'
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
    window.open(
       "<?= site_url(); ?>operator_gcu/dataById/" + id);
  }



  function tryEdit(id) {
    $("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>operator_gcu/edit_id',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalEdit").modal('show')
        $("#pendengaran_pasien_gcu").val(data.pendengaran_pasien_gcu)
        $("#warna_pasien_gcu").val(data.warna_pasien_gcu)
        $("#bb_pasien_gcu").val(data.bb_pasien_gcu)
        $("#tb_pasien_gcu").val(data.tb_pasien_gcu)
        $("#keterangan_pasien_gcu").val(data.keterangan_pasien_gcu)
        $("#nip_dokter_gcu").val(data.nip_dokter_gcu)
        $("#nama_dokter_gcu").val(data.nama_dokter_gcu)
        console.log(data)
        $("#edit" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function edit() {
    $("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var pendengaran_pasien_gcu = $("#pendengaran_pasien_gcu").val()
    var warna_pasien_gcu = $("#warna_pasien_gcu").val()
    var tb_pasien_gcu = $("#tb_pasien_gcu").val()
    var bb_pasien_gcu = $("#bb_pasien_gcu").val()
    var keterangan_pasien_gcu = $("#keterangan_pasien_gcu").val()
    var nip_dokter_gcu = $("#nip_dokter_gcu").val()
    var nama_dokter_gcu = $("#nama_dokter_gcu").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>operator_gcu/edit',
      method: 'post',
      data: {
        id: id,
        pendengaran_pasien_gcu: pendengaran_pasien_gcu,
        tb_pasien_gcu: tb_pasien_gcu,
        bb_pasien_gcu: bb_pasien_gcu,
        keterangan_pasien_gcu: keterangan_pasien_gcu,
        warna_pasien_gcu: warna_pasien_gcu,
        nip_dokter_gcu: nip_dokter_gcu,
        nama_dokter_gcu: nama_dokter_gcu
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#idUser").val("")
          $("#pendengaran_pasien_gcu").val("")
          $("#tb_pasien_gcu").val("")
          $("#bb_pasien_gcu").val("")
          $("#warna_pasien_gcu").val("")
          $("#keterangan_pasien_gcu").val("")
          $("#nip_dokter_gcu").val("")
          $("#nama_dokter_gcu").val("")
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
      url: 'operator_gcu/edit_id',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus data dengan nama '" + data.nama + "' ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: 'operator_gcu/hapus',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
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