@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.tour.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">
        
        <tour-form
            :action="'{{ url('admin/tours') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                
                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.tour.actions.create') }}
                </div>

                <div class="card-body">
                    @include('admin.tour.components.form-elements')
                    @include('brackets/admin-ui::admin.includes.media-uploader', [
                        'mediaCollection' => app(App\Models\Tour::class)->getMediaCollection('gallery'),
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

        </tour-form>

        </div>

        </div>

    
@endsection