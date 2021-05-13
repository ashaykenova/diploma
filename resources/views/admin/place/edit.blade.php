@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.place.actions.edit', ['name' => $place->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <place-form
                :action="'{{ $place->resource_url }}'"
                :data="{{ $place->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.place.actions.edit', ['name' => $place->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.place.components.form-elements')
                        @include('brackets/admin-ui::admin.includes.media-uploader', [
                            'mediaCollection' => app(App\Models\Place::class)->getMediaCollection('gallery'),
                            'media' => $place->getThumbs200ForCollection('gallery'),
                            'label' => 'Изображение'
                        ])
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </place-form>

        </div>
    
</div>

@endsection