@extends(Theme::getThemeNamespace('layouts.base'))

@section('content')
    {!! Theme::partial('headers.index') !!}

    <main>
        {!! Theme::partial('breadcrumb') !!}
        <div class="pb-80">
            <div class="container">
                {!! Theme::content() !!}
            </div>
        </div>
    </main>

    {!! Theme::partial('footer') !!}
@endsection
