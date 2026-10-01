@extends('layouts.app')

@section('title')
Plumbing Works | Sunfit General Contracting
@endsection

@section('description')
Water supply, drainage, sanitary fixtures, pumps and water heaters — leak-free and tested.
@endsection

@section('content')
<div class="d-progress"><i></i></div><main id="top" class="s5 sv-plumbing">
<section class="s5-hero">
  <div class="s5-hero-bg" data-parallax><img src="{{ asset('images/plumbing.webp') }}" alt=""></div>
  <div class="wrap s5-hero-in">
    <div class="sv-crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><i></i><a href="{{ route('services') }}">Services</a><i></i><b>Plumbing Works</b></div>
    <span class="s5-tag" data-r="up"><em>05</em>Plumbing specialists</span>
    <h1 class="lines"><span class="ln"><span>Plumbing Works</span></span></h1>
    <p data-r="up" style="--dl:.2s">Water supply, drainage, sanitary fixtures, pumps and water heaters — leak-free and tested.</p>
    <div class="s5-hero-act" data-r="up" style="--dl:.3s"><a href="#problems" class="pill sun">Report a Leak Now <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a><a href="#problems" class="s5-link">Find your problem <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div>
    <div class="c-trust" data-r="up" style="--dl:.4s">
      <div class="c-faces"><img src="{{ asset('images/a1.webp') }}" alt=""><img src="{{ asset('images/a2.webp') }}" alt=""><img src="{{ asset('images/a3.webp') }}" alt=""><img src="{{ asset('images/a4.webp') }}" alt=""></div>
      <div><div class="c-stars">★★★★★ <b>5.0</b></div><span>Rated by developers &amp; businesses</span></div>
      <div class="c-sep"></div>
      <div class="c-live"><span class="dot"></span>Replies within 24 hours</div>
    </div>
  </div>
</section>
<div class="wrap s5-bar-wrap"><div class="s5-bar" data-r="up"><a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Every line</small><b>Pressure-tested</b></span></a><a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i><span><small>Fast diagnosis</small><b>Leak detection</b></span></a><a href="#quote"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><span><small>PPR / CPVC / uPVC</small><b>Certified materials</b></span></a><a href="#wizard"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></i><span><small>Book online</small><b>Same-week visits</b></span></a></div></div>

<section style="padding:26px 0 0" id="urgent">
  <div class="wrap"><div class="u-urgent" data-r="up">
    <span class="u-urgent-i"><svg viewBox="0 0 24 24"><path d="M12 2.7s-6 6.3-6 11.3a6 6 0 0 0 12 0c0-5-6-11.3-6-11.3z"/></svg></span>
    <div><b>Leak, blockage or no water right now?</b><span>Call or WhatsApp — we'll prioritise urgent plumbing problems.</span></div>
    <a href="tel:+971000000000" class="pill">Call Now <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
    <a href="https://wa.me/971000000000?text=URGENT%20plumbing%20problem%3A%20" target="_blank" rel="noopener" class="pill sun">WhatsApp <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
  </div></div>
</section>

<section class="sec u-pick-sec" id="problems">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Common problems</span>
      <h2 class="h-lg lines"><span class="ln"><span>What's the</span></span><span class="ln"><span><span class="hl">problem?</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Pick the issue you're facing to see the likely cause and how we fix it.</p></div>
    <div class="u-pick" data-r="up"><div class="u-tabs"><button class="u-tab on" data-i="0"><i><svg viewBox="0 0 24 24"><circle cx="9" cy="13" r="6"/><path d="M9 10v3l2 2M15 13h6M18 10v6"/></svg></i>Low water pressure</button><button class="u-tab" data-i="1"><i><svg viewBox="0 0 24 24"><path d="M12 2.7s-6 6.3-6 11.3a6 6 0 0 0 12 0c0-5-6-11.3-6-11.3z"/></svg></i>Hidden leaks</button><button class="u-tab" data-i="2"><i><svg viewBox="0 0 24 24"><path d="M3 7h8a3 3 0 0 1 3 3v11M3 11h6a1 1 0 0 1 1 1v9M3 5v8M14 21h4"/></svg></i>Blocked drains</button><button class="u-tab" data-i="3"><i><svg viewBox="0 0 24 24"><path d="M12 22c4 0 7-3 7-7 0-5-5-7-5-12-3 2-5 5-5 8-1-1-2-2-2-4-2 2-2 5-2 8 0 4 3 7 7 7z"/></svg></i>No hot water</button><button class="u-tab" data-i="4"><i><svg viewBox="0 0 24 24"><path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0zM12 9v4M12 17h.01"/></svg></i>Bad smells</button></div><div class="u-panes"><div class="u-pane on"><div class="u-pane-img"><img src="{{ asset('images/plumbing.webp') }}" alt="Low water pressure"></div><div class="u-pane-b">
              <span class="u-pane-k">Likely cause</span><p>Undersized pipes, a failing booster pump or partly closed valves.</p>
              <span class="u-pane-k">How we fix it</span><p>Pressure test, pump check and re-sizing or valve repair as needed.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20have%20a%20plumbing%20problem%3A%20Low%20water%20pressure" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I have a plumbing problem: Low water pressure">Fix this for me <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g4.webp') }}" alt="Hidden leaks"></div><div class="u-pane-b">
              <span class="u-pane-k">Likely cause</span><p>Failed joints or damaged pipes inside walls or under floors.</p>
              <span class="u-pane-k">How we fix it</span><p>Leak detection, targeted opening and pressure-tested repair.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20have%20a%20plumbing%20problem%3A%20Hidden%20leaks" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I have a plumbing problem: Hidden leaks">Fix this for me <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g7.webp') }}" alt="Blocked drains"></div><div class="u-pane-b">
              <span class="u-pane-k">Likely cause</span><p>Grease, debris or incorrect falls in drainage lines.</p>
              <span class="u-pane-k">How we fix it</span><p>Jetting, camera inspection and correcting falls where needed.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20have%20a%20plumbing%20problem%3A%20Blocked%20drains" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I have a plumbing problem: Blocked drains">Fix this for me <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/offer2.webp') }}" alt="No hot water"></div><div class="u-pane-b">
              <span class="u-pane-k">Likely cause</span><p>Heater element, thermostat or circulation failure.</p>
              <span class="u-pane-k">How we fix it</span><p>Diagnosis and repair or replacement of the water heater.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20have%20a%20plumbing%20problem%3A%20No%20hot%20water" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I have a plumbing problem: No hot water">Fix this for me <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g9.webp') }}" alt="Bad smells"></div><div class="u-pane-b">
              <span class="u-pane-k">Likely cause</span><p>Dry traps, missing vents or broken seals.</p>
              <span class="u-pane-k">How we fix it</span><p>Trap and vent checks, resealing and venting fixes.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20have%20a%20plumbing%20problem%3A%20Bad%20smells" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I have a plumbing problem: Bad smells">Fix this for me <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div></div></div>
  </div>
</section>

<section class="sec s5-intro" id="overview">
  <div class="wrap s5-split">
    <div class="s5-imgs">
      <div class="s5-im1" data-r="clip"><img src="{{ asset('images/plumbing.webp') }}" alt="Plumbing Works"></div>
      <div class="s5-im2" data-r="clip" style="--dl:.25s"><img src="{{ asset('images/g4.webp') }}" alt="Lakeside Building"></div>
      <div class="s5-badge" data-r="scale" style="--dl:.4s"><b><span data-count="15">0</span>+</b><small>Years of<br>experience</small></div>
    </div>
    <div>
      <span class="eyebrow" data-r="up"><i></i>Service overview</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Professional plumbing works</span></span><span class="ln"><span>you can <span class="hl">rely on.</span></span></span></h2>
      <p class="s5-lead" data-r="up">Good plumbing is invisible — until it goes wrong. Our Plumbing Works team installs water supply, drainage and sanitary systems that are properly sized, pressure-tested and built to last.</p>
      <p class="muted" data-r="up">Whether it is a new commercial building, an office or a washroom renovation, we deliver clean, leak-free installations that pass inspection the first time.</p>
      <div class="s5-feats" data-r="up"><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Leak-free</b><span>Every line tested before it disappears behind a wall.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Good pressure</b><span>Pumps and pipe sizes matched to real demand.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Easy maintenance</b><span>Access points and valves where you need them.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Hygienic</b><span>Flushed, clean systems ready for daily use.</span></div></div></div>
      <div class="s5-act" data-r="up"><a href="#quote" class="pill">Request a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
        <a href="tel:+971000000000" class="s5-call"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Call us anytime</small><b>+971 00 000 0000</b></span></a></div>
    </div>
  </div>
</section>

<section class="sec s5-scope" id="scope">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Scope of work</span>
      <h2 class="h-lg lines"><span class="ln"><span>What's included</span></span><span class="ln"><span>in our <span class="hl">package.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Each area below can be awarded on its own or combined with our other trades into one turnkey contract.</p></div>
    <div class="s5-cards"><div class="s5-card" data-r="up" style="--dl:0.0s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M12 2.7s-6 6.3-6 11.3a6 6 0 0 0 12 0c0-5-6-11.3-6-11.3z"/><path d="M9 15a3 3 0 0 0 3 3"/></svg></i><span>01</span></div>
      <h3>Water Supply Systems</h3><p>PPR/CPVC pipework, tanks, booster pumps and water-heater connections.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.1s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M12 2.7s-6 6.3-6 11.3a6 6 0 0 0 12 0c0-5-6-11.3-6-11.3z"/><path d="M9 15a3 3 0 0 0 3 3"/></svg></i><span>02</span></div>
      <h3>Drainage & Sewerage</h3><p>uPVC soil, waste and vent lines, manholes and connections to the main.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.2s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M12 2.7s-6 6.3-6 11.3a6 6 0 0 0 12 0c0-5-6-11.3-6-11.3z"/><path d="M9 15a3 3 0 0 0 3 3"/></svg></i><span>03</span></div>
      <h3>Sanitary Fixtures</h3><p>Installation of WCs, basins, showers, mixers and kitchen sinks.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.30000000000000004s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M12 2.7s-6 6.3-6 11.3a6 6 0 0 0 12 0c0-5-6-11.3-6-11.3z"/><path d="M9 15a3 3 0 0 0 3 3"/></svg></i><span>04</span></div>
      <h3>Pumps & Water Heaters</h3><p>Transfer and booster pumps, solar and electric water heaters.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div></div>
    <div class="s5-offs"><div class="s5-off" data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer1.webp') }}" alt="Pressure & Leak Testing"><div><span class="s5-free">Included</span><h4>Pressure & Leak Testing</h4><p>Every line tested before it is closed up behind walls and ceilings.</p></div></div><div class="s5-off" data-r="up" style="--dl:0.1s"><img src="{{ asset('images/offer2.webp') }}" alt="Repair & Upgrade Works"><div><span class="s5-free">Included</span><h4>Repair & Upgrade Works</h4><p>Fixing leaks, low pressure and blocked drains in existing buildings.</p></div></div></div>
  </div>
</section>

<div class="dark-wrap dark s5-why">
<section class="sec">
  <div class="wrap s5-split rev">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Why it matters</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Quality that holds up</span></span><span class="ln"><span><span class="hl">for decades.</span></span></span></h2>
      <p class="s5-lead light" data-r="up">A hidden leak can damage ceilings, finishes and furniture long before anyone notices. Correct pipe sizing, proper falls on drainage and pressure testing before walls are closed are what make a plumbing system trouble-free.</p>
      <h4 class="s5-sub" data-r="up">Quality standards we follow</h4>
      <ul class="s5-std"><li data-r="up" style="--dl:0.0s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Pipe sizing to the fixture schedule</li><li data-r="up" style="--dl:0.06s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Every supply line pressure-tested before concealing</li><li data-r="up" style="--dl:0.12s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Drainage flow-tested with correct falls</li><li data-r="up" style="--dl:0.18s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Only approved, certified materials</li><li data-r="up" style="--dl:0.24s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>System flushed and cleaned before handover</li></ul>
    </div>
    <div class="s5-why-media">
      <div class="s5-why-img" data-r="clip"><img src="{{ asset('images/g7.webp') }}" alt="Mixed-Use Block"></div>
      <div class="s5-why-card" data-r="up" style="--dl:.3s"><span class="eyebrow"><i></i>Materials &amp; systems</span>
        <div class="s5-tags"><span>PPR / CPVC pipes</span><span>uPVC drainage</span><span>Booster & transfer pumps</span><span>Water tanks</span><span>Solar & electric heaters</span><span>Sanitary ware & mixers</span></div></div>
    </div>
  </div>
</section>
</div>

<section class="sec s5-proc" id="process">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Work process</span>
      <h2 class="h-lg lines"><span class="ln"><span>How we deliver</span></span><span class="ln"><span><span class="hl">your project.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">A simple, transparent sequence for every plumbing works job — so you always know what's happening on site.</p></div>
    <div class="s5-steps" data-r="up"><span class="s5-line"><i></i></span><div class="s5-step" style="--i:0"><div class="s5-dot"><span>01</span></div><h3>Design & Material Planning</h3><p>We confirm fixture schedules, pipe sizing and routes.</p></div><div class="s5-step" style="--i:1"><div class="s5-dot"><span>02</span></div><h3>Installation & First Fix</h3><p>Neat pipe routing, sleeves and supports before plaster and tiling.</p></div><div class="s5-step" style="--i:2"><div class="s5-dot"><span>03</span></div><h3>Testing, Second Fix & Handover</h3><p>Pressure tests, fixture installation and final flushing.</p></div><div class="s5-step" style="--i:3"><div class="s5-dot"><span>04</span></div><h3>Handover &amp; Support</h3><p>As-built documents, test reports and support after handover.</p></div></div>
  </div>
</section>

<section class="sec" style="padding-top:10px">
  <div class="wrap">
    <div class="c-visit" data-r="up">
      <div class="c-visit-ic"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18M9 16l2 2 4-4"/></svg></div>
      <div class="c-visit-t"><h3>Book a free site visit</h3><p>Pick a day and time — our engineer will confirm on WhatsApp.</p></div>
      <div class="c-visit-pick"><div class="c-chips"><label class="c-chip"><input type="radio" name="vday" value="Mon" checked><span>Mon</span></label><label class="c-chip"><input type="radio" name="vday" value="Tue"><span>Tue</span></label><label class="c-chip"><input type="radio" name="vday" value="Wed"><span>Wed</span></label><label class="c-chip"><input type="radio" name="vday" value="Thu"><span>Thu</span></label><label class="c-chip"><input type="radio" name="vday" value="Fri"><span>Fri</span></label><label class="c-chip"><input type="radio" name="vday" value="Sat"><span>Sat</span></label></div><div class="c-chips"><label class="c-chip"><input type="radio" name="vtime" value="Morning" checked><span>Morning</span></label><label class="c-chip"><input type="radio" name="vtime" value="Afternoon"><span>Afternoon</span></label><label class="c-chip"><input type="radio" name="vtime" value="Evening"><span>Evening</span></label></div></div>
      <a href="#" class="pill c-visit-go" target="_blank" rel="noopener">Book Visit <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
    </div>
  </div>
</section>

<section class="sec s5-galsec" id="gallery" style="padding-top:40px">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Project gallery</span>
      <h2 class="h-lg lines"><span class="ln"><span>Recent plumbing works</span></span><span class="ln"><span><span class="hl">on site.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Tap any photo to view it full size.</p></div>
    <div class="sgal s5-gal"><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/plumbing.webp') }}" alt="Plumbing Works"><figcaption><span>Plumbing Works</span><b>Plumbing Works</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/g4.webp') }}" alt="Lakeside Building"><figcaption><span>Plumbing Works</span><b>Lakeside Building</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g7.webp') }}" alt="Mixed-Use Block"><figcaption><span>Plumbing Works</span><b>Mixed-Use Block</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/offer1.webp') }}" alt="Plumbing Works project"><figcaption><span>Plumbing Works</span><b>Plumbing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer2.webp') }}" alt="Plumbing Works project"><figcaption><span>Plumbing Works</span><b>Plumbing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/g6.webp') }}" alt="Plumbing Works project"><figcaption><span>Plumbing Works</span><b>Plumbing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g8.webp') }}" alt="Plumbing Works project"><figcaption><span>Plumbing Works</span><b>Plumbing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g9.webp') }}" alt="Plumbing Works project"><figcaption><span>Plumbing Works</span><b>Plumbing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure></div>
  </div>
</section>

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

<section class="sec s5-faqsec" id="faq" style="padding-top:40px">
  <div class="wrap s5-faq">
    <div>
      <span class="eyebrow" data-r="up"><i></i>FAQ</span>
      <h2 class="h-lg lines" style="margin:18px 0 30px"><span class="ln"><span>Questions about</span></span><span class="ln"><span><span class="hl">plumbing works?</span></span></span></h2>
      <div class="faq s5-faqlist" data-r="up"><details open><summary>What pipe materials do you use?<i></i></summary><div class="ans"><p>We typically use PPR or CPVC for water supply and uPVC for drainage, as per the approved specification.</p></div></details><details><summary>Do you pressure test before closing walls?<i></i></summary><div class="ans"><p>Always. Every water line is pressure-tested and every drainage line is flow-tested before it is concealed.</p></div></details><details><summary>Can you fix low water pressure in my building?<i></i></summary><div class="ans"><p>Yes. We diagnose the cause — pump, tank, pipe size or blockage — and recommend the right fix.</p></div></details><details><summary>Do you supply sanitary ware as well?<i></i></summary><div class="ans"><p>We can supply and install sanitary ware, or install fixtures you have purchased yourself.</p></div></details></div>
    </div>
    <aside class="s5-aside">
      <div class="s5-testi" data-r="up"><div class="stars">★★★★★</div><p>“Electrical and plumbing works were neat, tested and fully documented. Inspection passed on the first visit.”</p><div class="who"><img src="{{ asset('images/a3.webp') }}" alt=""><div><b>Client Name</b><span>Building Owner</span></div></div></div>
      <div class="s5-help" data-r="up" style="--dl:.1s"><h3>Need expert advice?</h3><p>Speak directly with our plumbing works team.</p>
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
        <h2>Get a quote for your plumbing works</h2>
        <p>Send your drawings or book a free site visit. Our engineers reply within 24 hours.</p>
        <ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Free, no-obligation site visit</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Detailed BOQ-based quotation</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Clear timeline before work starts</li></ul>
      </div>
      <form class="qform s5-form" data-email="info@sunfitgc.com">
        <input type="hidden" name="svc" value="Plumbing Works">
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
    <img src="{{ asset('images/plumbing.webp') }}" alt="">
    <div class="c-sticky-t"><b>Plumbing Works</b><span><span class="dot"></span>Leak, pressure or drainage problem?</span></div>
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
      <h3 id="cpopt">Leak or low pressure?</h3>
      <p>Tell us the problem — a plumbing engineer will call you back today.</p>
      <form class="c-pop-f"><input name="Name" placeholder="Your name" required aria-label="Your name"><input name="Phone" type="tel" placeholder="Phone / WhatsApp" required aria-label="Phone"><button class="pill sun" type="submit">Call Me Back <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></form>
      <small>We never share your details.</small>
    </div>
  </div>
</div>
@endsection
