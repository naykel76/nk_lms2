{{---------------------------------------------------------------------------
  Reusable Component for 'title' input for create and edit forms

  $field_title, used for label and place holder
  $input_value is the input 'value' from DB or 'old' when using validation

  // Create only requires title/label
  @component('admin.components.input-slug', ['field_title' => 'TitleLabel'])@endcomponent

  // edit requires the input_value
  @component('admin.components.input-slug', ['field_title' => 'TitleLabel','input_value' => $db->slug])@endcomponent

---------------------------------------------------------------------------}}

<div class="row">

  <label for='slug'>{{ $field_title }}</label>
  <input name='slug' type="text" placeholder="{{ 'Auto-generated from title' ?? $field_title}}" value="{{ $input_value ?? old('slug') }}" />

</div>
