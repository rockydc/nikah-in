<div class="uk-card uk-card-default uk-card-body">
    <form action="{{ $action }}" method="post" class="uk-form">
        <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
       <div class="uk-margin">
           <label for="" class="uk-form-label">Nama Menu</label>
           <div class="uk-form-controls"><input type="text" value="{{ $data->menu_name ?? '' }}" name="menu_name" id="" class="uk-input"></div>
       </div>
       <div class="uk-margin">
            <label for="" class="uk-form-label">Slug</label>
            <div class="uk-form-controls"><input type="text" value="{{ $data->slug ?? '' }}" name="slug" id="" class="uk-input"></div>
        </div>
       <div class="uk-margin">
           <label for="" class="uk-form-label">Menu Parent</label>
           <div class="uk-form-controls">
               <select name="parent_id" id="" class="uk-select">
                   <option value=""> -- Pilih Menu Parent -- </option>
               </select>
           </div>
        </div>
        <div class="uk-margin">
            <label for="" class="uk-form-label">Icon</label>
            <div class="uk-form-controls"><input type="text" value="{{ $data->icon ?? '' }}" name="icon" id="" class="uk-input"></div>
        </div>
        <div class="uk-margin">
            <label for="" class="uk-form-label">Urutan</label>
            <div class="uk-form-controls"><input type="text" value="{{ $data->urutan ?? '' }}" name="urutan" id="" class="uk-input"></div>
        </div>
        <div class="uk-margin">
            <button type='button' class="uk-button uk-button-small uk-button-danger">
                Kembali
            </button>
            <button type='button' class="uk-button uk-button-small uk-button-primary">
                Simpan
            </button>
        </div>
    </form>
</div>
