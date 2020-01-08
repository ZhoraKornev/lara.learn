@php
    /** @var \App\Models\BlogCategory $item */
@endphp

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn-primary btn">Сохранить</button>
            </div>
        </div>
    </div>
</div>
@if ($item->exists)
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled" role="tablist">
                        <li>
                            ID: {{$item->id}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Создано</label>
                        <input value="{{$item->created_at}}"
                               class="form-control"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Изменено</label>
                        <input value="{{$item->updated_at}}"
                               class="form-control"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="title">Удалено</label>
                        <input value="{{$item->deleted_at}}"
                               class="form-control"
                               disabled>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endif
