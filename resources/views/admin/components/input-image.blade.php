{{---------------------------------------------------------------------------
  Reusable Component for 'image' input for create and edit forms

  $field_title, used for label and place holder
  $input_value is the input 'value' from DB or 'old' when using validation

  // Create only requires title/label
  @component('admin.components.input-image', ['field_title' => 'TitleLabel'])@endcomponent

  // edit requires the input_value
  @component('admin.components.input-image', ['field_title' => 'TitleLabel','input_value' => $db->image])@endcomponent

---------------------------------------------------------------------------}}

<div class="row">

  <label for='image'>{{ $field_title }}</label>
  <input name='image' type="text" placeholder="{{ 'image URL (https://...)' ?? $field_title}}" value="{{ $input_value ?? old('image') }}" />

</div>
