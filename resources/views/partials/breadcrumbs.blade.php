@unless ($breadcrumbs->isEmpty())
    <div class="nav-scroller bg-body">
        <nav class="nav nav-underline bg-light" aria-label="Secondary navigation">
            <ol class="breadcrumb m-0">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if (!is_null($breadcrumb->url) && !$loop->last)
                        <li class="breadcrumb-item ">
                            <a class="nav-link" href="{{ $breadcrumb->url }}" style="color: #81acec ">
                                {{ $breadcrumb->title }}
                            </a>
                        </li>
                    @else
                        <li class="breadcrumb-item nav-link disabled" style="padding-top:0">
                            <a class="fw-bold nav-link" style=" color: #05457d ">
                                {{ $breadcrumb->title }}
                            </a >
                        </li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
@endunless