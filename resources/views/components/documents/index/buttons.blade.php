@if ($checkPermissionCreate)
    @can($permissionCreate)
        @if (! $hideCreate)
            <x-link href="{{ route($createRoute) }}" kind="primary">
                {{ trans('invoices.new_invoice') }}
            </x-link>
        @endif
    @endcan
@else
    @if (! $hideCreate)
        <x-link href="{{ route($createRoute) }}" kind="primary">
            {{ trans('invoices.new_invoice') }}
        </x-link>
    @endif
@endif
