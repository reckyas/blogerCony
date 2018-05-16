@extends ('backend.layouts.app')

@section ('title', __('labels.backend.product.item.management') . ' | ' . __('labels.backend.product.item.list'))

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&d=mm&r=g" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">Budi Hartono</h4>
                <p class="card-text">Lorem ipsum</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">udin@mail.com</li>
                    <li class="list-group-item">08432789789</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Edit</a>
                    <a href="#" class="card-link">Tabungan</a>
                </div>
                </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Tabungan</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">
                                {{ __('labels.backend.product.item.management') }}
                                <small class="text-muted">{{ __('labels.backend.product.item.list') }}</small>
                            </h4>
                        </div><!--col-->
                    </div><!--row-->

                    <hr />

                    <div class="row mt-4">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td><td>Budi Hartono</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td><td>user@user.com</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor HP</td><td>084238794232</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td><td>Jl Baru no 123 Ponorogo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-body-->
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <small class="float-right text-muted">
                                <strong>{{ __('labels.backend.access.users.tabs.content.overview.created_at') }}:</strong> 15-05-2018,
                                <strong>{{ __('labels.backend.access.users.tabs.content.overview.last_updated') }}:</strong> 15-05-2018
                            </small>
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-footer-->

            </div><!--card-->
        </div>
@endsection
