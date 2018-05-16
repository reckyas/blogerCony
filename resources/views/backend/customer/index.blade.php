@extends ('backend.layouts.app')

@section ('title', __('labels.backend.customer.management') . ' | ' . __('labels.backend.customer.list'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.customer.management') }}
                        <small class="text-muted">{{ __('labels.backend.customer.list') }}</small>
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
                                    <label class="sr-only">Search</label>
                                    <input type="text" name="search" class="form-control" placeholder="Search Item Code" value="{{ $request->search }}">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Search</button>
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
                                    <th>{{ __('labels.backend.customer.table.name') }}</th>
                                    <th>{{ __('labels.backend.customer.table.email') }}</th>
                                    <th>{{ __('labels.backend.customer.table.last_updated') }}</th>
                                    <th>{{ __('labels.general.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($customers as $customer)
                                <tr>
                                    <td>{{ $customer->first_name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->updated_at }}</td>
                                    <td>{!! $customer->customer_action_buttons !!}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="100%" class="text-center">Data not found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $customers->appends(['limit' => $request->limit])->links() }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

    </div><!--card-->
@endsection
