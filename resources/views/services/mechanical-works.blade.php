@extends('layouts.app')

@section('title')
Mechanical Works | Sunfit General Contracting
@endsection

@section('description')
HVAC, ventilation, ducting, chilled water and fire-fighting systems installed and balanced.
@endsection

@section('content')
<div class="d-progress"><i></i></div><main id="top" class="s5 sv-mechanical">
<section class="u-hero u-hero-split">
  <div class="wrap u-hero-grid">
    <div class="u-hero-t">
    <div class="sv-crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><i></i><a href="{{ route('services') }}">Services</a><i></i><b>Mechanical Works</b></div>
    <span class="s5-tag" data-r="up"><em>04</em>Mechanical specialists</span>
    <h1 class="lines"><span class="ln"><span>Mechanical Works</span></span></h1>
    <p data-r="up" style="--dl:.2s">HVAC, ventilation, ducting, chilled water and fire-fighting systems installed and balanced.</p>
    <div class="s5-hero-act" data-r="up" style="--dl:.3s"><a href="#estimator" class="pill sun">Estimate My AC Size <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a><a href="#amc" class="s5-link">See AMC plans <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div>
    <div class="c-trust" data-r="up" style="--dl:.4s">
      <div class="c-faces"><img src="{{ asset('images/a1.webp') }}" alt=""><img src="{{ asset('images/a2.webp') }}" alt=""><img src="{{ asset('images/a3.webp') }}" alt=""><img src="{{ asset('images/a4.webp') }}" alt=""></div>
      <div><div class="c-stars">★★★★★ <b>5.0</b></div><span>Rated by developers &amp; businesses</span></div>
      <div class="c-sep"></div>
      <div class="c-live"><span class="dot"></span>Replies within 24 hours</div>
    </div>
    </div>
    <div class="u-hero-m">
      <div class="u-hm1" data-r="clip"><img src="{{ asset('images/mechanical.webp') }}" alt="Mechanical Works"></div>
      <div class="u-hm2" data-r="scale" style="--dl:.35s"><img src="{{ asset('images/g11.webp') }}" alt=""></div>
      <div class="u-hchip" data-r="up" style="--dl:.5s"><i><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="9" rx="2"/><path d="M6 10h12M7 18l-1 2M12 18v3M17 18l1 2"/></svg></i><span><small>Right-sized units</small><b>Heat-load based design</b></span></div>
    </div>
  </div>
</section>
<div class="wrap s5-bar-wrap u-bar-flat"><div class="s5-bar" data-r="up"><a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Right-sized units</small><b>Heat-load based design</b></span></a><a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i><span><small>All systems</small><b>VRF / ducted / split</b></span></a><a href="#quote"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><span><small>Civil defence ready</small><b>Fire-fighting</b></span></a><a href="#wizard"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></i><span><small>Year-round care</small><b>AMC plans</b></span></a></div></div>

<section class="sec s5-intro" id="overview">
  <div class="wrap s5-split">
    <div class="s5-imgs">
      <div class="s5-im1" data-r="clip"><img src="{{ asset('images/mechanical.webp') }}" alt="Mechanical Works"></div>
      <div class="s5-im2" data-r="clip" style="--dl:.25s"><img src="{{ asset('images/g11.webp') }}" alt="HVAC Plant &amp; Ducting"></div>
      <div class="s5-badge" data-r="scale" style="--dl:.4s"><b><span data-count="15">0</span>+</b><small>Years of<br>experience</small></div>
    </div>
    <div>
      <span class="eyebrow" data-r="up"><i></i>Service overview</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Professional mechanical works</span></span><span class="ln"><span>you can <span class="hl">rely on.</span></span></span></h2>
      <p class="s5-lead" data-r="up">Comfort and safety depend on well-built mechanical systems. Our Mechanical Works team supplies, installs and commissions HVAC, ventilation and fire-fighting systems that perform efficiently in the region's demanding climate.</p>
      <p class="muted" data-r="up">We coordinate closely with civil, electrical and interior trades so that ducts, pipes and equipment fit cleanly within the ceiling and plant spaces — without costly rework.</p>
      <div class="s5-feats" data-r="up"><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Real comfort</b><span>Even cooling and fresh air in every room.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Lower bills</b><span>Right-sized, efficient equipment that isn't over-worked.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Quiet running</b><span>Balanced airflow and properly supported ducts.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Fire-safe</b><span>Fire-fighting systems installed to approved drawings.</span></div></div></div>
      <div class="s5-act" data-r="up"><a href="#quote" class="pill">Request a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
        <a href="tel:+971000000000" class="s5-call"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Call us anytime</small><b>+971 00 000 0000</b></span></a></div>
    </div>
  </div>
</section>

<section class="sec u-est-sec" id="estimator">
  <div class="wrap u-check-grid">
    <div>
      <span class="eyebrow" data-r="up"><i></i>AC size estimator</span>
      <h2 class="h-lg lines" style="margin:18px 0 18px"><span class="ln"><span>How much cooling</span></span><span class="ln"><span>do you <span class="hl">need?</span></span></span></h2>
      <p class="muted" data-r="up">Enter your floor area to get a rough cooling capacity. It's a starting point only — we confirm the final size with a proper heat-load calculation, free of charge.</p>
    </div>
    <div class="u-est" data-r="up">
      <label class="u-est-l">Floor area (m²)<span class="u-area-v">200 m²</span></label>
      <input type="range" class="u-area" min="20" max="3000" step="10" value="200" aria-label="Floor area in square metres">
      <label class="u-est-l" style="margin-top:22px">Type of space</label>
      <div class="c-chips u-etypes"><label class="c-chip"><input type="radio" name="etype" value="20" data-name="Office" checked><span>Office</span></label><label class="c-chip"><input type="radio" name="etype" value="18" data-name="Retail / showroom"><span>Retail / showroom</span></label><label class="c-chip"><input type="radio" name="etype" value="13" data-name="Restaurant / kitchen"><span>Restaurant / kitchen</span></label><label class="c-chip"><input type="radio" name="etype" value="30" data-name="Warehouse"><span>Warehouse</span></label><label class="c-chip"><input type="radio" name="etype" value="16" data-name="Clinic / gym"><span>Clinic / gym</span></label></div>
      <div class="u-est-out"><div><small>Estimated capacity</small><b class="u-tr">~10 TR</b><span class="u-trr">9–11 tons of refrigeration</span></div>
        <a href="https://wa.me/971000000000" target="_blank" rel="noopener" class="pill sun u-est-go">Get Exact Heat Load <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div>
      <p class="u-note">Rule-of-thumb estimate for the UAE climate. Actual needs depend on glazing, occupancy and equipment.</p>
    </div>
  </div>
</section>

<section class="sec s5-scope" id="scope">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Scope of work</span>
      <h2 class="h-lg lines"><span class="ln"><span>What's included</span></span><span class="ln"><span>in our <span class="hl">package.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Each area below can be awarded on its own or combined with our other trades into one turnkey contract.</p></div>
    <div class="s5-cards"><div class="s5-card" data-r="up" style="--dl:0.0s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v3M12 20v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M1 12h3M20 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></i><span>01</span></div>
      <h3>HVAC Installation</h3><p>Split, ducted, VRF/VRV and package units selected for the space and load.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.1s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v3M12 20v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M1 12h3M20 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></i><span>02</span></div>
      <h3>Ducting & Ventilation</h3><p>GI ductwork, insulation, fresh-air and kitchen/toilet exhaust systems.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.2s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v3M12 20v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M1 12h3M20 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></i><span>03</span></div>
      <h3>Chilled Water & Piping</h3><p>Chilled-water pipework, valves, insulation and pressure testing.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.30000000000000004s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v3M12 20v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M1 12h3M20 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg></i><span>04</span></div>
      <h3>Fire-Fighting Systems</h3><p>Sprinklers, hose reels, fire pumps and pipework to civil-defence standards.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div></div>
    <div class="s5-offs"><div class="s5-off" data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer1.webp') }}" alt="Heat Load & Equipment Selection"><div><span class="s5-free">Included</span><h4>Heat Load & Equipment Selection</h4><p>Right-sized equipment for lower running costs and better comfort.</p></div></div><div class="s5-off" data-r="up" style="--dl:0.1s"><img src="{{ asset('images/offer2.webp') }}" alt="Annual Maintenance Contracts"><div><span class="s5-free">Included</span><h4>Annual Maintenance Contracts</h4><p>Scheduled servicing to keep systems efficient and compliant.</p></div></div></div>
  </div>
</section>

<section class="sec u-plans-sec" id="amc">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Annual maintenance</span>
      <h2 class="h-lg lines"><span class="ln"><span>Keep systems</span></span><span class="ln"><span><span class="hl">running efficiently.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Regular servicing lowers energy bills, prevents breakdowns and extends equipment life.</p></div>
    <div class="u-plans"><div class="u-plan" data-r="up" style="--dl:0.0s">
              <h3>Basic AMC</h3><p>Essential servicing for small offices and shops.</p><ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>2 preventive visits / year</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Filter &amp; coil cleaning</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Gas pressure check</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Service report</li></ul><a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20am%20interested%20in%3A%20Basic%20AMC%20%28Mechanical%20Works%29" target="_blank" rel="noopener" class="pill">Request AMC Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div><div class="u-plan hot" data-r="up" style="--dl:0.1s"><span class="u-hot">Most popular</span>
              <h3>Standard AMC</h3><p>Our most popular plan for commercial spaces.</p><ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>4 preventive visits / year</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Deep coil &amp; drain cleaning</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Electrical &amp; thermostat checks</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Priority breakdown response</li></ul><a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20am%20interested%20in%3A%20Standard%20AMC%20%28Mechanical%20Works%29" target="_blank" rel="noopener" class="pill sun">Request AMC Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div><div class="u-plan" data-r="up" style="--dl:0.2s">
              <h3>Premium AMC</h3><p>Full coverage for critical sites.</p><ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Monthly visits</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Breakdown calls included</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Fire-fighting system checks</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Dedicated technician</li></ul><a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20am%20interested%20in%3A%20Premium%20AMC%20%28Mechanical%20Works%29" target="_blank" rel="noopener" class="pill">Request AMC Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
  </div>
</section>

<div class="dark-wrap dark s5-why">
<section class="sec">
  <div class="wrap s5-split rev">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Why it matters</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Quality that holds up</span></span><span class="ln"><span><span class="hl">for decades.</span></span></span></h2>
      <p class="s5-lead light" data-r="up">In the region's climate, HVAC is the system occupants notice most — and the biggest share of the energy bill. Right-sized equipment, sealed ducts and proper balancing mean comfort, lower running costs and longer equipment life.</p>
      <h4 class="s5-sub" data-r="up">Quality standards we follow</h4>
      <ul class="s5-std"><li data-r="up" style="--dl:0.0s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Heat load calculation before equipment selection</li><li data-r="up" style="--dl:0.06s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Duct leakage and pressure testing</li><li data-r="up" style="--dl:0.12s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Chilled-water pipework pressure tested</li><li data-r="up" style="--dl:0.18s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Air balancing report on commissioning</li><li data-r="up" style="--dl:0.24s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Civil defence inspection for fire-fighting</li></ul>
    </div>
    <div class="s5-why-media">
      <div class="s5-why-img" data-r="clip"><img src="{{ asset('images/g5.webp') }}" alt="Office Tower Services"></div>
      <div class="s5-why-card" data-r="up" style="--dl:.3s"><span class="eyebrow"><i></i>Materials &amp; systems</span>
        <div class="s5-tags"><span>Split, VRF & package units</span><span>GI ductwork & insulation</span><span>Chilled-water pipes & valves</span><span>Grilles & diffusers</span><span>Sprinklers & hose reels</span><span>Fire pumps & controllers</span></div></div>
    </div>
  </div>
</section>
</div>

<section class="sec s5-proc" id="process">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Work process</span>
      <h2 class="h-lg lines"><span class="ln"><span>How we deliver</span></span><span class="ln"><span><span class="hl">your project.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">A simple, transparent sequence for every mechanical works job — so you always know what's happening on site.</p></div>
    <div class="s5-steps" data-r="up"><span class="s5-line"><i></i></span><div class="s5-step" style="--i:0"><div class="s5-dot"><span>01</span></div><h3>Heat Load & Design Review</h3><p>We confirm loads, equipment and routing against the drawings.</p></div><div class="s5-step" style="--i:1"><div class="s5-dot"><span>02</span></div><h3>Installation & Coordination</h3><p>Ducts, pipes and units installed in coordination with all trades.</p></div><div class="s5-step" style="--i:2"><div class="s5-dot"><span>03</span></div><h3>Testing, Balancing & Commissioning</h3><p>Pressure tests, air balancing and performance checks before handover.</p></div><div class="s5-step" style="--i:3"><div class="s5-dot"><span>04</span></div><h3>Handover &amp; Support</h3><p>As-built documents, test reports and support after handover.</p></div></div>
  </div>
</section>

<section class="sec c-wiz-sec" id="wizard" style="padding-top:30px">
  <div class="wrap">
    <div class="c-wiz" data-r="up">
      <div class="c-wiz-l">
        <span class="eyebrow" style="color:#fff"><i></i>Free quote in 60 seconds</span>
        <h2>Tell us about your project in 3 quick steps.</h2>
        <p>No commitment. We'll call you back with a site-visit slot and a ballpark budget for your mechanical works.</p>
        <ol class="c-wiz-steps"><li class="on"><span>1</span>Your requirement</li><li><span>2</span>Details &amp; timing</li><li><span>3</span>Your details</li></ol>
        <div class="c-wiz-bar"><i></i></div>
      </div>
      <form class="c-wiz-f" data-email="info@sunfitgc.com" data-svc="Mechanical Works" novalidate>
        <div class="c-pane on" data-step="1"><h3>What do you need?</h3><div class="c-opts"><label class="c-opt"><input type="radio" name="Project type" value="New HVAC installation" checked><span><i><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="9" rx="2"/><path d="M6 10h12M7 18l-1 2M12 18v3M17 18l1 2"/></svg></i>New HVAC installation</span></label><label class="c-opt"><input type="radio" name="Project type" value="AC replacement / upgrade"><span><i><svg viewBox="0 0 24 24"><path d="M12 19V5M5 12l7-7 7 7"/></svg></i>AC replacement / upgrade</span></label><label class="c-opt"><input type="radio" name="Project type" value="Fire-fighting system"><span><i><svg viewBox="0 0 24 24"><path d="M12 22c4 0 7-3 7-7 0-5-5-7-5-12-3 2-5 5-5 8-1-1-2-2-2-4-2 2-2 5-2 8 0 4 3 7 7 7z"/></svg></i>Fire-fighting system</span></label><label class="c-opt"><input type="radio" name="Project type" value="Maintenance contract (AMC)"><span><i><svg viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.4-.6-.6-2.4z"/></svg></i>Maintenance contract (AMC)</span></label></div></div>
        <div class="c-pane" data-step="2"><h3>What type of space?</h3><div class="c-opts two"><label class="c-opt sm"><input type="radio" name="Project stage" value="Office" checked><span>Office</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Retail / showroom"><span>Retail / showroom</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Restaurant / kitchen"><span>Restaurant / kitchen</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Warehouse / industrial"><span>Warehouse / industrial</span></label></div>
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
      <h2 class="h-lg lines"><span class="ln"><span>Recent mechanical works</span></span><span class="ln"><span><span class="hl">on site.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Tap any photo to view it full size.</p></div>
    <div class="sgal s5-gal"><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/mechanical.webp') }}" alt="Mechanical Works"><figcaption><span>Mechanical Works</span><b>Mechanical Works</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/g11.webp') }}" alt="HVAC Plant &amp; Ducting"><figcaption><span>Mechanical Works</span><b>HVAC Plant &amp; Ducting</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g5.webp') }}" alt="Office Tower Services"><figcaption><span>Mechanical Works</span><b>Office Tower Services</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/offer1.webp') }}" alt="Mechanical Works project"><figcaption><span>Mechanical Works</span><b>Mechanical Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer2.webp') }}" alt="Mechanical Works project"><figcaption><span>Mechanical Works</span><b>Mechanical Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/g6.webp') }}" alt="Mechanical Works project"><figcaption><span>Mechanical Works</span><b>Mechanical Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g8.webp') }}" alt="Mechanical Works project"><figcaption><span>Mechanical Works</span><b>Mechanical Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g9.webp') }}" alt="Mechanical Works project"><figcaption><span>Mechanical Works</span><b>Mechanical Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure></div>
  </div>
</section>

<section class="sec s5-faqsec" id="faq" style="padding-top:40px">
  <div class="wrap s5-faq">
    <div>
      <span class="eyebrow" data-r="up"><i></i>FAQ</span>
      <h2 class="h-lg lines" style="margin:18px 0 30px"><span class="ln"><span>Questions about</span></span><span class="ln"><span><span class="hl">mechanical works?</span></span></span></h2>
      <div class="faq s5-faqlist" data-r="up"><details open><summary>Which AC systems do you install?<i></i></summary><div class="ans"><p>We install split, ducted, VRF/VRV, package and chilled-water systems, selecting the type that suits your building and budget.</p></div></details><details><summary>Do you handle fire-fighting works and civil defence approval?<i></i></summary><div class="ans"><p>Yes. We install fire-fighting systems to approved drawings and support the civil defence inspection process.</p></div></details><details><summary>Can you replace an old AC system in an occupied building?<i></i></summary><div class="ans"><p>Yes. We plan replacements in phases and out of hours where needed to keep disruption low.</p></div></details><details><summary>Do you offer maintenance after installation?<i></i></summary><div class="ans"><p>Yes, we offer annual maintenance contracts covering cleaning, servicing and breakdown support.</p></div></details></div>
    </div>
    <aside class="s5-aside">
      <div class="s5-testi" data-r="up"><div class="stars">★★★★★</div><p>“Their MEP team coordinated perfectly with the fit-out. Our office opened without a single snag on handover day.”</p><div class="who"><img src="{{ asset('images/a2.webp') }}" alt=""><div><b>Client Name</b><span>Office Fit-Out Client</span></div></div></div>
      <div class="s5-help" data-r="up" style="--dl:.1s"><h3>Need expert advice?</h3><p>Speak directly with our mechanical works team.</p>
        <a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i>+971 00 000 0000</a>
        <a href="mailto:info@sunfitgc.com"><i><svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg></i>info@sunfitgc.com</a>
        <a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i>Chat on WhatsApp</a></div>
    </aside>
  </div>
</section>

<section class="sec" id="quote" style="padding-top:20px">
  <div class="wrap">
    <div class="s5-quote" data-r="up">
      <div class="s5-quote-l">
        <span class="eyebrow"><i></i>Free estimate</span>
        <h2>Get a quote for your mechanical works</h2>
        <p>Send your drawings or book a free site visit. Our engineers reply within 24 hours.</p>
        <ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Free, no-obligation site visit</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Detailed BOQ-based quotation</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Clear timeline before work starts</li></ul>
      </div>
      <form class="qform s5-form" data-email="info@sunfitgc.com">
        <input type="hidden" name="svc" value="Mechanical Works">
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
    <img src="{{ asset('images/mechanical.webp') }}" alt="">
    <div class="c-sticky-t"><b>Mechanical Works</b><span><span class="dot"></span>Free heat-load calculation</span></div>
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
      <h3 id="cpopt">Get the right AC size</h3>
      <p>Free heat-load calculation and equipment recommendation for your space.</p>
      <form class="c-pop-f"><input name="Name" placeholder="Your name" required aria-label="Your name"><input name="Phone" type="tel" placeholder="Phone / WhatsApp" required aria-label="Phone"><button class="pill sun" type="submit">Call Me Back <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></form>
      <small>We never share your details.</small>
    </div>
  </div>
</div>
@endsection
