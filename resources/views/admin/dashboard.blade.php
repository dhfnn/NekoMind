@extends('layouts.App2')

@section('content')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Pengguna</p>
                      <h5 class="font-weight-bolder mb-0">
                        <p class="text-lg mb-0 font-weight-bold opacity-7">{{ $jumlahPengguna }} pengguna</p>
                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="fa-solid fa-users" style="color: #ffffff;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Ujian
                        <p class="text-lg mb-0 font-weight-bold opacity-7">{{ $jumlahUjian }} ujian</p>

                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Materi</p>
                      <h5 class="font-weight-bolder mb-0">
                        <p class="text-lg mb-0 font-weight-bold opacity-7">{{ $jumlahMateri }} materi</p>

                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="fa-solid fa-book-open" style="color: #ffffff; "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row my-4">
          <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6>Peringkat pengguna</h6>

                  </div>
                  <div class="col-lg-6 col-5 my-auto text-end">
                    {{-- <div class="dropdown float-lg-end pe-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div> --}}
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pb-2 pt-0">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0 dataTablefiture">
                    <thead>
                      <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Level</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Poin</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataLevel as $index => $data)
                      <tr>
                        <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold">
                                {{ $index+1 }}
                            </span>
                        </td>

                        <td>
                          <div class="d-flex px-2 pb-1">
                            <div>
                              {{-- <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd" /> --}}
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $data->username }}</h6>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle d-flex align-items-center">
                            <span class="text-xs font-weight-bold py-2 ">  {{ number_format($data->exp/1200, 0, '', '') }} </span>

                            {{-- <div class="progress-wrapper w-75 mx-auto">
                              <div class="progress-info">
                                <div class="progress-percentage">
                                  <span class="text-xs font-weight-bold"></span>
                                </div>
                              </div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info w-{{ (($data->exp % 1200 ) /1200) *100}}" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div> --}}
                          </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold">
                                {{-- @empty($data->poin->poin) --}}
                                {{-- @else --}}
                                    {{ $data->poin }}
                                {{-- @endempty --}}
                            </span>
                        </td>

                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="container mt-4 " style="border-radius: 15px;">

                <div class="row d-flex justify-content-center">
                  <div class="col">

                    <div class="card" id="chat2">
                      <div class=" d-flex justify-content-between align-items-center p-3">
                        <h5 class="mb-0">Diskusi Bersama</h5>
                      </div>
                      <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px; overflow-y: auto;">

                          @foreach ($datachat as $item)
                          @if ($item->user->id === $userId)
                          <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                              <div>
                                <p class="small me-3 mb-0 rounded-3 text-muted d-flex justify-content-end">{{ $item->user->username === $userdata->username ? 'Saya' : '' }}
                              </p>
                              <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">{{ $item->pesan }}</p>
                            </div>
                            <img src="{{ asset('assets/pp/' .$item->user->foto .'.jpg') }} "
                              alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                          </div>
                          @else

                          <div class="d-flex flex-row mb-3 justify-content-start">
                              <img src="{{ asset('assets/pp/' .$item->user->foto .'.jpg') }} " class="rounded-circle"
                              alt="avatar 1" style="width: 45px; height: 100%;">
                              <div>
                                  <p class="small ms-3 mb-0 rounded-3 text-muted">{{ $item->user->username }}</p>
                            <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">{{ $item->pesan }}</p>

                              </div>
                          </div>
                          @endif
                      @endforeach
                      </div>
                      <div class="card-footer bg-white text-muted d-flex justify-content-start align-items-start px-3">
                        <img class="rounded-circle" src="{{ asset('assets/pp/' .$userdata->foto. '.jpg') }}"
                          alt="avatar 3" style="width: 40px; height: 100%;">
                          <form class="d-flex w-100" action="{{ url('chatpengguna') }}" method="POST">
                          @csrf
                        <input type="text" class="form-control form-control-lg" name="pesan" id="exampleFormControlInput1"
                          placeholder="Masukan pesan">

                        <button class="ms-3" type="submit" style="border: none; background:white;"><i class="fas fa-paper-plane" style="color: blue"></i></button>
                      </form>

                      </div>
                    </div>

                  </div>
                </div>

              </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="col">
                <div class="card h-100">
                    <div class="card-header pb-0">
                      <h6>Aktivitas Terakhir</h6>

                    </div>
                    <div class="card-body p-3">
                      <div class="timeline timeline-one-side">
                          @foreach($dataAdmin as $item)

                          <div class="timeline-block mb-3">
                            <span class="timeline-step">
                              <i class="ni ni-bell-55 text-success text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                              <h6 class="text-dark text-sm font-weight-bold mb-0">{{ $item->isi }}</h6>
                              <div class="col d-flex justify-content-between">
                                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $item->tanggal}}</p>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $item->user->username}}</p>
                              </div>
                            </div>
                          </div>
                          @endforeach

                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>

      </div>


@endsection
