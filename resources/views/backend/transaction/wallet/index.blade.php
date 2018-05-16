@extends ('backend.layouts.app')

@section ('title', __('labels.backend.transaction.wallet.management') . ' | ' . __('labels.backend.transaction.wallet.list'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.transaction.wallet.management') }}
                        <small class="text-muted">{{ __('labels.backend.transaction.wallet.list') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr />

            <div class="row mt-4">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <form class="form-inline">
                                <div class="form-group mb-2">
                                    <label class="sr-only">{{ __('strings.backend.general.search') }}</label>
                                    <input type="text" name="search" class="form-control" placeholder="{{ __('strings.backend.general.search_placeholder') }}" value="{{ $request->search }}">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">{{ __('strings.backend.general.search') }}</button>
                            </form>
                        </div>
                        <div class="col">
                            <div class="float-right">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label>Per Page</label>
                                        <select class="form-control mx-sm-3 limit-perpage">
                                            @foreach(config('options.perpage') as $perpage)
                                            <option {{ ($perpage == $limit) ? 'selected' : '' }}>{{ $perpage }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('labels.backend.transaction.wallet.table.datetime') }}</th>
                                    <th>{{ __('labels.backend.transaction.wallet.table.detail') }}</th>
                                    <th>{{ __('labels.backend.transaction.wallet.table.type') }}</th>
                                    <th>{{ __('labels.backend.transaction.wallet.table.nominal') }}</th>
                                    <th>{{ __('labels.backend.transaction.wallet.table.last_balance') }}</th>
                                    {{-- <th>{{ __('labels.general.actions') }}</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018-05-05 18:00:02</td>
                                    <td>Setoran Pokok Budi Mei 2018</td>
                                    <td>Kredit</td>
                                    <td>100.000</td>
                                    <td>100.000</td>
                                </tr>
                                <tr>
                                    <td>2018-05-06 18:00:02</td>
                                    <td>Pemesanan kode 32435 Budi</td>
                                    <td>Debet</td>
                                    <td>75.000</td>
                                    <td>25.000</td>
                                </tr>
                                <tr>
                                    <td>2018-06-05 18:00:02</td>
                                    <td>Setoran Pokok Budi Juni 2018</td>
                                    <td>Kredit</td>
                                    <td>100.000</td>
                                    <td>125.000</td>
                                </tr>
                                <tr>
                                    <td>2018-07-05 18:00:02</td>
                                    <td>Setoran Pokok Budi Juli 2018</td>
                                    <td>Kredit</td>
                                    <td>100.000</td>
                                    <td>225.000</td>
                                </tr>
                                <tr>
                                    <td>2018-08-05 18:00:02</td>
                                    <td>Setoran Pokok Budi Agustus 2018</td>
                                    <td>Kredit</td>
                                    <td>100.000</td>
                                    <td>325.000</td>
                                </tr>
                                {{-- @forelse($wallets as $wallet)
                                <tr>
                                    <td>{{ $wallet->KdMerk }}</td>
                                    <td>{{ $wallet->NmMerk }}</td>
                                    <td>{{ $wallet->TransDate }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="100%" class="text-center">Data not found</td>
                                </tr>
                                @endforelse --}}
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $wallets->appends(['limit' => $request->limit])->links() }} --}}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

    </div><!--card-->
@endsection
