@if ($categories->isNotEmpty())
    <div class="bb-product-filter">
        <strong class="bb-product-filter-title">{{ __('Categories') }}</strong>

        <div class="bb-product-filter-content">
            @include(EcommerceHelper::viewPath('includes.filters.categories-list'))
        </div>
    </div>
@endif
