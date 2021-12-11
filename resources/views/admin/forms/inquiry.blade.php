<div class="card-header">
    <h5>Müraciət #{{ $item->id }}</h5>
</div>
<div class="card-body admin-list">
    <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Müraciət tarixi</label>
        <div class="col-sm-9 py-2">
            <strong>{{ $item->timestamp }}</strong>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Göndərən adı</label>
        <div class="col-sm-9 py-2">
            <strong>{{ $item->name }}</strong>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Göndərənin elektron poçtu</label>
        <div class="col-sm-9 py-2">
            <strong>{{ $item->email }}</strong>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Şirkət adı</label>
        <div class="col-sm-9 py-2">
            <strong>{{ $item->company }}</strong>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Telefon</label>
        <div class="col-sm-9 py-2">
            <strong>{{ $item->phone }}</strong>
        </div>
    </div>
    

</div>
                        