@if(is_plugin_active('ecommerce'))
    <div class="header-search-bar">
        <button class="btn p-0 border-0 bg-transparent"
                data-bs-toggle="modal"
                data-bs-target="#searchModal"
                title="search">
            <i class="fal fa-search"></i>
        </button>
    </div>
    <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4">

                <div class="modal-header border-0">
                    <h5 class="modal-title">{{ __('Search Products') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <form action="{{ route('public.products') }}"
                          class="position-relative form--quick-search"
                          data-url="{{ route('public.ajax.search-products') }}"
                          method="GET">

                        <div class="search-info p-relative">

                            @if($hasCategorySelect = (theme_option('display_product_categories_select_on_header', 'yes') === 'yes'))
                                <div class="product-category-label mb-2">
                                    <label class="form-label text-truncate d-inline-block">
                                        {{ __('All Categories') }}
                                    </label>
                                    <i class="fal fa-chevron-down ms-2"></i>
                                </div>

                                <select class="form-select mb-3 product-category-select"
                                        name="categories[]">
                                    <option value="0">{{ __('All Categories') }}</option>
                                    {!! ProductCategoryHelper::renderProductCategoriesSelect() !!}
                                </select>
                            @endif

                            <div class="input-group">

                                <input type="text"
                                       name="q"
                                       @class([
                                           'form-control input-search-product',
                                           'has-category-select' => $hasCategorySelect
                                       ])
                                       placeholder="{{ __('Search products...') }}"
                                       value="{{ BaseHelper::stringify(request()->query('q')) }}"
                                       autocomplete="off">

                                <button class="btn btn-dark" title="search">
                                    <i class="fal fa-search"></i>
                                </button>

                            </div>

                        </div>
                        <div class="panel--search-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
