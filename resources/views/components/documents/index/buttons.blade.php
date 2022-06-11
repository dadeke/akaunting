@if ($checkPermissionCreate)
    @can($permissionCreate)
        @if (! $hideCreate)
            <x-link href="{{ route($createRoute) }}" kind="primary">
                {{ trans('invoices.new_invoice', ['type' => trans_choice($textPage, 1)]) }}
            </x-link>
        @endif
    @endcan
@else
    @if (! $hideCreate)
        <x-link href="{{ route($createRoute) }}" kind="primary">
            {{ trans('invoices.new_invoice', ['type' => trans_choice($textPage, 1)]) }}
        </x-link>
    @endif
@endif
