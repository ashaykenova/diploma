@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.guided-tour.actions.edit', ['name' => $guidedTour->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <guided-tour-form
                :action="'{{ $guidedTour->resource_url }}'"
                :data="{{ $guidedTour->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.guided-tour.actions.edit', ['name' => $guidedTour->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.guided-tour.components.form-elements')
                        @include('brackets/admin-ui::admin.includes.media-uploader', [
                            'mediaCollection' => app(App\Models\GuidedTour::class)->getMediaCollection('gallery'),
                            'media' => $guidedTour->getThumbs200ForCollection('gallery'),
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

        </guided-tour-form>

        </div>
    
</div>

@endsection