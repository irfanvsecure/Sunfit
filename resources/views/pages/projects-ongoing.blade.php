@extends('layouts.app')

@section('title')
Ongoing Projects | Sunfit General Contracting
@endsection

@section('description')
Projects currently underway with Sunfit General Contracting.
@endsection

@section('content')
@include('pages.partials.project-board', ['board' => [
  'status' => 'ongoing',
  'crumb' => 'Ongoing Projects',
  'hero' => 'p2.webp',
  'h1' => '<span class="ln"><span>Work happening</span></span><span class="ln"><span>on site <span class="hl">now.</span></span></span>',
  'lead' => 'Commercial, industrial and interior jobs currently moving through construction with our teams.',
  'count' => '3',
  'eyebrow' => 'In progress',
  'h2' => 'Ongoing <span class="hl">projects.</span>',
  'cards' => [
    ['cat' => 'commercial', 'img' => 'p2.webp', 'tag' => 'Commercial', 'title' => 'Marina Business Park', 'text' => 'Foundations-to-finishing delivery of a four-block commercial business park, currently on site.', 'meta' => ['Turnkey', '4 office blocks']],
    ['cat' => 'industrial', 'img' => 'p4.webp', 'tag' => 'Industrial', 'title' => 'Harbour Logistics Hub', 'text' => 'Steel warehouse structure with fire-fighting and electrical works, underway.', 'meta' => ['Steel Structure', 'Fire-Fighting']],
    ['cat' => 'interior', 'img' => 'p3.webp', 'tag' => 'Interior', 'title' => 'Lakeside Office Fit-Out', 'text' => 'Design-and-build workplace interiors with integrated MEP, in progress.', 'meta' => ['Design & Build', 'Fit-Out']],
  ],
]])
@endsection
