@extends('layouts.app')

@section('title')
Completed Projects | Sunfit General Contracting
@endsection

@section('description')
Completed civil, MEP and interior projects by Sunfit General Contracting.
@endsection

@section('content')
@include('pages.partials.project-board', ['board' => [
  'status' => 'completed',
  'crumb' => 'Completed Projects',
  'hero' => 'p1.webp',
  'h1' => '<span class="ln"><span>Work that speaks</span></span><span class="ln"><span>for <span class="hl">itself.</span></span></span>',
  'lead' => 'Commercial buildings, retail and interior fit-outs we have already handed over.',
  'count' => '3',
  'eyebrow' => 'Handed over',
  'h2' => 'Completed <span class="hl">projects.</span>',
  'cards' => [
    ['cat' => 'commercial', 'img' => 'p1.webp', 'tag' => 'Commercial', 'title' => 'Al Noor Commercial Tower', 'text' => 'Structure, MEP and façade coordination for a mid-rise commercial tower.', 'meta' => ['Civil', 'Structural', 'MEP']],
    ['cat' => 'commercial', 'img' => 'p5.webp', 'tag' => 'Commercial', 'title' => 'Crescent Retail Centre', 'text' => 'Complete MEP package for a neighbourhood retail centre.', 'meta' => ['HVAC', 'Electrical', 'Plumbing']],
    ['cat' => 'interior', 'img' => 'p6.webp', 'tag' => 'Interior', 'title' => 'Skyline Hotel Lobby', 'text' => 'Full interior design, joinery and finishes for a hotel lobby and reception.', 'meta' => ['Interior', 'Joinery']],
  ],
]])
@endsection
