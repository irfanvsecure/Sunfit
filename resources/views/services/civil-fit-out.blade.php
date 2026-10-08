@extends('layouts.app')

@section('title')
Civil &amp; Fit Out Works | Sunfit General Contracting
@endsection

@section('description')
Structural, civil, interior design and joinery works by Sunfit General Contracting.
@endsection

@section('content')
@include('services.partials.clean', ['page' => [
  'route' => 'services.civil-fit-out',
  'crumb' => 'Civil & Fit Out Works',
  'hero' => 'civil.webp',
  'h1' => '<span class="ln"><span>Civil &amp; fit-out,</span></span><span class="ln"><span>one <span class="hl">team.</span></span></span>',
  'lead' => 'Structural frames, civil works, interior design and joinery — coordinated on one site, by one contractor.',
  'chips' => ['Structural', 'Civil', 'Interior design', 'Joinery'],
  'imgs' => ['structural.webp', 'civil.webp', 'interior.webp'],
  'yrs' => '15+',
  'yrsLabel' => 'Years building',
  'introEyebrow' => 'Civil & Fit Out',
  'h2a' => 'From the frame',
  'h2b' => 'to the',
  'h2c' => 'finish.',
  'paras' => [
    'Sunfit takes the building from structure and civil works through to the rooms people actually use. One programme, one site team, one point of contact.',
    'You can hire a single trade, or hand us the full fit-out. Either way the drawings, the sequence and the finish stay aligned.',
  ],
  'ticks' => ['Structural, civil, interior and joinery under one contract', 'Site supervision and weekly progress you can follow', 'Finishes planned before the structure is closed'],
  'scopeEyebrow' => 'What this covers',
  'scopeHa' => 'Four trades.',
  'scopeHb' => 'One site.',
  'scopeLead' => 'Each part of the fit-out has its own scope. Open a section to see where it sits in the job.',
  'trades' => [
    ['id' => 'structural', 'style' => 's1', 'title' => 'Structural Works', 'text' => 'Reinforced concrete and steel frames, extensions, mezzanines and strengthening, built to the drawings and inspected as they go.'],
    ['id' => 'civil', 'style' => 's2', 'title' => 'Civil works', 'text' => 'Site preparation, excavation, foundations, block work, plaster and external works, delivered to the programme.'],
    ['id' => 'interior', 'style' => 's3', 'title' => 'Interior designing works', 'text' => 'Layouts, ceilings, partitions, flooring and finishes — designed and built so the space is ready to use.'],
    ['id' => 'joinery', 'style' => 's1', 'title' => 'Joinery works', 'text' => 'Reception desks, wall panelling, doors, cabinets and bespoke furniture, made to match the interior.'],
  ],
  'processLead' => 'The same four steps on every civil and fit-out job, so you always know what is happening on site.',
  'steps' => [
    ['k' => 'STEP 01', 'title' => 'Site visit & drawings', 'text' => 'We walk the site, read the drawings and agree which trades are in the package.', 'chips' => ['Free site visit', 'Scope review']],
    ['k' => 'STEP 02', 'title' => 'Estimate & programme', 'text' => 'A clear quotation and a sequence that keeps structure, civil and finishes from colliding.', 'chips' => ['BOQ quotation', 'Programme']],
    ['k' => 'STEP 03', 'title' => 'Build & supervise', 'text' => 'Our teams carry out the works with daily supervision and weekly progress updates.', 'chips' => ['Site supervision', 'Weekly reports']],
    ['k' => 'STEP 04', 'title' => 'Snagging & handover', 'text' => 'We close the snag list, hand over the finished spaces and leave the site clean.', 'chips' => ['Snagging', 'Handover']],
  ],
  'gallery' => ['g1.webp', 'g2.webp', 'g15.webp', 'g6.webp', 'g14.webp', 'g3.webp', 'interior.webp', 'g8.webp'],
  'faqs' => [
    ['Can I hire only one of these trades?', 'Yes. Structural, civil, interior design or joinery can be contracted on its own. Most clients combine them so the programme stays in one place.'],
    ['Do you design the interiors as well as build them?', 'Yes. Interior designing works covers the layout and finishes, and joinery covers the built furniture that completes the room.'],
    ['How do you keep structure and finishes aligned?', 'The same site team sequences the trades. Finishes are planned before the structure is closed, so openings, levels and services still match.'],
    ['Where do I start?', 'Send the drawings or a short brief through the contact page. We will arrange a site visit and come back with a scope and estimate.'],
  ],
]])
@endsection
