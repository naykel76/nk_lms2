@extends('admin.layouts.2c-ar-fluid')

@section('title', $title)

{{-- main content --}}
@section('content')

{{-- Edit the module --}}
<form id="edit_module" class="flexCon" method="POST" action="{{ route('admin.modules.update', $module->id) }}">

  @csrf
  @method('PATCH')

  <div class="col-md-25"></div>

  <div class="col-md-75 bx">

    @include('admin.partials.error')
    @component('admin.components.input-title', ['field_title' => 'Module Title', 'input_value' => $module->title])@endcomponent
    <br>
    @component('admin.components.toolbar-edit', ['form_name' => 'edit_module'])@endcomponent

  </div>

</form>

@endsection

{{-- sidebar --}}
@section('aside')



@endsection
