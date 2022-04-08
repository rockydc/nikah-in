
<div class="uk-table-responsive uk-card uk-card-default uk-card-body">
    <table class="uk-table-striped uk-table ajaxTable uk-table-responsive" data-uri="{{ route('api.getMenu') }}">
        <thead>
            <th>Nama Menu</th>
            <th>Slug</th>
            <th>Menu Parent</th>
            <th>Icon</th>
            <th>Aksi</th>
        </thead>
    </table>
</div>
@push('actionbar')
    <div class="uk-card uk-card-default uk-card-body">
        <button class="uk-button uk-button-small uk-button-danger">Kembali</button>
        <button onclick="window.location.href = '{{ route('menu_form', ['id' => '-']) }}'" class="uk-button uk-button-small uk-button-primary">Tambah Data</button>
        <button class="uk-button uk-button-small uk-button-default">Export Data</button>
    </div>
@endpush

