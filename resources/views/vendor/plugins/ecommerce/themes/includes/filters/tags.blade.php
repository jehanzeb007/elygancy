@if ($tags->isNotEmpty())
    <div class="bb-product-filter">
        <strong class="bb-product-filter-title">{{ __('Tags') }}</strong>

        <div class="bb-product-filter-content">
            <ul class="bb-product-filter-items filter-checkbox">
                @foreach ($tags as $tag)
                    <li class="bb-product-filter-item">
                        @php
                            $requestTags = EcommerceHelper::parseFilterParams(request(), 'tags');
                        @endphp
                        <input id="attribute-tag-{{ $tag->id }}" type="checkbox" name="tags[]" value="{{ $tag->id }}" @checked(in_array($tag->id, $requestTags)) />
                        <label for="attribute-tag-{{ $tag->id }}">{{ $tag->name }}</label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
