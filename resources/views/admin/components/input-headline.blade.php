{{---------------------------------------------------------------------------
  Reusable Component for 'headline' input for create and edit forms

  $field_title, used for label and place holder
  $input_value is the input 'value' from DB or 'old' when using validation

  // Create only requires title/label
  @component('admin.components.input-headline', ['field_title' => 'TitleLabel'])@endcomponent

  // edit requires the input_value
  @component('admin.components.input-headline', ['field_title' => 'TitleLabel','input_value' => $db->headline])@endcomponent

---------------------------------------------------------------------------}}

<div class="row">

  <label for='headline'>{{ $field_title }}</label>
  <textarea name="headline" rows="5" placeholder="{{ 'Enter Course Headline' ?? $field_title}}">{{ $input_value ?? old('headline') }}</textarea>
  {{-- <input name='headline' type="text" placeholder="{{ 'Enter Course Headline' ?? $field_title}}" value="{{ $input_value ?? old('headline') }}" /> --}}

</div>
