@extends('layouts.master')

@section('style')
    <style>
        body {background: green; color: white;}
    </style>
@endsection

{{--
@section('content')
    <p>저는 자식 뷰의 'content' 섹션입니다.</p>
@endsection
--}}

@section('script')
    <script>
        alert("저는 자식 뷰의 'script' 섹션입니다.");
    </script>
@endsection

@section('content')
    @include('partials.footer')
@endsection

{{-- 
@if($itemCount = count($items))
    <P>{{ $itemCount }} 종류의 과일이 있습니다.</P>
@else
    <P>엥~ 아무것도 없는데요!</P>
@endif

<ul>
    @foreach($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

<?php $items = []; ?>
<ul>
    @forelse($items as $item)
        <li>{{ $item }}</li>
    @empty
        <li>엥~ 아무것도 없는데요!</li>
    @endforelse
</ul> 
--}}

