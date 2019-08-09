{{---------------------------------------------------------------------------
  Reusable Component for 'body' input for create and edit forms

  $field_title, used for label and place holder
  $input_value is the input 'value' from DB or 'old' when using validation

  // Create only requires title/label
  @component('admin.components.input-cke', ['field_title' => 'TitleLabel'])@endcomponent

  // edit requires the input_value
  @component('admin.components.input-cke', ['field_title' => 'TitleLabel','input_value' => $db->body])@endcomponent

---------------------------------------------------------------------------}}



<div class="row">

  <textarea id="article-ckeditor" name="body" class="col {{ $errors->has('body') ? 'danger' : '' }}">{{ $input_value ?? old('body') }}</textarea>

</div>
