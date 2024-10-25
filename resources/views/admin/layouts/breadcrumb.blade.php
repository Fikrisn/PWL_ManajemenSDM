<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $breadcrumb->title ?? 'Dashboard' }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($breadcrumb->list as $index => $item)
                        <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
