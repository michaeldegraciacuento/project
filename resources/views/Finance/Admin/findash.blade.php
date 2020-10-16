@extends('layouts.fin')
@section('content')

@php
	$all_updatelink_info=DB::table('linkupdate')
                ->get();

@endphp
      
@endsection