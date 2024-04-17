@extends('layouts.main')

@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3 class="text-lg">Tambah <b>Data Peserta Seleksi</b></h3>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Nama</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              id="basic-icon-default-fullname"
                              placeholder="John Doe"
                              aria-label="John Doe"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>
                        <div class="mb-2">
                          <label class="form-label d-block mb-0" for="basic-icon-default-company">Jenis Kelamin</label>
                          <div class="mt-0">
                            <div class="form-check form-check-inline mt-3">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                              />
                              <label class="form-check-label" for="inlineRadio1"><i class='bx bx-male-sign'></i> Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio2"
                                value="option2"
                              />
                              <label class="form-check-label" for="inlineRadio2"><i class='bx bx-female-sign' ></i> Perempuan</label>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <div class="col-md-4">
                            <label for="html5-number-input" class="col-md-3 col-form-label">Umur</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-time'></i></span>
                              <input class="form-control" type="number" value="0" id="html5-number-input" />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="html5-number-input" class="col-md-3 col-form-label">Berat Badan</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-tachometer'></i></span>
                              <input class="form-control" type="number" value="0" id="html5-number-input" />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="html5-number-input" class="col-md-3 col-form-label">Tinggi Badan</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-body'></i></span>
                              <input class="form-control" type="number" value="0" id="html5-number-input" />
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center col-sm-12"><i class='bx bx-save' ></i>&nbsp; Simpan</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

@endsection