@extends ('backend.layouts.app')

@section ('title', __('labels.backend.transaction.order.management') . ' | ' . __('labels.backend.transaction.order.list'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.transaction.order.management') }}
                        <small class="text-muted">{{ __('labels.backend.transaction.order.list') }}</small>
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
                                    <th>{{ __('labels.backend.transaction.order.table.code') }}</th>
                                    <th>{{ __('labels.backend.transaction.order.table.customer_name') }}</th>
                                    <th>{{ __('labels.backend.transaction.order.table.order_name') }}</th>
                                    <th>{{ __('labels.backend.transaction.order.table.price') }}</th>
                                    <th>{{ __('labels.backend.transaction.order.table.order_date') }}</th>
                                    <th>{{ __('labels.general.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                <tr>
                                    <td>{{ $order->KdMerk }}</td>
                                    <td>{{ $order->NmMerk }}</td>
                                    <td>{{ $order->TransDate }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="100%" class="text-center">Data not found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{-- {{ $orders->appends(['limit' => $request->limit])->links() }} --}}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

    </div><!--card-->
@endsection
