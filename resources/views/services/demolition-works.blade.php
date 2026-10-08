@extends('layouts.app')

@section('title')
Demolition Works | Sunfit General Contracting
@endsection

@section('description')
Selective demolition, strip-out and structural removal by Sunfit General Contracting.
@endsection

@section('content')
@include('services.partials.clean', ['page' => [
  'route' => 'services.demolition-works',
  'crumb' => 'Demolition Works',
  'hero' => 'g10.webp',
  'h1' => '<span class="ln"><span>Demolition,</span></span><span class="ln"><span>done <span class="hl">safely.</span></span></span>',
  'lead' => 'Selective demolition and strip-out that clears the way for the next build, with the site kept controlled and clean.',
  'chips' => ['Selective demolition', 'Strip-out', 'Site safety'],
  'imgs' => ['g10.webp', 'g15.webp', 'p4.webp'],
  'yrs' => '15+',
  'yrsLabel' => 'Years on site',
  'introEyebrow' => 'Demolition',
  'h2a' => 'Clear the site',
  'h2b' => 'for what',
  'h2c' => 'comes next.',
  'paras' => [
    'Demolition is the first move on many fit-outs and rebuilds. Sunfit removes what has to go, protects what stays, and leaves a site the next trade can start on.',
    'The work is sequenced, supervised and kept within the area you approve — so neighbouring spaces, structure and services stay intact.',
  ],
  'ticks' => ['Selective removal, not a blank demolition of the whole building', 'Protection of structure, services and adjoining areas', 'Waste taken off site and the area left ready to build'],
  'scopeEyebrow' => 'What this covers',
  'scopeHa' => 'Removal',
  'scopeHb' => 'with a plan.',
  'scopeLead' => 'The scope is agreed before anyone starts cutting. These are the parts of a typical demolition package.',
  'trades' => [
    ['id' => 'selective', 'style' => 's1', 'title' => 'Selective demolition', 'text' => 'Walls, slabs and elements removed only where the drawings say so, with the rest of the building protected.'],
    ['id' => 'strip-out', 'style' => 's2', 'title' => 'Strip-out', 'text' => 'Finishes, partitions, ceilings and fittings taken out so a new interior or fit-out can start clean.'],
    ['id' => 'structural', 'style' => 's3', 'title' => 'Structural removal', 'text' => 'Beams, walls and other structural elements taken down to an agreed method, with temporary support where it is needed.'],
    ['id' => 'clearance', 'style' => 's1', 'title' => 'Clearance & safety', 'text' => 'The work zone is controlled, waste is removed, and the area is handed back ready for the following trade.'],
  ],
  'processLead' => 'Demolition starts with a method, not with a machine. You see the plan before work begins.',
  'steps' => [
    ['k' => 'STEP 01', 'title' => 'Survey & method', 'text' => 'We inspect what stays and what goes, and agree the sequence, protection and access.', 'chips' => ['Site survey', 'Method']],
    ['k' => 'STEP 02', 'title' => 'Estimate & approvals', 'text' => 'A clear quotation, and the permits the job needs before demolition starts.', 'chips' => ['Quotation', 'Permits']],
    ['k' => 'STEP 03', 'title' => 'Controlled removal', 'text' => 'Supervised demolition and strip-out, kept inside the agreed zone.', 'chips' => ['Supervision', 'Protection']],
    ['k' => 'STEP 04', 'title' => 'Clear & hand over', 'text' => 'Waste leaves the site and the area is handed to the next trade, or back to you.', 'chips' => ['Waste removal', 'Handover']],
  ],
  'gallery' => ['g10.webp', 'g15.webp', 'p4.webp', 'g2.webp', 'g8.webp', 'structural.webp', 'g1.webp', 'civil.webp'],
  'faqs' => [
    ['Do you demolish whole buildings?', 'The usual brief is selective demolition and strip-out inside or beside a building that stays. Tell us the scope and we will confirm what is practical on that site.'],
    ['Will adjoining rooms and services be protected?', 'Yes. The method names what stays. Those areas, and the services that serve them, are protected before removal starts.'],
    ['Can demolition lead straight into a Sunfit fit-out?', 'Yes. Many clients keep demolition, civil, MEP and interiors with one team so the site does not sit between contractors.'],
    ['What do you need from me to price it?', 'Drawings or photos, and a note of what must stay. We will visit, confirm the method and send an estimate.'],
  ],
]])
@endsection
