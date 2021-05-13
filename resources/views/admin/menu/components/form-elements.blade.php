<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.menu.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.menu.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lunk'), 'has-success': fields.lunk && fields.lunk.valid }">
    <label for="lunk" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.menu.columns.lunk') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lunk" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lunk'), 'form-control-success': fields.lunk && fields.lunk.valid}" id="lunk" name="lunk" placeholder="{{ trans('admin.menu.columns.lunk') }}">
        <div v-if="errors.has('lunk')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lunk') }}</div>
    </div>
</div>


