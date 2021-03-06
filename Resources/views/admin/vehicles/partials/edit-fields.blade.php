<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}.name") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('ivehicles::vehicles.form.name')) !!}
        <?php $old = $vehicle->hasTranslation($lang) ? $vehicle->translate($lang)->name : '' ?>
        {!! Form::text("{$lang}[name]", old("{$lang}.name", $old), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('ivehicles::vehicles.form.name')]) !!}
        {!! $errors->first("{$lang}.name", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}.slug") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[slug]", trans('ivehicles::vehicles.form.slug')) !!}
        <?php $old = $vehicle->hasTranslation($lang) ? $vehicle->translate($lang)->slug : '' ?>
        {!! Form::text("{$lang}[slug]", old("{$lang}.slug",$old), ['class' => 'form-control slug', 'data-slug' => 'target', 'placeholder' => trans('ivehicles::vehicles.form.slug')]) !!}
        {!! $errors->first("{$lang}.slug", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("$lang.description") ? ' has-error' : '' }}'>
        <?php $old = $vehicle->hasTranslation($lang) ? $vehicle->translate($lang)->description : '' ?>
        @editor('description', trans('ivehicles::vehicles.form.description'), old("{$lang}.description",$old), $lang)
    </div>
    <div class="col-xs-12" style="padding-top: 35px;">
        <div class="panel box box-primary">
            <div class="box-header">
                <div class="box-tools pull-right">
                    <a href="#aditional{{$lang}}" class="btn btn-box-tool" data-target="#aditional{{$lang}}"
                       data-toggle="collapse"><i class="fa fa-minus"></i>
                    </a>
                </div>
                <label>{{ trans('ivehicles::common.form.metadata')}}</label>
            </div>
            <div class="panel-collapse collapse" id="aditional{{$lang}}">
                <div class="box-body">
                    <div class='form-group{{ $errors->has("{$lang}.metatitle") ? ' has-error' : '' }}'>
                        {!! Form::label("{$lang}[metatitle]", trans('ivehicles::vehicles.form.metatitle')) !!}
                        <?php $old = $vehicle->hasTranslation($lang) ? $vehicle->translate($lang)->metatitle : '' ?>
                        {!! Form::text("{$lang}[metatitle]", old("{$lang}.metatitle", $old), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('ivehicles::vehicles.form.metatitle')]) !!}
                        {!! $errors->first("{$lang}.metatitle", '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class='form-group{{ $errors->has("{$lang}.metakeywords") ? ' has-error' : '' }}'>
                        {!! Form::label("{$lang}[metakeywords]", trans('ivehicles::vehicles.form.metakeywords')) !!}
                        <?php $old = $vehicle->hasTranslation($lang) ? $vehicle->translate($lang)->metakeywords : '' ?>
                        {!! Form::text("{$lang}[metakeywords]", old("{$lang}.metakeywords", $old), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('ivehicles::vehicles.form.metakeywords')]) !!}
                        {!! $errors->first("{$lang}.metakeywords", '<span class="help-block">:message</span>') !!}
                    </div>

                    @editor('metadescription', trans('ivehicles::vehicles.form.metadescription'),
                    old("{$lang}.metadescription"), $lang)
                </div>
            </div>
        </div>
    </div>

    <?php if (config('asgard.page.config.partials.translatable.create') !== []): ?>
    <?php foreach (config('asgard.page.config.partials.translatable.create') as $partial): ?>
    @include($partial)
    <?php endforeach; ?>
    <?php endif; ?>

</div>
@section('scripts')
    @parent
    <style>


    </style>
@stop
