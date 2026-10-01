@extends('layouts.app')

@section('title')
Structural Works | Sunfit General Contracting
@endsection

@section('description')
Reinforced concrete, steel structures and structural strengthening built for safety and long life.
@endsection

@section('content')
<div class="d-progress"><i></i></div><main id="top" class="s5 sv-structural">
<section class="u-hero u-hero-split">
  <div class="wrap u-hero-grid">
    <div class="u-hero-t">
    <div class="sv-crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><i></i><a href="{{ route('services') }}">Services</a><i></i><b>Structural Works</b></div>
    <span class="s5-tag" data-r="up"><em>02</em>Structural specialists</span>
    <h1 class="lines"><span class="ln"><span>Structural Works</span></span></h1>
    <p data-r="up" style="--dl:.2s">Reinforced concrete, steel structures and structural strengthening built for safety and long life.</p>
    <div class="s5-hero-act" data-r="up" style="--dl:.3s"><a href="#signs" class="pill sun">Book Structural Inspection <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a><a href="#methods" class="s5-link">See strengthening methods <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div>
    <div class="c-trust" data-r="up" style="--dl:.4s">
      <div class="c-faces"><img src="{{ asset('images/a1.webp') }}" alt=""><img src="{{ asset('images/a2.webp') }}" alt=""><img src="{{ asset('images/a3.webp') }}" alt=""><img src="{{ asset('images/a4.webp') }}" alt=""></div>
      <div><div class="c-stars">★★★★★ <b>5.0</b></div><span>Rated by developers &amp; businesses</span></div>
      <div class="c-sep"></div>
      <div class="c-live"><span class="dot"></span>Replies within 24 hours</div>
    </div>
    </div>
    <div class="u-hero-m">
      <div class="u-hm1" data-r="clip"><img src="{{ asset('images/structural.webp') }}" alt="Structural Works"></div>
      <div class="u-hm2" data-r="scale" style="--dl:.35s"><img src="{{ asset('images/g1.webp') }}" alt=""></div>
      <div class="u-hchip" data-r="up" style="--dl:.5s"><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i><span><small>On-site assessment</small><b>Structural inspection</b></span></div>
    </div>
  </div>
</section>
<div class="wrap s5-bar-wrap u-bar-flat"><div class="s5-bar" data-r="up"><a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>On-site assessment</small><b>Structural inspection</b></span></a><a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i><span><small>Qualified team</small><b>Engineer-led</b></span></a><a href="#quote"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><span><small>Documented</small><b>Cube &amp; load tests</b></span></a><a href="#wizard"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></i><span><small>Both covered</small><b>Repair or new-build</b></span></a></div></div>

<section class="sec u-check-sec dark-wrap dark" id="signs">
  <div class="wrap u-check-grid">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Structural self-check</span>
      <h2 class="h-lg lines" style="margin:18px 0 18px"><span class="ln"><span>Warning signs</span></span><span class="ln"><span><span class="hl">to look for.</span></span></span></h2>
      <p class="muted" data-r="up">Select anything you've noticed in your building. Two or more signs usually mean it's time for a professional inspection.</p>
    </div>
    <div class="u-check" data-mode="risk" data-svc="Structural Works" data-l0="No signs selected" data-l1="Low concern" data-l2="Inspection advised" data-l3="Inspect soon" data-l4="Urgent inspection" data-r="up">
      <div class="u-cks"><label class="u-ck"><input type="checkbox" value="Cracks wider than 3 mm" data-w="2"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Cracks wider than 3 mm</span></label><label class="u-ck"><input type="checkbox" value="Rust stains on concrete" data-w="2"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Rust stains on concrete</span></label><label class="u-ck"><input type="checkbox" value="Spalling / falling concrete" data-w="3"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Spalling / falling concrete</span></label><label class="u-ck"><input type="checkbox" value="Sagging slab or beam" data-w="3"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Sagging slab or beam</span></label><label class="u-ck"><input type="checkbox" value="Doors / windows sticking" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Doors / windows sticking</span></label><label class="u-ck"><input type="checkbox" value="Water seepage through slab" data-w="1"><span><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Water seepage through slab</span></label></div>
      <div class="u-res">
        <div class="u-meter"><i></i></div>
        <div class="u-res-t"><small>Your result</small><b class="u-lvl">No signs selected</b></div>
        <a href="https://wa.me/971000000000" target="_blank" rel="noopener" class="pill sun u-go">Book Structural Inspection <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
      </div>
    </div>
  </div>
</section>

<section class="sec s5-intro" id="overview">
  <div class="wrap s5-split">
    <div class="s5-imgs">
      <div class="s5-im1" data-r="clip"><img src="{{ asset('images/structural.webp') }}" alt="Structural Works"></div>
      <div class="s5-im2" data-r="clip" style="--dl:.25s"><img src="{{ asset('images/g1.webp') }}" alt="Commercial Façade"></div>
      <div class="s5-badge" data-r="scale" style="--dl:.4s"><b><span data-count="15">0</span>+</b><small>Years of<br>experience</small></div>
    </div>
    <div>
      <span class="eyebrow" data-r="up"><i></i>Service overview</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Professional structural works</span></span><span class="ln"><span>you can <span class="hl">rely on.</span></span></span></h2>
      <p class="s5-lead" data-r="up">Our Structural Works division builds the frame that everything else depends on. We deliver reinforced concrete and steel structures exactly to the structural engineer's design, with tight control over formwork, rebar and concrete placement.</p>
      <p class="muted" data-r="up">From new-build frames to extensions, mezzanines and strengthening of existing structures, we focus on safety, accuracy and durability at every pour.</p>
      <div class="s5-feats" data-r="up"><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Built to design</b><span>Every element matches the engineer's drawings and specs.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Safety first</b><span>Inspected formwork and trained crews on every pour.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Long service life</b><span>Correct cover and curing for durable concrete.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Documented</b><span>Test results and as-built records for every element.</span></div></div></div>
      <div class="s5-act" data-r="up"><a href="#quote" class="pill">Request a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
        <a href="tel:+971000000000" class="s5-call"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Call us anytime</small><b>+971 00 000 0000</b></span></a></div>
    </div>
  </div>
</section>

<section class="sec u-tiles-sec" id="anatomy">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Anatomy of a structure</span>
      <h2 class="h-lg lines"><span class="ln"><span>Every layer,</span></span><span class="ln"><span><span class="hl">built to design.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">We build and inspect each structural element against the engineer's drawings before the next one starts.</p></div>
    <div class="u-tiles n4"><div class="u-tile" data-r="up" style="--dl:0.0s"><span class="u-tile-n">01</span><i><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21v-6h14v6M8 15V9h8v6M11 9V4h2v5"/></svg></i><h3>Foundations</h3><p>Footings, rafts and pile caps that carry the whole building.</p></div><div class="u-tile" data-r="up" style="--dl:0.08s"><span class="u-tile-n">02</span><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i><h3>Columns &amp; Walls</h3><p>Vertical elements with correct cover, laps and alignment.</p></div><div class="u-tile" data-r="up" style="--dl:0.16s"><span class="u-tile-n">03</span><i><svg viewBox="0 0 24 24"><path d="M4 4h16M4 20h16M12 4v16M8 4v3M16 4v3M8 17v3M16 17v3"/></svg></i><h3>Beams &amp; Slabs</h3><p>Formwork, rebar and concrete placed and cured to spec.</p></div><div class="u-tile" data-r="up" style="--dl:0.24s"><span class="u-tile-n">04</span><i><svg viewBox="0 0 24 24"><path d="M12 19V5M5 12l7-7 7 7"/></svg></i><h3>Steel &amp; Mezzanines</h3><p>Fabricated to shop drawings and bolted to torque.</p></div></div>
  </div>
</section>

<section class="sec s5-scope" id="scope">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Scope of work</span>
      <h2 class="h-lg lines"><span class="ln"><span>What's included</span></span><span class="ln"><span>in our <span class="hl">package.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Each area below can be awarded on its own or combined with our other trades into one turnkey contract.</p></div>
    <div class="s5-cards"><div class="s5-card" data-r="up" style="--dl:0.0s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21V3h14v18M5 8h14M5 14h14M10 3v18M14 3v18"/></svg></i><span>01</span></div>
      <h3>RCC Frame Construction</h3><p>Columns, beams, slabs, shear walls and staircases in reinforced concrete.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.1s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21V3h14v18M5 8h14M5 14h14M10 3v18M14 3v18"/></svg></i><span>02</span></div>
      <h3>Structural Steel Works</h3><p>Steel frames, mezzanine floors, canopies and sheds — fabricated and erected.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.2s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21V3h14v18M5 8h14M5 14h14M10 3v18M14 3v18"/></svg></i><span>03</span></div>
      <h3>Formwork & Reinforcement</h3><p>Engineered shuttering, rebar fixing and inspection before every pour.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.30000000000000004s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M3 21h18M5 21V3h14v18M5 8h14M5 14h14M10 3v18M14 3v18"/></svg></i><span>04</span></div>
      <h3>Repair & Strengthening</h3><p>Crack repair, jacketing, carbon-fibre wrapping and concrete rehabilitation.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div></div>
    <div class="s5-offs"><div class="s5-off" data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer1.webp') }}" alt="Shop Drawings & Coordination"><div><span class="s5-free">Included</span><h4>Shop Drawings & Coordination</h4><p>We align structural drawings with MEP and architectural before execution.</p></div></div><div class="s5-off" data-r="up" style="--dl:0.1s"><img src="{{ asset('images/offer2.webp') }}" alt="Structural Assessment Support"><div><span class="s5-free">Included</span><h4>Structural Assessment Support</h4><p>Site investigation support for repair and strengthening projects.</p></div></div></div>
  </div>
</section>

<section class="sec u-pick-sec" id="methods">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Repair &amp; strengthening</span>
      <h2 class="h-lg lines"><span class="ln"><span>Methods we use to</span></span><span class="ln"><span><span class="hl">restore strength.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Every repair starts with an assessment. The engineer then specifies the right method for your structure.</p></div>
    <div class="u-pick" data-r="up"><div class="u-tabs"><button class="u-tab on" data-i="0"><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i>Concrete jacketing</button><button class="u-tab" data-i="1"><i><svg viewBox="0 0 24 24"><path d="M4 4h16M4 20h16M12 4v16M8 4v3M16 4v3M8 17v3M16 17v3"/></svg></i>Carbon-fibre wrapping</button><button class="u-tab" data-i="2"><i><svg viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.4-.6-.6-2.4z"/></svg></i>Epoxy crack injection</button><button class="u-tab" data-i="3"><i><svg viewBox="0 0 24 24"><path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0zM12 9v4M12 17h.01"/></svg></i>Spalling repair</button></div><div class="u-panes"><div class="u-pane on"><div class="u-pane-img"><img src="{{ asset('images/structural.webp') }}" alt="Concrete jacketing"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>Adds new reinforced concrete around weak columns or beams.</p>
              <span class="u-pane-k">Best for</span><p>Columns and beams that need more load capacity.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20advice%20on%20structural%20repair%3A%20Concrete%20jacketing" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like advice on structural repair: Concrete jacketing">Ask about this method <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g1.webp') }}" alt="Carbon-fibre wrapping"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>High-strength fibre sheets bonded to the concrete surface.</p>
              <span class="u-pane-k">Best for</span><p>Fast strengthening with minimal added weight.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20advice%20on%20structural%20repair%3A%20Carbon-fibre%20wrapping" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like advice on structural repair: Carbon-fibre wrapping">Ask about this method <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g15.webp') }}" alt="Epoxy crack injection"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>Low-viscosity epoxy pumped into cracks to re-bond concrete.</p>
              <span class="u-pane-k">Best for</span><p>Structural cracks in slabs, walls and beams.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20advice%20on%20structural%20repair%3A%20Epoxy%20crack%20injection" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like advice on structural repair: Epoxy crack injection">Ask about this method <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/s2.webp') }}" alt="Spalling repair"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>Damaged concrete removed, rebar treated and section rebuilt.</p>
              <span class="u-pane-k">Best for</span><p>Corroded rebar and falling concrete.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20advice%20on%20structural%20repair%3A%20Spalling%20repair" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like advice on structural repair: Spalling repair">Ask about this method <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div></div></div>
  </div>
</section>

<div class="dark-wrap dark s5-why">
<section class="sec">
  <div class="wrap s5-split rev">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Why it matters</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Quality that holds up</span></span><span class="ln"><span><span class="hl">for decades.</span></span></span></h2>
      <p class="s5-lead light" data-r="up">The structure is the one part of a building you cannot easily replace. Accurate formwork, correct reinforcement and controlled concrete placement decide how safe the building is — and how long it lasts.</p>
      <h4 class="s5-sub" data-r="up">Quality standards we follow</h4>
      <ul class="s5-std"><li data-r="up" style="--dl:0.0s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Built strictly to the structural engineer's design</li><li data-r="up" style="--dl:0.06s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Formwork and rebar inspected before every pour</li><li data-r="up" style="--dl:0.12s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Cover, laps and bar spacing checked on site</li><li data-r="up" style="--dl:0.18s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Concrete cube tests at 7 and 28 days</li><li data-r="up" style="--dl:0.24s"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Steel fabricated to approved shop drawings</li></ul>
    </div>
    <div class="s5-why-media">
      <div class="s5-why-img" data-r="clip"><img src="{{ asset('images/g2.webp') }}" alt="Cultural Centre Shell"></div>
      <div class="s5-why-card" data-r="up" style="--dl:.3s"><span class="eyebrow"><i></i>Materials &amp; systems</span>
        <div class="s5-tags"><span>High-strength rebar</span><span>Engineered formwork</span><span>Structural steel sections</span><span>HSFG bolts</span><span>Repair mortars & epoxy</span><span>Carbon-fibre wraps</span></div></div>
    </div>
  </div>
</section>
</div>

<section class="sec c-wiz-sec" id="wizard" style="padding-top:30px">
  <div class="wrap">
    <div class="c-wiz" data-r="up">
      <div class="c-wiz-l">
        <span class="eyebrow" style="color:#fff"><i></i>Free quote in 60 seconds</span>
        <h2>Tell us about your project in 3 quick steps.</h2>
        <p>No commitment. We'll call you back with a site-visit slot and a ballpark budget for your structural works.</p>
        <ol class="c-wiz-steps"><li class="on"><span>1</span>Your requirement</li><li><span>2</span>Details &amp; timing</li><li><span>3</span>Your details</li></ol>
        <div class="c-wiz-bar"><i></i></div>
      </div>
      <form class="c-wiz-f" data-email="info@sunfitgc.com" data-svc="Structural Works" novalidate>
        <div class="c-pane on" data-step="1"><h3>What kind of structural work?</h3><div class="c-opts"><label class="c-opt"><input type="radio" name="Project type" value="New RCC frame" checked><span><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i>New RCC frame</span></label><label class="c-opt"><input type="radio" name="Project type" value="Steel structure / mezzanine"><span><i><svg viewBox="0 0 24 24"><path d="M4 4h16M4 20h16M12 4v16M8 4v3M16 4v3M8 17v3M16 17v3"/></svg></i>Steel structure / mezzanine</span></label><label class="c-opt"><input type="radio" name="Project type" value="Extension / extra floor"><span><i><svg viewBox="0 0 24 24"><path d="M12 19V5M5 12l7-7 7 7"/></svg></i>Extension / extra floor</span></label><label class="c-opt"><input type="radio" name="Project type" value="Repair &amp; strengthening"><span><i><svg viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.4-.6-.6-2.4z"/></svg></i>Repair &amp; strengthening</span></label></div></div>
        <div class="c-pane" data-step="2"><h3>Current situation?</h3><div class="c-opts two"><label class="c-opt sm"><input type="radio" name="Project stage" value="New project — design ready" checked><span>New project — design ready</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Existing building, visible damage"><span>Existing building, visible damage</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Need assessment first"><span>Need assessment first</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Planning an extension"><span>Planning an extension</span></label></div>
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
      <h2 class="h-lg lines"><span class="ln"><span>Recent structural works</span></span><span class="ln"><span><span class="hl">on site.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Tap any photo to view it full size.</p></div>
    <div class="sgal s5-gal"><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/structural.webp') }}" alt="Structural Works"><figcaption><span>Structural Works</span><b>Structural Works</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/g1.webp') }}" alt="Commercial Façade"><figcaption><span>Structural Works</span><b>Commercial Façade</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g2.webp') }}" alt="Cultural Centre Shell"><figcaption><span>Structural Works</span><b>Cultural Centre Shell</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g8.webp') }}" alt="Waterfront Building"><figcaption><span>Structural Works</span><b>Waterfront Building</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer1.webp') }}" alt="Structural Works project"><figcaption><span>Structural Works</span><b>Structural Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/offer2.webp') }}" alt="Structural Works project"><figcaption><span>Structural Works</span><b>Structural Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g6.webp') }}" alt="Structural Works project"><figcaption><span>Structural Works</span><b>Structural Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g9.webp') }}" alt="Structural Works project"><figcaption><span>Structural Works</span><b>Structural Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure></div>
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
      <h2 class="h-lg lines" style="margin:18px 0 30px"><span class="ln"><span>Questions about</span></span><span class="ln"><span><span class="hl">structural works?</span></span></span></h2>
      <div class="faq s5-faqlist" data-r="up"><details open><summary>Do you work with our structural consultant's design?<i></i></summary><div class="ans"><p>Yes. We build strictly to the approved structural design and raise RFIs with your consultant whenever something needs clarification.</p></div></details><details><summary>Can you add a floor or mezzanine to an existing building?<i></i></summary><div class="ans"><p>Yes, subject to a structural assessment and approval. We handle both RCC and steel mezzanine solutions.</p></div></details><details><summary>How do you ensure structural safety on site?<i></i></summary><div class="ans"><p>Every pour is preceded by formwork and rebar inspection, and we follow HSE procedures with trained supervisors on site.</p></div></details><details><summary>Do you provide structural repair for old buildings?<i></i></summary><div class="ans"><p>Yes. We carry out concrete repair, jacketing and strengthening as per the consultant's repair specification.</p></div></details></div>
    </div>
    <aside class="s5-aside">
      <div class="s5-testi" data-r="up"><div class="stars">★★★★★</div><p>“Sunfit handled our commercial building from foundations to finishing. One team, one schedule — and they actually finished on time.”</p><div class="who"><img src="{{ asset('images/a1.webp') }}" alt=""><div><b>Client Name</b><span>Commercial Developer</span></div></div></div>
      <div class="s5-help" data-r="up" style="--dl:.1s"><h3>Need expert advice?</h3><p>Speak directly with our structural works team.</p>
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
        <h2>Get a quote for your structural works</h2>
        <p>Send your drawings or book a free site visit. Our engineers reply within 24 hours.</p>
        <ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Free, no-obligation site visit</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Detailed BOQ-based quotation</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Clear timeline before work starts</li></ul>
      </div>
      <form class="qform s5-form" data-email="info@sunfitgc.com">
        <input type="hidden" name="svc" value="Structural Works">
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
    <img src="{{ asset('images/structural.webp') }}" alt="">
    <div class="c-sticky-t"><b>Structural Works</b><span><span class="dot"></span>Free structural assessment visit</span></div>
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
      <h3 id="cpopt">Worried about cracks?</h3>
      <p>Book a structural inspection — our engineer will assess and advise, no obligation.</p>
      <form class="c-pop-f"><input name="Name" placeholder="Your name" required aria-label="Your name"><input name="Phone" type="tel" placeholder="Phone / WhatsApp" required aria-label="Phone"><button class="pill sun" type="submit">Call Me Back <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></form>
      <small>We never share your details.</small>
    </div>
  </div>
</div>
@endsection
