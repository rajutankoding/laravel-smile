<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <div class="row mb-4">
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                {{-- @foreach ($toko as $toko) --}}

                                <h6>Data Toko A</h6>
                                {{-- @endforeach --}}
                                {{-- <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">30 done</span> this month
                                </p> --}}
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                        aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Barang</th>
                                        {{-- Kanggo Avatar --}}
                                        {{-- <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Stok Barang</th> --}}
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kode Item</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Stok Tersisa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $item)
                                    <tr>

                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('assets') }}/img/small-logos/logo-xd.svg"
                                                    class="avatar avatar-sm me-3" alt="xd">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->item_name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- Avatar Apik --}}
                                        {{-- <td> --}}
                                            {{-- <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Ryan Tompson">
                                                    <img src="{{ asset('assets') }}/img/team-1.jpg" alt="team1">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Romina Hadid">
                                                    <img src="{{ asset('assets') }}/img/team-2.jpg" alt="team2">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Alexander Smith">
                                                    <img src="{{ asset('assets') }}/img/team-3.jpg" alt="team3">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Jessica Doe">
                                                <img src="{{ asset('assets') }}/img/team-4.jpg" alt="team4">
                                                </a>
                                            </div> --}}
                                        {{-- </td> --}}
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> {{$item->item_code}} </span>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">{{$item->stok_barang}}</span>
                                                    </div>
                                                </div>
                                                {{-- ProgresBar --}}
                                                {{-- <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-60"
                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                                </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <h6>Upload Data Stok Barang</h6>
                        {{-- <p class="text-sm">
                            <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                            <span class="font-weight-bold">24%</span> this month
                        </p> --}}
                    </div>
                    <div class="card-body p-3">

                        <form action="{{ route('importstokUNAB') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Masukan Data Stok Barang</label>
                                <input class="form-control" type="file" name="excel" required="required">
                            </div>
                            <button type="submit" class="btn btn-secondary">Upload</button>
                        </form>
                            <br>
                        </div>
                        <div class="card h-100">
                            <div class="card-header pb-0">
                                <h6>Data Penjualan</h6>
                                {{-- <p class="text-sm">
                                    <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                    <span class="font-weight-bold">24%</span> this month
                                </p> --}}
                            </div>
                            <div class="card-body p-3">

                                <form action="{{ route('importPenjualanUNAB') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Masukan Data Penjualan</label>
                                        <input class="form-control" type="file" name="excel" required="required">
                                    </div>
                                    <button type="submit" class="btn btn-secondary">Upload</button>
                                </form>
                                    <br>
                                </div>
                        </div>
                </div>
            </div>




        </div>

    </x-layout>
