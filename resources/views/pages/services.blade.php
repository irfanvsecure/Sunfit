@extends('layouts.app')

@section('title')
Services | Sunfit General Contracting
@endsection

@section('description')
Civil, structural, electrical, mechanical, plumbing and interior design works by Sunfit General Contracting.
@endsection

@section('content')
<main id="top"><section class="phero"><div class="ph-card"><img src="{{ asset('images/s3.webp') }}" alt="">
  <div class="ph-in"><div class="wrap">
    <div><div class="crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><span>Services</span></div><h1 class="lines"><span class="ln"><span>Six services.</span></span><span class="ln"><span><span class="hl">One</span> accountable team.</span></span></h1></div>
    <div class="ph-side" data-r="up" style="--dl:.3s"><p>Hire us for a single trade or hand us the complete project — every service is delivered by our own experienced teams.</p><div class="ph-chips"><span>Civil Works</span><span>Structural Works</span><span>Electrical Works</span><span>Mechanical Works</span><span>Plumbing Works</span><span>Interior Designing Works</span></div></div>
  </div></div>
  <a href="#main" class="ph-scroll" aria-label="Scroll down"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
</div></section>

<section class="sec" id="main">
  <div class="wrap">
    <div class="sec-head"><div><span class="eyebrow" data-r="up"><i></i>What we offer</span><h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>Complete construction,</span></span><span class="ln"><span><span class="hl">MEP</span> &amp; interiors.</span></span></h2></div>
      <p data-r="up">Pick a service to see its full scope, process and project photos.</p></div>
    <div class="svc-grid"><a href="{{ route('services.civil-works') }}" class="svc-card" data-r="up" style="--dl:0.0s">
  <div class="im"><img src="{{ asset('images/civil.webp') }}" alt="Civil Works"><span class="no">01</span><span class="ic"><svg viewBox="0 0 24 24"><path d="M2 20h20M4 20V9l8-5 8 5v11M9 20v-6h6v6"/></svg></span></div>
  <div class="bd"><h3>Civil Works</h3><p>Site preparation, excavation, foundations, roads and external works delivered to spec and on schedule.</p><ul><li>Site Preparation & Earthworks</li><li>Foundations & Substructure</li><li>Block Work & Plastering</li></ul><span class="go">Explore service <i><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></i></span></div>
</a><a href="{{ route('services.structural-works') }}" class="svc-card" data-r="up" style="--dl:0.1s">
  <div class="im"><img src="{{ asset('images/structural.webp') }}" alt="Structural Works"><span class="no">02</span><span class="ic"><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21V3h14v18M5 8h14M5 14h14M10 3v18M14 3v18"/></svg></span></div>
  <div class="bd"><h3>Structural Works</h3><p>Reinforced concrete, steel structures and structural strengthening built for safety and long life.</p><ul><li>RCC Frame Construction</li><li>Structural Steel Works</li><li>Formwork & Reinforcement</li></ul><span class="go">Explore service <i><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></i></span></div>
</a><a href="{{ route('services.electrical-works') }}" class="svc-card" data-r="up" style="--dl:0.2s">
  <div class="im"><img src="{{ asset('images/electrical.webp') }}" alt="Electrical Works"><span class="no">03</span><span class="ic"><svg viewBox="0 0 24 24"><path d="M13 2 4 14h7l-1 8 9-12h-7z"/></svg></span></div>
  <div class="bd"><h3>Electrical Works</h3><p>Complete LV installations — power, lighting, DB panels, ELV and testing & commissioning.</p><ul><li>Power & Lighting</li><li>Distribution Boards & Panels</li><li>ELV & Low-Current Systems</li></ul><span class="go">Explore service <i><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></i></span></div>
</a><a href="{{ route('services.mechanical-works') }}" class="svc-card" data-r="up" style="--dl:0.0s">
  <div class="im"><img src="{{ asset('images/mechanical.webp') }}" alt="Mechanical Works"><span class="no">04</span><span class="ic"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v3M12 20v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M1 12h3M20 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></span></div>
  <div class="bd"><h3>Mechanical Works</h3><p>HVAC, ventilation, ducting, chilled water and fire-fighting systems installed and balanced.</p><ul><li>HVAC Installation</li><li>Ducting & Ventilation</li><li>Chilled Water & Piping</li></ul><span class="go">Explore service <i><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></i></span></div>
</a><a href="{{ route('services.plumbing-works') }}" class="svc-card" data-r="up" style="--dl:0.1s">
  <div class="im"><img src="{{ asset('images/plumbing.webp') }}" alt="Plumbing Works"><span class="no">05</span><span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2.7s-6 6.3-6 11.3a6 6 0 0 0 12 0c0-5-6-11.3-6-11.3z"/><path d="M9 15a3 3 0 0 0 3 3"/></svg></span></div>
  <div class="bd"><h3>Plumbing Works</h3><p>Water supply, drainage, sanitary fixtures, pumps and water heaters — leak-free and tested.</p><ul><li>Water Supply Systems</li><li>Drainage & Sewerage</li><li>Sanitary Fixtures</li></ul><span class="go">Explore service <i><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></i></span></div>
</a><a href="{{ route('services.interior-design-works') }}" class="svc-card" data-r="up" style="--dl:0.2s">
  <div class="im"><img src="{{ asset('images/interior.webp') }}" alt="Interior Designing Works"><span class="no">06</span><span class="ic"><svg viewBox="0 0 24 24"><path d="M4 11V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M2 13a2 2 0 0 1 4 0v2h12v-2a2 2 0 0 1 4 0v5H2z"/><path d="M5 18v2M19 18v2"/></svg></span></div>
  <div class="bd"><h3>Interior Designing Works</h3><p>Design-and-build interiors and fit-outs — ceilings, partitions, joinery, flooring and finishes.</p><ul><li>Concept & 3D Design</li><li>Ceilings & Partitions</li><li>Joinery & Furniture</li></ul><span class="go">Explore service <i><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></i></span></div>
</a></div>
  </div>
</section>
<!-- SERVICES PANELS -->
<div class="dark-wrap dark" id="panels">
<section class="sec">
  <div class="wrap">
    <div class="sec-head">
      <div><span class="eyebrow" data-r="up"><i></i>What we do</span>
        <h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>Six services.</span></span><span class="ln"><span class="hl">One team.</span></span></h2></div>
      <p data-r="up" style="--dl:.2s">Hire us for a single trade or hand us the complete project. Tap a panel to explore what each service covers.</p>
    </div>
    <div class="panels" data-r="up">
      <div class="panel on"><img src="{{ asset('images/civil.webp') }}" alt="Civil works"><span class="p-num">01</span><span class="p-vert">Civil Works</span>
        <div class="p-body"><h3>Civil Works</h3><p>Site preparation, excavation, foundations, block work and external works delivered to spec and on schedule.</p><ul><li>Earthworks</li><li>Foundations</li><li>Block Work &amp; Plaster</li><li>Roads &amp; Paving</li></ul><a href="{{ route('services.civil-works') }}" class="pill sun">Explore Service <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
      <div class="panel"><img src="{{ asset('images/structural.webp') }}" alt="Structural works"><span class="p-num">02</span><span class="p-vert">Structural Works</span>
        <div class="p-body"><h3>Structural Works</h3><p>Reinforced concrete and steel structures, extensions, mezzanines and strengthening built for safety and long life.</p><ul><li>RCC Frames</li><li>Steel Structures</li><li>Formwork &amp; Rebar</li><li>Repair &amp; Strengthening</li></ul><a href="{{ route('services.structural-works') }}" class="pill sun">Explore Service <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
      <div class="panel"><img src="{{ asset('images/electrical.webp') }}" alt="Electrical works"><span class="p-num">03</span><span class="p-vert">Electrical Works</span>
        <div class="p-body"><h3>Electrical Works</h3><p>Complete LV installations — power, lighting, DB panels and ELV — tested and commissioned to authority standards.</p><ul><li>Power &amp; Lighting</li><li>DB &amp; Panels</li><li>ELV / CCTV / Data</li><li>Testing &amp; Commissioning</li></ul><a href="{{ route('services.electrical-works') }}" class="pill sun">Explore Service <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
      <div class="panel"><img src="{{ asset('images/mechanical.webp') }}" alt="Mechanical works"><span class="p-num">04</span><span class="p-vert">Mechanical Works</span>
        <div class="p-body"><h3>Mechanical Works</h3><p>HVAC, ventilation, ducting, chilled water and fire-fighting systems installed, balanced and commissioned.</p><ul><li>HVAC / VRF</li><li>Ducting &amp; Ventilation</li><li>Chilled Water</li><li>Fire-Fighting</li></ul><a href="{{ route('services.mechanical-works') }}" class="pill sun">Explore Service <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
      <div class="panel"><img src="{{ asset('images/plumbing.webp') }}" alt="Plumbing works"><span class="p-num">05</span><span class="p-vert">Plumbing Works</span>
        <div class="p-body"><h3>Plumbing Works</h3><p>Water supply, drainage, sanitary fixtures, pumps and water heaters — pressure-tested and leak-free.</p><ul><li>Water Supply</li><li>Drainage</li><li>Sanitary Fixtures</li><li>Pumps &amp; Heaters</li></ul><a href="{{ route('services.plumbing-works') }}" class="pill sun">Explore Service <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
      <div class="panel"><img src="{{ asset('images/interior.webp') }}" alt="Interior designing works"><span class="p-num">06</span><span class="p-vert">Interior Design</span>
        <div class="p-body"><h3>Interior Designing Works</h3><p>Design-and-build interiors and fit-outs — 3D concepts, ceilings, partitions, joinery, flooring and finishes.</p><ul><li>3D Design</li><li>Ceilings &amp; Partitions</li><li>Joinery</li><li>Flooring &amp; Finishes</li></ul><a href="{{ route('services.interior-design-works') }}" class="pill sun">Explore Service <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
    </div>
    <div class="stats">
      <div class="stat" data-r="up"><b><span data-count="15">0</span><em>+</em></b><span>Years of expertise</span></div>
      <div class="stat" data-r="up" style="--dl:.1s"><b><span data-count="500">0</span><em>+</em></b><span>Projects completed</span></div>
      <div class="stat" data-r="up" style="--dl:.2s"><b><span data-count="120">0</span><em>+</em></b><span>Skilled team members</span></div>
      <div class="stat" data-r="up" style="--dl:.3s"><b><span data-count="98">0</span><em>%</em></b><span>Client satisfaction</span></div>
    </div>
  </div>
</section>
</div>

<!-- PROCESS -->
<section class="sec" id="process" style="padding-top:40px">
  <div class="wrap process">
    <div class="proc-left">
      <span class="eyebrow" data-r="up"><i></i>How we work</span>
      <h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>From first call</span></span><span class="ln"><span>to <span class="hl">handover.</span></span></span></h2>
      <div class="proc-count"><span class="pc">01</span><small>/ 04</small></div>
      <p class="muted" data-r="up" style="max-width:420px">A clear, four-step process so you always know what's happening on site — and what comes next.</p>
    </div>
    <div class="steps"><span class="fillbar"></span>
      <div class="step act" data-r="right"><span class="k">STEP 01</span><h3>Consultation &amp; Site Visit</h3><p>We understand your requirements, visit the site and review drawings, soil reports and approvals.</p><div class="chips"><span>Free site visit</span><span>Drawing review</span></div></div>
      <div class="step" data-r="right"><span class="k">STEP 02</span><h3>Estimate &amp; Planning</h3><p>A detailed BOQ-based quotation, realistic schedule and method statement — explained line by line.</p><div class="chips"><span>BOQ quotation</span><span>Timeline</span></div></div>
      <div class="step" data-r="right"><span class="k">STEP 03</span><h3>Execution &amp; Supervision</h3><p>Coordinated trades, daily supervision, inspections and weekly progress reports.</p><div class="chips"><span>HSE on site</span><span>Weekly reports</span></div></div>
      <div class="step" data-r="right"><span class="k">STEP 04</span><h3>Testing &amp; Handover</h3><p>Testing and commissioning, snagging, as-built documentation and a clean, ready-to-use handover.</p><div class="chips"><span>Commissioning</span><span>As-built docs</span></div></div>
    </div>
  </div>
</section>

<!-- QUOTE -->
<section class="sec" id="contact" style="padding-top:20px">
  <div class="wrap quote">
    <div class="q-card photo" style="--qimg:url({{ asset('images/helmet.webp') }})" data-r="left">
      <div><span class="eyebrow"><i></i>Free estimate</span>
        <h2 class="h-md" style="margin-top:20px;color:#fff">Not sure which service you need? Tell us about the project.</h2></div>
      <div class="q-list">
        <a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Call us</small><b>+971 00 000 0000</b></span></a>
        <a href="mailto:info@sunfitgc.com"><i><svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg></i><span><small>Email us</small><b>info@sunfitgc.com</b></span></a>
        <div><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></i><span><small>Working hours</small><b>Mon – Sat · 8:00 AM – 6:00 PM</b></span></div>
      </div>
    </div>
    <div class="q-card form" data-r="right">
      <h3 class="h-md">Request a consultation</h3>
      <form class="qform" data-email="info@sunfitgc.com">
        <div class="svc-chips">
          <label><input type="checkbox" name="svc" value="Civil"><span>Civil</span></label>
          <label><input type="checkbox" name="svc" value="Structural"><span>Structural</span></label>
          <label><input type="checkbox" name="svc" value="Electrical"><span>Electrical</span></label>
          <label><input type="checkbox" name="svc" value="Mechanical"><span>Mechanical</span></label>
          <label><input type="checkbox" name="svc" value="Plumbing"><span>Plumbing</span></label>
          <label><input type="checkbox" name="svc" value="Interior"><span>Interior</span></label>
        </div>
        <div class="fld"><input id="f1" name="Name" placeholder=" " required><label for="f1">Full name*</label></div>
        <div class="fld"><input id="f2" name="Phone" type="tel" placeholder=" " required><label for="f2">Phone*</label></div>
        <div class="fld full"><input id="f3" name="Email" type="email" placeholder=" " required><label for="f3">Email*</label></div>
        <div class="fld full"><textarea id="f4" name="Message" placeholder=" "></textarea><label for="f4">Tell us about your project</label></div>
        <div class="full" style="grid-column:1/-1"><button type="submit" class="pill">Send Request <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></div>
        <p class="form-note">Your email app has opened with the message ready — just press send.</p>
      </form>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:40px">
  <div class="wrap faq">
    <div>
      <span class="eyebrow" data-r="up"><i></i>FAQ</span>
      <h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>Questions?</span></span><span class="ln"><span><span class="hl">Answered.</span></span></span></h2>
      <p class="muted" data-r="up" style="margin:20px 0 30px;max-width:380px">Can't find what you need? Call or WhatsApp us — we're happy to help.</p>
      <a href="{{ route('contact') }}" class="pill" data-r="up">Ask Us Anything <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
    </div>
    <div data-r="up"><details open><summary>Do you provide both construction and MEP services?<i></i></summary><div class="ans"><p>Yes. We deliver civil, structural, electrical, mechanical, plumbing and interior works under one roof, so you deal with a single accountable contractor.</p></div></details><details><summary>Can you take on only one trade, like plumbing or electrical?<i></i></summary><div class="ans"><p>Absolutely. You can hire us for a single service package or for complete turnkey delivery — whatever your project needs.</p></div></details><details><summary>How do you estimate the total project cost?<i></i></summary><div class="ans"><p>We review your drawings or visit the site, prepare a detailed BOQ-based quotation, and explain every line item before you commit.</p></div></details><details><summary>What types of projects do you work on?<i></i></summary><div class="ans"><p>We focus on commercial and industrial projects — offices, retail, restaurants, clinics, hotels, warehouses and factories.</p></div></details><details><summary>Do you handle authority inspections and approvals?<i></i></summary><div class="ans"><p>We prepare the required documentation and coordinate with your consultant for municipality, civil defence and utility inspections.</p></div></details></div>
  </div>
</section>
</main>
@endsection