@extends('layouts.app')

@section('title')
Civil Works | Sunfit General Contracting
@endsection

@section('description')
Site preparation, excavation, foundations, roads and external works delivered to spec and on schedule.
@endsection

@section('content')
<div class="d-progress"><i></i></div><main id="top" class="s5 sv-civil">
<section class="s5-hero">
  <div class="s5-hero-bg" data-parallax><img src="{{ asset('images/s2.webp') }}" alt=""></div>
  <div class="wrap s5-hero-in">
    <div class="sv-crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><i></i><a href="{{ route('services') }}">Services</a><i></i><b>Civil Works</b></div>
    <span class="s5-tag" data-r="up"><em>01</em>Civil specialists</span>
    <h1 class="lines"><span class="ln"><span>Civil Works</span></span></h1>
    <p data-r="up" style="--dl:.2s">Site preparation, excavation, foundations, roads and external works delivered to spec and on schedule.</p>
    <div class="s5-hero-act" data-r="up" style="--dl:.3s"><a href="#drawings" class="pill sun">Send Drawings for BOQ <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a><a href="#ready" class="s5-link">Check site readiness <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div>
    <div class="c-trust" data-r="up" style="--dl:.4s">
      <div class="c-faces"><img src="{{ asset('images/a1.webp') }}" alt=""><img src="{{ asset('images/a2.webp') }}" alt=""><img src="{{ asset('images/a3.webp') }}" alt=""><img src="{{ asset('images/a4.webp') }}" alt=""></div>
      <div><div class="c-stars">★★★★★ <b>5.0</b></div><span>Rated by developers &amp; businesses</span></div>
      <div class="c-sep"></div>
      <div class="c-live"><span class="dot"></span>Replies within 24 hours</div>
    </div>
  </div>
</section>
<div class="wrap s5-bar-wrap"><div class="s5-bar" data-r="up"><a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>No obligation</small><b>Free site visit</b></span></a><a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i><span><small>From your drawings</small><b>BOQ in 48 hours</b></span></a><a href="#quote"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><span><small>Lab-certified</small><b>Soil &amp; compaction tests</b></span></a><a href="#wizard"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></i><span><small>Handled for you</small><b>Authority inspections</b></span></a></div></div>

<section class="sec s5-intro" id="overview">
  <div class="wrap s5-split">
    <div class="s5-imgs">
      <div class="s5-im1" data-r="clip"><img src="{{ asset('images/civil.webp') }}" alt="Civil Works"></div>
      <div class="s5-im2" data-r="clip" style="--dl:.25s"><img src="{{ asset('images/about1.webp') }}" alt="Concrete Stair Core"></div>
      <div class="s5-badge" data-r="scale" style="--dl:.4s"><b><span data-count="15">0</span>+</b><small>Years of<br>experience</small></div>
    </div>
    <div>
      <span class="eyebrow" data-r="up"><i></i>Service overview</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Professional civil works</span></span><span class="ln"><span>you can <span class="hl">rely on.</span></span></span></h2>
      <p class="s5-lead" data-r="up">Every strong project starts in the ground. Our Civil Works team handles everything from site clearance and setting-out to excavation, foundations, block work and external works — giving your building a solid, compliant base.</p>
      <p class="muted" data-r="up">We work to approved drawings and authority requirements, coordinate closely with consultants, and keep the site safe, clean and moving so that later trades can start on time.</p>
      <div class="s5-feats" data-r="up"><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Solid base</b><span>Foundations built to carry the structure safely for decades.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Fewer delays</b><span>Clean, ready sites so MEP and finishing trades start on time.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Tested quality</b><span>Lab reports for concrete and compaction at every stage.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Clear costs</b><span>BOQ-based pricing with measured quantities — no guesswork.</span></div></div></div>
      <div class="s5-act" data-r="up"><a href="#quote" class="pill">Request a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
        <a href="tel:+971000000000" class="s5-call"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Call us anytime</small><b>+971 00 000 0000</b></span></a></div>
    </div>
  </div>
</section>

<section class="sec u-phases" id="phases">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Project phases</span>
      <h2 class="h-lg lines"><span class="ln"><span>From empty plot to</span></span><span class="ln"><span><span class="hl">solid base.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Typical sequence and duration for a mid-size commercial plot. We confirm exact timings after reviewing your drawings.</p></div>
    <div class="u-ph-row" data-r="up"><span class="u-ph-line"><i></i></span><div class="u-ph" style="--i:0"><span class="u-ph-n">01</span><span class="u-ph-d">Week 1</span><h3>Site Setup &amp; Survey</h3><p>Hoarding, site office, setting-out and levels.</p></div><div class="u-ph" style="--i:1"><span class="u-ph-n">02</span><span class="u-ph-d">Weeks 2–3</span><h3>Excavation &amp; Earthworks</h3><p>Excavation, dewatering if needed, compaction tests.</p></div><div class="u-ph" style="--i:2"><span class="u-ph-n">03</span><span class="u-ph-d">Weeks 3–6</span><h3>Foundations</h3><p>PCC, footings / raft, waterproofing, backfill.</p></div><div class="u-ph" style="--i:3"><span class="u-ph-n">04</span><span class="u-ph-d">Weeks 6–12</span><h3>Block Work &amp; Plaster</h3><p>Masonry, lintels, internal and external plaster.</p></div><div class="u-ph" style="--i:4"><span class="u-ph-n">05</span><span class="u-ph-d">Final weeks</span><h3>External Works</h3><p>Paving, boundary walls, drainage and landscaping bases.</p></div></div>
  </div>
</section>

<section class="sec s5-scope" id="scope">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Scope of work</span>
      <h2 class="h-lg lines"><span class="ln"><span>What's included</span></span><span class="ln"><span>in our <span class="hl">package.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Each area below can be awarded on its own or combined with our other trades into one turnkey contract.</p></div>
    <div class="s5-cards"><div class="s5-card" data-r="up" style="--dl:0.0s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M2 20h20M4 20V9l8-5 8 5v11M9 20v-6h6v6"/></svg></i><span>01</span></div>
      <h3>Site Preparation & Earthworks</h3><p>Clearing, levelling, excavation, backfilling and compaction with proper testing.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.1s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M2 20h20M4 20V9l8-5 8 5v11M9 20v-6h6v6"/></svg></i><span>02</span></div>
      <h3>Foundations & Substructure</h3><p>Footings, raft and pile caps, waterproofing and anti-termite treatment.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.2s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M2 20h20M4 20V9l8-5 8 5v11M9 20v-6h6v6"/></svg></i><span>03</span></div>
      <h3>Block Work & Plastering</h3><p>Internal and external masonry, plaster and screed to true lines and levels.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.30000000000000004s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M2 20h20M4 20V9l8-5 8 5v11M9 20v-6h6v6"/></svg></i><span>04</span></div>
      <h3>External & Infrastructure Works</h3><p>Roads, paving, interlock, boundary walls, drainage and landscaping bases.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div></div>
    <div class="s5-offs"><div class="s5-off" data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer1.webp') }}" alt="Site Survey & Setting-Out"><div><span class="s5-free">Included</span><h4>Site Survey & Setting-Out</h4><p>Accurate levels and grid lines before a single shovel goes in.</p></div></div><div class="s5-off" data-r="up" style="--dl:0.1s"><img src="{{ asset('images/offer2.webp') }}" alt="Quantity & Cost Estimation"><div><span class="s5-free">Included</span><h4>Quantity & Cost Estimation</h4><p>Clear BOQ-based pricing so you can budget with confidence.</p></div></div></div>
  </div>
</section>

<section class="sec u-check-sec" id="ready">
  <div class="wrap u-check-grid">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Site readiness check</span>
      <h2 class="h-lg lines" style="margin:18px 0 18px"><span class="ln"><span>Is your project</span></span><span class="ln"><span><span class="hl">ready to start?</span></span></span></h2>
      <p class="muted" data-r="up">Tick what you already have. We'll tell you how ready you are — and help arrange anything that's missing.</p>
    </div>
    <div class="u-check" data-mode="ready" data-svc="Civil Works" data-l0="Not started" data-l1="Early stage" data-l2="Getting there" data-l3="Almost ready" data-l4="Ready to start" data-r="up">
      <div class="u-cks"><label class="u-ck"><input type="checkbox" value="Plot / affection plan" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Plot / affection plan</span></label><label class="u-ck"><input type="checkbox" value="Soil investigation report" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Soil investigation report</span></label><label class="u-ck"><input type="checkbox" value="Approved IFC drawings" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Approved IFC drawings</span></label><label class="u-ck"><input type="checkbox" value="Building permit / NOC" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Building permit / NOC</span></label><label class="u-ck"><input type="checkbox" value="Utility connections planned" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Utility connections planned</span></label><label class="u-ck"><input type="checkbox" value="Budget &amp; timeline agreed" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Budget &amp; timeline agreed</span></label></div>
      <div class="u-res">
        <div class="u-meter"><i></i></div>
        <div class="u-res-t"><small>Readiness</small><b class="u-lvl">Not started</b></div>
        <a href="https://wa.me/971000000000" target="_blank" rel="noopener" class="pill sun u-go">Help me get ready <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
      </div>
    </div>
  </div>
</section>

<div class="dark-wrap dark s5-why">
<section class="sec">
  <div class="wrap s5-split rev">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Why it matters</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Quality that holds up</span></span><span class="ln"><span><span class="hl">for decades.</span></span></span></h2>
      <p class="s5-lead light" data-r="up">Mistakes in groundwork are the most expensive to fix. They surface years later as cracks, settlement and water ingress. Getting levels, compaction and foundations right the first time protects everything that is built on top.</p>
      <h4 class="s5-sub" data-r="up">Quality standards we follow</h4>
      <ul class="s5-std"><li data-r="up" style="--dl:0.0s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Work strictly to approved IFC drawings and specifications</li><li data-r="up" style="--dl:0.06s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Soil investigation report reviewed before excavation</li><li data-r="up" style="--dl:0.12s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Concrete to approved mix design with cube testing</li><li data-r="up" style="--dl:0.18s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Compaction tests at every backfill layer</li><li data-r="up" style="--dl:0.24s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Municipality inspection at key stages</li></ul>
    </div>
    <div class="s5-why-media">
      <div class="s5-why-img" data-r="clip"><img src="{{ asset('images/g10.webp') }}" alt="Site Planning &amp; Setting-Out"></div>
      <div class="s5-why-card" data-r="up" style="--dl:.3s"><span class="eyebrow"><i></i>Materials &amp; systems</span>
        <div class="s5-tags"><span>Ready-mix concrete</span><span>Reinforcement steel</span><span>Solid & hollow blocks</span><span>Waterproofing membranes</span><span>Anti-termite treatment</span><span>Interlock pavers & kerbs</span></div></div>
    </div>
  </div>
</section>
</div>

<section class="sec c-cmp-sec">
  <div class="wrap c-cmp-grid">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Why clients switch to us</span>
      <h2 class="h-lg lines" style="margin:18px 0 20px"><span class="ln"><span>Sunfit vs a</span></span><span class="ln"><span><span class="hl">typical contractor.</span></span></span></h2>
      <p class="muted" data-r="up" style="margin-bottom:28px">Most delays and cost overruns come from poor coordination and unclear pricing. Here's how we remove both.</p>
      <a href="#wizard" class="pill" data-r="up">Get My Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
    </div>
    <div class="c-table" data-r="up">
      <div class="c-th"><span>What you get</span><b class="y">Sunfit</b><b class="n"><span class="lg">Typical contractor</span><span class="sm">Others</span></b></div>
      <div class="c-tr" data-r="up" style="--dl:0.0s"><span>Single point of contact for all trades</span><i class="y"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><i class="n"><svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></svg></i></div><div class="c-tr" data-r="up" style="--dl:0.05s"><span>Detailed BOQ-based written quotation</span><i class="y"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><i class="n"><svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></svg></i></div><div class="c-tr" data-r="up" style="--dl:0.1s"><span>In-house engineers &amp; supervisors</span><i class="y"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><i class="n"><svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></svg></i></div><div class="c-tr" data-r="up" style="--dl:0.15000000000000002s"><span>Weekly progress photos &amp; reports</span><i class="y"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><i class="n"><svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></svg></i></div><div class="c-tr" data-r="up" style="--dl:0.2s"><span>Test reports &amp; as-built documents</span><i class="y"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><i class="n"><svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></svg></i></div><div class="c-tr" data-r="up" style="--dl:0.25s"><span>Authority inspection support</span><i class="y"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><i class="n"><svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></svg></i></div><div class="c-tr" data-r="up" style="--dl:0.30000000000000004s"><span>Clean site &amp; snag-free handover</span><i class="y"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><i class="n"><svg viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></svg></i></div>
    </div>
  </div>
</section>

<section class="sec c-wiz-sec" id="wizard" style="padding-top:30px">
  <div class="wrap">
    <div class="c-wiz" data-r="up">
      <div class="c-wiz-l">
        <span class="eyebrow" style="color:#fff"><i></i>Free quote in 60 seconds</span>
        <h2>Tell us about your project in 3 quick steps.</h2>
        <p>No commitment. We'll call you back with a site-visit slot and a ballpark budget for your civil works.</p>
        <ol class="c-wiz-steps"><li class="on"><span>1</span>Your requirement</li><li><span>2</span>Details &amp; timing</li><li><span>3</span>Your details</li></ol>
        <div class="c-wiz-bar"><i></i></div>
      </div>
      <form class="c-wiz-f" data-email="info@sunfitgc.com" data-svc="Civil Works" novalidate>
        <div class="c-pane on" data-step="1"><h3>What do you need?</h3><div class="c-opts"><label class="c-opt"><input type="radio" name="Project type" value="New building groundworks" checked><span><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i>New building groundworks</span></label><label class="c-opt"><input type="radio" name="Project type" value="Foundations &amp; substructure"><span><i><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21v-6h14v6M8 15V9h8v6M11 9V4h2v5"/></svg></i>Foundations &amp; substructure</span></label><label class="c-opt"><input type="radio" name="Project type" value="Block work &amp; plaster"><span><i><svg viewBox="0 0 24 24"><path d="M3 5h18v14H3zM3 10h18M3 15h18M9 5v5M15 10v5M9 15v4"/></svg></i>Block work &amp; plaster</span></label><label class="c-opt"><input type="radio" name="Project type" value="External works &amp; paving"><span><i><svg viewBox="0 0 24 24"><path d="M5 21 9 3M19 21 15 3M12 5v2M12 11v2M12 17v2"/></svg></i>External works &amp; paving</span></label></div></div>
        <div class="c-pane" data-step="2"><h3>Do you have approved drawings?</h3><div class="c-opts two"><label class="c-opt sm"><input type="radio" name="Project stage" value="Yes, IFC drawings ready" checked><span>Yes, IFC drawings ready</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Drawings under approval"><span>Drawings under approval</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Need design support"><span>Need design support</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Only a concept / plot"><span>Only a concept / plot</span></label></div>
          <h3 style="margin-top:22px">When do you want to start?</h3><div class="c-opts two"><label class="c-opt sm"><input type="radio" name="Start" value="As soon as possible"><span>As soon as possible</span></label><label class="c-opt sm"><input type="radio" name="Start" value="Within 1 month" checked><span>Within 1 month</span></label><label class="c-opt sm"><input type="radio" name="Start" value="1–3 months"><span>1–3 months</span></label><label class="c-opt sm"><input type="radio" name="Start" value="Just exploring"><span>Just exploring</span></label></div></div>
        <div class="c-pane" data-step="3"><h3>Where should we send your quote?</h3>
          <div class="c-fields"><input name="Name" placeholder="Full name*" required><input name="Phone" type="tel" placeholder="Phone / WhatsApp*" required><input name="Email" type="email" placeholder="Email (optional)" class="full"><input name="Location" placeholder="Project location (area / city)" class="full"></div>
          <p class="c-err">Please add your name and phone number.</p></div>
        <div class="c-pane c-done" data-step="4"><div class="c-ok"><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></div><h3>Thank you! Choose how to send:</h3><p>Your details are ready — send them by WhatsApp for the fastest reply, or by email.</p>
          <div class="c-send"><a class="pill sun c-wa-send" href="#" target="_blank" rel="noopener">Send on WhatsApp <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a><a class="pill ghost c-mail-send" href="#">Send by Email</a></div></div>
        <div class="c-nav"><button type="button" class="c-back">Back</button><button type="button" class="pill c-next">Continue <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></div>
      </form>
    </div>
  </div>
</section>

<section class="sec s5-galsec" id="gallery" style="padding-top:40px">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Project gallery</span>
      <h2 class="h-lg lines"><span class="ln"><span>Recent civil works</span></span><span class="ln"><span><span class="hl">on site.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Tap any photo to view it full size.</p></div>
    <div class="sgal s5-gal"><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/civil.webp') }}" alt="Civil Works"><figcaption><span>Civil Works</span><b>Civil Works</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/about1.webp') }}" alt="Concrete Stair Core"><figcaption><span>Civil Works</span><b>Concrete Stair Core</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g10.webp') }}" alt="Site Planning &amp; Setting-Out"><figcaption><span>Civil Works</span><b>Site Planning &amp; Setting-Out</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g15.webp') }}" alt="Foundation Works"><figcaption><span>Civil Works</span><b>Foundation Works</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer1.webp') }}" alt="Civil Works project"><figcaption><span>Civil Works</span><b>Civil Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/offer2.webp') }}" alt="Civil Works project"><figcaption><span>Civil Works</span><b>Civil Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g6.webp') }}" alt="Civil Works project"><figcaption><span>Civil Works</span><b>Civil Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g8.webp') }}" alt="Civil Works project"><figcaption><span>Civil Works</span><b>Civil Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure></div>
  </div>
</section>

<section class="sec" id="drawings" style="padding:30px 0">
  <div class="wrap"><div class="u-band" data-r="up"><span class="u-band-i"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M12 18v-6M9 15l3-3 3 3"/></svg></span><div><h3>Send your drawings — get a BOQ in 48 hours</h3><p>Share PDF or CAD drawings on WhatsApp or email. Our estimators return a detailed, measured BOQ within two working days.</p></div><div class="u-band-b"><a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20would%20like%20a%20BOQ%20for%20civil%20works.%20I%20will%20share%20drawings%20here." target=_blank rel=noopener class="pill sun">Send on WhatsApp <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a><a href="mailto:info@sunfitgc.com?subject=Drawings%20for%20civil%20works%20BOQ" target=_blank rel=noopener class="pill ghost">Email drawings <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div></div>
</section>

<section class="sec s5-faqsec" id="faq" style="padding-top:40px">
  <div class="wrap s5-faq">
    <div>
      <span class="eyebrow" data-r="up"><i></i>FAQ</span>
      <h2 class="h-lg lines" style="margin:18px 0 30px"><span class="ln"><span>Questions about</span></span><span class="ln"><span><span class="hl">civil works?</span></span></span></h2>
      <div class="faq s5-faqlist" data-r="up"><details open><summary>Do you handle authority approvals for civil works?<i></i></summary><div class="ans"><p>Yes. We coordinate with your consultant for municipality and authority inspections and prepare the required site documentation.</p></div></details><details><summary>Can you start with excavation only and continue later?<i></i></summary><div class="ans"><p>Yes. Civil works can be awarded in packages — earthworks, substructure or superstructure — depending on your project stage.</p></div></details><details><summary>How do you control concrete and backfill quality?<i></i></summary><div class="ans"><p>We follow approved mix designs, carry out cube and compaction tests through approved labs, and share all reports with you.</p></div></details><details><summary>Do you take on external works for existing buildings?<i></i></summary><div class="ans"><p>Yes, we regularly handle paving, boundary walls, drainage and landscaping bases for completed buildings.</p></div></details></div>
    </div>
    <aside class="s5-aside">
      <div class="s5-testi" data-r="up"><div class="stars">★★★★★</div><p>“Sunfit handled our commercial building from foundations to finishing. One team, one schedule — and they actually finished on time.”</p><div class="who"><img src="{{ asset('images/a1.webp') }}" alt=""><div><b>Client Name</b><span>Commercial Developer</span></div></div></div>
      <div class="s5-help" data-r="up" style="--dl:.1s"><h3>Need expert advice?</h3><p>Speak directly with our civil works team.</p>
        <a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i>+971 00 000 0000</a>
        <a href="mailto:info@sunfitgc.com"><i><svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg></i>info@sunfitgc.com</a>
        <a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i>Chat on WhatsApp</a></div>
    </aside>
  </div>
</section>

<section class="sec" style="padding-top:20px;padding-bottom:40px">
  <div class="wrap">
    <div class="c-proms-head" data-r="up"><span class="c-seal"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg></span><div><span class="eyebrow"><i></i>The Sunfit promise</span><h3>What every client gets — on every project.</h3></div></div>
    <div class="c-proms"><div class="c-prom" data-r="up" style="--dl:0.0s"><i><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h4"/></svg></i><h4>Written quotation</h4><p>Detailed BOQ before any work starts — no verbal estimates.</p></div><div class="c-prom" data-r="up" style="--dl:0.08s"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></svg></i><h4>Dedicated project manager</h4><p>One person accountable for your project from day one.</p></div><div class="c-prom" data-r="up" style="--dl:0.16s"><i><svg viewBox="0 0 24 24"><rect x="3" y="6" width="18" height="14" rx="2"/><circle cx="12" cy="13" r="3.5"/><path d="M8 6l2-3h4l2 3"/></svg></i><h4>Weekly photo updates</h4><p>See progress every week, even when you're not on site.</p></div><div class="c-prom" data-r="up" style="--dl:0.24s"><i><svg viewBox="0 0 24 24"><path d="M9 11l3 3 8-8"/><path d="M20 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></i><h4>Handover checklist</h4><p>Snagging walkthrough and full documents at completion.</p></div></div>
  </div>
</section>

<section class="sec" id="quote" style="padding-top:20px">
  <div class="wrap">
    <div class="s5-quote" data-r="up">
      <div class="s5-quote-l">
        <span class="eyebrow"><i></i>Free estimate</span>
        <h2>Get a quote for your civil works</h2>
        <p>Send your drawings or book a free site visit. Our engineers reply within 24 hours.</p>
        <ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Free, no-obligation site visit</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Detailed BOQ-based quotation</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Clear timeline before work starts</li></ul>
      </div>
      <form class="qform s5-form" data-email="info@sunfitgc.com">
        <input type="hidden" name="svc" value="Civil Works">
        <input name="Name" placeholder="Full name*" required aria-label="Full name">
        <input name="Phone" type="tel" placeholder="Phone*" required aria-label="Phone">
        <input name="Email" type="email" placeholder="Email*" required aria-label="Email" class="full">
        <textarea name="Message" placeholder="Tell us about your project" aria-label="Project details" class="full"></textarea>
        <div class="full"><button type="submit" class="pill">Send Request <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></div>
        <p class="form-note">Your email app has opened with the message ready — just press send.</p>
      </form>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:20px">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>More services</span>
      <h2 class="h-lg lines"><span class="ln"><span>Related <span class="hl">services.</span></span></span></h2></div>
      <a href="{{ route('services') }}" class="pill ghost" data-r="up" style="justify-self:end">All Services</a></div>
    <div class="s5-rels"><a href="{{ route('services.civil-works') }}" class="s5-rel" data-r="up" style="--dl:0.0s"><div class="s5-rel-img"><img src="{{ asset('images/civil.webp') }}" alt="Civil Works"><span>01</span></div>
      <div class="s5-rel-b"><h3>Civil Works</h3><p>Site preparation, excavation, foundations, roads and external works delivered to spec and on schedule.</p><span class="s5-more">View service <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></div></a><a href="{{ route('services.structural-works') }}" class="s5-rel" data-r="up" style="--dl:0.1s"><div class="s5-rel-img"><img src="{{ asset('images/structural.webp') }}" alt="Structural Works"><span>02</span></div>
      <div class="s5-rel-b"><h3>Structural Works</h3><p>Reinforced concrete, steel structures and structural strengthening built for safety and long life.</p><span class="s5-more">View service <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></div></a><a href="{{ route('services.electrical-works') }}" class="s5-rel" data-r="up" style="--dl:0.2s"><div class="s5-rel-img"><img src="{{ asset('images/electrical.webp') }}" alt="Electrical Works"><span>03</span></div>
      <div class="s5-rel-b"><h3>Electrical Works</h3><p>Complete LV installations — power, lighting, DB panels, ELV and testing & commissioning.</p><span class="s5-more">View service <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></div></a></div>
  </div>
</section>
<div class="lb" aria-hidden="true"><span class="lb-count">1 / 1</span><button class="lb-close" aria-label="Close">&times;</button><button class="lb-btn lb-prev" aria-label="Previous"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></button><figure><img src="" alt=""><figcaption><span></span><b></b></figcaption></figure><button class="lb-btn lb-next" aria-label="Next"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></button></div>
</main>

<div class="c-sticky" aria-hidden="true">
  <div class="c-sticky-in">
    <img src="{{ asset('images/civil.webp') }}" alt="">
    <div class="c-sticky-t"><b>Civil Works</b><span><span class="dot"></span>BOQ from your drawings in 48 hrs</span></div>
    <a href="https://wa.me/971000000000" target="_blank" rel="noopener" class="c-sticky-wa" aria-label="WhatsApp"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.2-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.1 5.1 0 0 0 1.1 2.7 11.6 11.6 0 0 0 4.4 3.9c1.6.7 2.3.8 3.1.6a2.7 2.7 0 0 0 1.8-1.2 2.2 2.2 0 0 0 .1-1.2c0-.1-.2-.2-.4-.3z"/></svg></a>
    <a href="#wizard" class="pill sun">Get a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
  </div>
</div>
<div class="c-mbar"><a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i>Call</a><a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i>WhatsApp</a><a href="#wizard" class="mq">Free Quote</a></div>
<div class="c-pop" role="dialog" aria-modal="true" aria-labelledby="cpopt">
  <div class="c-pop-box">
    <button class="c-pop-x" aria-label="Close">&times;</button>
    <div class="c-pop-img"><img src="{{ asset('images/helmet.webp') }}" alt=""><span class="c-pop-badge">FREE</span></div>
    <div class="c-pop-b">
      <span class="eyebrow"><i></i>Before you go</span>
      <h3 id="cpopt">Send us your drawings</h3>
      <p>Get a detailed BOQ for your civil works within 48 hours.</p>
      <form class="c-pop-f"><input name="Name" placeholder="Your name" required aria-label="Your name"><input name="Phone" type="tel" placeholder="Phone / WhatsApp" required aria-label="Phone"><button class="pill sun" type="submit">Call Me Back <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></form>
      <small>We never share your details.</small>
    </div>
  </div>
</div>
@endsection
