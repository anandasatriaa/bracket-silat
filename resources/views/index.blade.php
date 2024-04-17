@extends('layouts.main')

@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="">
                  <div class="d-block d-lg-flex align-items-center justify-content-between mb-3">
                    <h3 class="text-lg mt-2">Bagan <b>Seleksi Peserta Silat</b></h3>
                    <div class="d-block d-lg-flex align-items-lg-center">
                      <div class="input-group mt-2 me-2">
                        <input class="form-control" type="file" id="formFile" />
                        <button class="btn btn-primary">Upload</button>
                      </div>
                      <div class="col-sm-auto mt-2">
                        <a href="/tambah-data" class="btn btn-primary d-flex align-items-center justify-content-center"><box-icon name='user-plus' color='#ffffff' ></box-icon>&nbsp; Tambah Data Manual</a>
                      </div>
                    </div>
                  </div>
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#usia-dini-1"
                          aria-controls="usia-dini-1"
                          aria-selected="true"
                        >
                        <i class="tf-icons bx bx-user"></i> Usia Dini 1
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#usia-dini-2A"
                          aria-controls="usia-dini-2A"
                          aria-selected="false"
                        >
                          <i class="tf-icons bx bx-user"></i> Usia Dini 2 A/SD
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#usia-dini-2B"
                          aria-controls="usia-dini-2B"
                          aria-selected="false"
                        >
                        <i class="tf-icons bx bx-user"></i> Usia Dini 2 B/SD
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#pra-remaja"
                          aria-controls="pra-remaja"
                          aria-selected="false"
                        >
                        <i class="tf-icons bx bx-user"></i> Pra Remaja
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#remaja"
                          aria-controls="remaja"
                          aria-selected="false"
                        >
                        <i class="tf-icons bx bx-user"></i> Remaja
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#dewasa"
                          aria-controls="dewasa"
                          aria-selected="false"
                        >
                        <i class="tf-icons bx bx-user"></i> Dewasa
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="usia-dini-1" role="tabpanel">
                        <div class="row">
                          <div class="col">
                            <h2 class="text-center">Bagan Seleksi Silat <b>Usia Dini 1</b></h2>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col-12">
                            <div id="myBracket"></div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="usia-dini-2A" role="tabpanel">
                        <div class="row">
                          <div class="col">
                            <h2 class="text-center">Bagan Seleksi Silat <b>Usia Dini 2A</b></h2>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col-12">
                            <div id="myBracket2"></div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="usia-dini-2B" role="tabpanel">
                        <div class="row">
                          <div class="col">
                            <h2 class="text-center">Bagan Seleksi Silat <b>Usia Dini 2B</b></h2>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col-12">
                            <div id="myBracket3"></div>
                          </div>
                        </div>
                      </div>
                        <div class="tab-pane fade" id="pra-remaja" role="tabpanel">
                          <div class="row">
                            <div class="col">
                              <h2 class="text-center">Bagan Seleksi Silat <b>Pra Remaja</b></h2>
                            </div>
                          </div>
                          <div class="row justify-content-center">
                            <div class="col-12">
                              <div id="myBracket4"></div>
                            </div>
                          </div>
                        </div>
                          <div class="tab-pane fade" id="remaja" role="tabpanel">
                            <div class="row">
                              <div class="col">
                                <h2 class="text-center">Bagan Seleksi Silat <b>Remaja</b></h2>
                              </div>
                            </div>
                            <div class="row justify-content-center">
                              <div class="col-12">
                                <div id="myBracket5"></div>
                              </div>
                            </div>
                          </div>
                            <div class="tab-pane fade" id="dewasa" role="tabpanel">
                              <div class="row">
                                <div class="col">
                                  <h2 class="text-center">Bagan Seleksi Silat <b>Dewasa</b></h2>
                                </div>
                              </div>
                              <div class="row justify-content-center">
                                <div class="col-12">
                                  <div id="myBracket6"></div>
                                </div>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

@endsection