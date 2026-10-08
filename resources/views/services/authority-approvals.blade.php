@extends('layouts.app')

@section('title')
Authority Approvals | Sunfit General Contracting
@endsection

@section('description')
ADM, ADCD, maintenance permits and TAQA approvals coordinated by Sunfit General Contracting.
@endsection

@section('content')
@include('services.partials.clean', ['page' => [
  'route' => 'services.authority-approvals',
  'crumb' => 'Authority Approvals',
  'hero' => 'about2.webp',
  'h1' => '<span class="ln"><span>Approvals,</span></span><span class="ln"><span>handled <span class="hl">with the build.</span></span></span>',
  'lead' => 'ADM and ADCD submissions, maintenance permits and TAQA approvals — prepared alongside the construction, not after it.',
  'chips' => ['ADM / ADCD', 'Maintenance permits', 'TAQA'],
  'imgs' => ['about2.webp', 's2.webp', 'g10.webp'],
  'yrs' => '15+',
  'yrsLabel' => 'Years in the UAE',
  'introEyebrow' => 'Approvals',
  'h2a' => 'The paperwork',
  'h2b' => 'that lets the',
  'h2c' => 'site move.',
  'paras' => [
    'A job in Abu Dhabi often needs the municipality, civil defence and the utility to say yes before, or while, the work proceeds. Sunfit prepares those submissions with the same team that builds.',
    'You stay informed at each stage. We do not invent approval numbers or promise a date the authority has not given.',
  ],
  'ticks' => ['ADM and ADCD submissions prepared with the drawings', 'Maintenance permits for works in occupied buildings', 'TAQA approvals coordinated with the MEP scope'],
  'scopeEyebrow' => 'What this covers',
  'scopeHa' => 'Three',
  'scopeHb' => 'approval paths.',
  'scopeLead' => 'Each authority has its own file. We tell you which ones your project actually needs.',
  'trades' => [
    ['id' => 'adm-adcd', 'style' => 's1', 'title' => 'ADM / ADCD Authority Approvals', 'text' => 'Abu Dhabi Municipality and Civil Defence submissions prepared from the project drawings, and followed until the authority responds.'],
    ['id' => 'maintenance', 'style' => 's2', 'title' => 'Maintenance permits', 'text' => 'Permits for repair, fit-out and maintenance works, including jobs inside buildings that stay occupied.'],
    ['id' => 'taqa', 'style' => 's3', 'title' => 'TAQA Approvals', 'text' => 'Utility approvals coordinated with the electrical and mechanical scope, so the connection matches the installation.'],
  ],
  'processLead' => 'Approvals run in parallel with the build, with a clear status at every step.',
  'steps' => [
    ['k' => 'STEP 01', 'title' => 'Which approvals', 'text' => 'We review the project and list the authorities it actually needs — nothing extra.', 'chips' => ['Scope review', 'Authority list']],
    ['k' => 'STEP 02', 'title' => 'Prepare the file', 'text' => 'Drawings and forms are assembled the way each authority asks for them.', 'chips' => ['Drawings', 'Submissions']],
    ['k' => 'STEP 03', 'title' => 'Submit & follow', 'text' => 'We lodge the application and track comments until there is a clear answer.', 'chips' => ['Follow-up', 'Comments']],
    ['k' => 'STEP 04', 'title' => 'Hand you the record', 'text' => 'You receive the approval status and the documents that belong with the project file.', 'chips' => ['Status', 'Project file']],
  ],
  'gallery' => ['about2.webp', 's2.webp', 'g10.webp', 'about1.webp', 's3.webp', 'g5.webp', 'team.webp', 's4.webp'],
  'faqs' => [
    ['Do you guarantee an approval date?', 'No. The authority sets the timeline. We prepare a complete file and follow it, and we tell you the status as it changes.'],
    ['Can you handle approvals without doing the construction?', 'Yes. Many clients ask us only for the submission. It is simpler when we also build, because the drawings and the site stay matched.'],
    ['Which authorities do you deal with?', 'ADM and ADCD for municipality and civil defence, maintenance permits for works in existing buildings, and TAQA for utility approvals.'],
    ['What should I send to get started?', 'The drawings you have, the plot or building details, and a note of the work. We will tell you which submissions apply.'],
  ],
]])
@endsection
