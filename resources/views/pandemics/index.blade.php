@extends('layouts.master')
  @section('page_title')
  Diseases
  @stop
  @section('content_header')
  List
  @stop
  @section('content')
  <a href="{{ route('pandemics.create')}}">Create new Entry</a>
    <hr>
    @foreach ($pandemics as $pandemic)
      {{$pandemic->id}}
      <a href="{{ route('pandemics.show',$pandemic->id) }}">{{$pandemic->full_name}}</a> 
      {{$pandemic->description}}
      <hr>
    @endforeach
  @stop
