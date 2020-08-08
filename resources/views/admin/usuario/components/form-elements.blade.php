<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombres'), 'has-success': fields.Nombres && fields.Nombres.valid }">
    <label for="Nombres" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.usuario.columns.Nombres') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombres" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombres'), 'form-control-success': fields.Nombres && fields.Nombres.valid}" id="Nombres" name="Nombres" placeholder="{{ trans('admin.usuario.columns.Nombres') }}">
        <div v-if="errors.has('Nombres')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombres') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Apellidos'), 'has-success': fields.Apellidos && fields.Apellidos.valid }">
    <label for="Apellidos" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.usuario.columns.Apellidos') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Apellidos" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Apellidos'), 'form-control-success': fields.Apellidos && fields.Apellidos.valid}" id="Apellidos" name="Apellidos" placeholder="{{ trans('admin.usuario.columns.Apellidos') }}">
        <div v-if="errors.has('Apellidos')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Apellidos') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Usuario'), 'has-success': fields.Usuario && fields.Usuario.valid }">
    <label for="Usuario" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.usuario.columns.Usuario') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Usuario" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Usuario'), 'form-control-success': fields.Usuario && fields.Usuario.valid}" id="Usuario" name="Usuario" placeholder="{{ trans('admin.usuario.columns.Usuario') }}">
        <div v-if="errors.has('Usuario')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Usuario') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Contraseña'), 'has-success': fields.Contraseña && fields.Contraseña.valid }">
    <label for="Contraseña" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.usuario.columns.Contraseña') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Contraseña" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Contraseña'), 'form-control-success': fields.Contraseña && fields.Contraseña.valid}" id="Contraseña" name="Contraseña" placeholder="{{ trans('admin.usuario.columns.Contraseña') }}">
        <div v-if="errors.has('Contraseña')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Contraseña') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Email'), 'has-success': fields.Email && fields.Email.valid }">
    <label for="Email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.usuario.columns.Email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Email" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Email'), 'form-control-success': fields.Email && fields.Email.valid}" id="Email" name="Email" placeholder="{{ trans('admin.usuario.columns.Email') }}">
        <div v-if="errors.has('Email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Email') }}</div>
    </div>
</div>


