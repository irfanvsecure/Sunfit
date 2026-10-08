@extends('layouts.app')

@section('title')
MEP Works | Sunfit General Contracting
@endsection

@section('description')
Mechanical, electrical, plumbing and drainage works by Sunfit General Contracting.
@endsection

@section('content')
@include('services.partials.clean', ['page' => [
  'route' => 'services.mep-works',
  'crumb' => 'MEP Works',
  'hero' => 'mechanical.webp',
  'h1' => '<span class="ln"><span>MEP, coordinated</span></span><span class="ln"><span>as <span class="hl">one system.</span></span></span>',
  'lead' => 'Mechanical, electrical, plumbing and drainage — designed to share the same ceilings, risers and programme.',
  'chips' => ['Mechanical', 'Electrical', 'Plumbing & drainage'],
  'imgs' => ['mechanical.webp', 'electrical.webp', 'plumbing.webp'],
  'yrs' => '15+',
  'yrsLabel' => 'Years on site',
  'introEyebrow' => 'MEP Works',
  'h2a' => 'Services that',
  'h2b' => 'fit the',
  'h2c' => 'building.',
  'paras' => [
    'Power, cooling, water and drainage only work when they are planned together. Sunfit runs mechanical, electrical and plumbing as one MEP package.',
    'You get one programme, one set of drawings to coordinate, and a team that tests the systems before handover.',
  ],
  'ticks' => ['Mechanical, electrical and plumbing under one contract', 'Coordinated routes through ceilings and risers', 'Testing and commissioning before handover'],
  'scopeEyebrow' => 'What this covers',
  'scopeHa' => 'Three systems.',
  'scopeHb' => 'One package.',
  'scopeLead' => 'Each service has its own scope. Together they are one MEP contract.',
  'trades' => [
    ['id' => 'mechanical', 'style' => 's1', 'title' => 'Mechanical Works', 'text' => 'HVAC, ventilation and related mechanical systems, installed to the drawings and commissioned before handover.'],
    ['id' => 'electrical', 'style' => 's2', 'title' => 'Electrical Works', 'text' => 'Power, lighting, small power and related electrical works, coordinated with the ceilings and the other services.'],
    ['id' => 'plumbing', 'style' => 's3', 'title' => 'Plumbing & drainage works', 'text' => 'Water supply, sanitary fittings and drainage, routed with the structure and finished ready to use.'],
  ],
  'processLead' => 'MEP follows the same clear path on every job, from the first site visit through testing.',
  'steps' => [
    ['k' => 'STEP 01', 'title' => 'Survey & coordination', 'text' => 'We review the drawings, walk the site and agree how mechanical, electrical and plumbing share the space.', 'chips' => ['Drawing review', 'Site survey']],
    ['k' => 'STEP 02', 'title' => 'Estimate & programme', 'text' => 'A line-by-line quotation and a sequence that fits the civil and fit-out programme.', 'chips' => ['BOQ quotation', 'Programme']],
    ['k' => 'STEP 03', 'title' => 'Installation', 'text' => 'Our teams install the systems with daily supervision and weekly progress you can follow.', 'chips' => ['Site supervision', 'Weekly reports']],
    ['k' => 'STEP 04', 'title' => 'Testing & handover', 'text' => 'We test and commission the systems, close snags and hand over a building that is ready to run.', 'chips' => ['Commissioning', 'Handover']],
  ],
  'gallery' => ['g11.webp', 'g12.webp', 'g5.webp', 'g13.webp', 'g4.webp', 'g7.webp', 'electrical.webp', 'plumbing.webp'],
  'faqs' => [
    ['Can I appoint only electrical, or only plumbing?', 'Yes. Each trade can stand alone. Most projects are smoother when mechanical, electrical and plumbing are one package.'],
    ['Do you coordinate with the civil and fit-out teams?', 'Yes. Routes, openings and ceiling levels are agreed before installation so the finishes are not opened up later.'],
    ['What happens at the end of the job?', 'We test and commission the systems, clear the snag list and hand the installation over with the site left clean.'],
    ['How do I request an estimate?', 'Share the drawings or a short brief on the contact page. We will visit the site and return with a scope and quotation.'],
  ],
]])
@endsection
