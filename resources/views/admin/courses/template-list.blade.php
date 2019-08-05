@extends('admin.layouts.admin')
@section('title', $title)

@section('content')

@section('toolbar')
{{-- toolbar actions --}}
@endsection

{{-- display items --}}
<table class="tbl striped">

  <thead>
    <tr>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>

  @foreach ($items as $item)

  <tr>
    <td>{{ $item->? }}</td>
    <td>{{ $item->? }}</td>
    <td>{{ $item->? }}</td>

    <td class="txt-ctr">

      <a href="{{ route('') }}" class="btn-success">Edit</a>

      <form method="" action="{{ route('') }}">

        @csrf
        {{-- @method('DELETE') --}}

      </form>

    </td>

  </tr>

  @endforeach

</table>

@endsection
