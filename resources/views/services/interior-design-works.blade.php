@extends('layouts.app')

@section('title')
Interior Designing Works | Sunfit General Contracting
@endsection

@section('description')
Design-and-build interiors and fit-outs — ceilings, partitions, joinery, flooring and finishes.
@endsection

@section('content')
<div class="d-progress"><i></i></div><main id="top" class="s5 sv-interior">
<section class="u-hero u-hero-split">
  <div class="wrap u-hero-grid">
    <div class="u-hero-t">
    <div class="sv-crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><i></i><a href="{{ route('services') }}">Services</a><i></i><b>Interior Designing Works</b></div>
    <span class="s5-tag" data-r="up"><em>06</em>Interior specialists</span>
    <h1 class="lines"><span class="ln"><span>Interior Designing Works</span></span></h1>
    <p data-r="up" style="--dl:.2s">Design-and-build interiors and fit-outs — ceilings, partitions, joinery, flooring and finishes.</p>
    <div class="s5-hero-act" data-r="up" style="--dl:.3s"><a href="#styles" class="pill sun">Book Design Consultation <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a><a href="#styles" class="s5-link">Choose your style <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div>
    <div class="c-trust" data-r="up" style="--dl:.4s">
      <div class="c-faces"><img src="{{ asset('images/a1.webp') }}" alt=""><img src="{{ asset('images/a2.webp') }}" alt=""><img src="{{ asset('images/a3.webp') }}" alt=""><img src="{{ asset('images/a4.webp') }}" alt=""></div>
      <div><div class="c-stars">★★★★★ <b>5.0</b></div><span>Rated by developers &amp; businesses</span></div>
      <div class="c-sep"></div>
      <div class="c-live"><span class="dot"></span>Replies within 24 hours</div>
    </div>
    </div>
    <div class="u-hero-m">
      <div class="u-hm1" data-r="clip"><img src="{{ asset('images/s4.webp') }}" alt="Interior Designing Works"></div>
      <div class="u-hm2" data-r="scale" style="--dl:.35s"><img src="{{ asset('images/g3.webp') }}" alt=""></div>
      <div class="u-hchip" data-r="up" style="--dl:.5s"><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i><span><small>See before you build</small><b>3D design first</b></span></div>
    </div>
  </div>
</section>
<div class="wrap s5-bar-wrap u-bar-flat"><div class="s5-bar" data-r="up"><a href="tel:+971000000000"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>See before you build</small><b>3D design first</b></span></a><a href="https://wa.me/971000000000" target="_blank" rel="noopener"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i><span><small>One team</small><b>Design &amp; build</b></span></a><a href="#quote"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><span><small>Handled</small><b>Fit-out approvals</b></span></a><a href="#wizard"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></i><span><small>Guided selection</small><b>On-budget materials</b></span></a></div></div>

<section class="sec u-pick-sec" id="styles">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Find your style</span>
      <h2 class="h-lg lines"><span class="ln"><span>Which look</span></span><span class="ln"><span><span class="hl">fits your space?</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Pick a style you like — we'll build a concept and 3D visuals around it in your free consultation.</p></div>
    <div class="u-pick" data-r="up"><div class="u-tabs"><button class="u-tab on" data-i="0"><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i>Modern</button><button class="u-tab" data-i="1"><i><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="m8 12 3 3 5-6"/></svg></i>Minimal</button><button class="u-tab" data-i="2"><i><svg viewBox="0 0 24 24"><path d="M4 4h16M4 20h16M12 4v16M8 4v3M16 4v3M8 17v3M16 17v3"/></svg></i>Industrial</button><button class="u-tab" data-i="3"><i><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M12 8v8M8 12h8"/></svg></i>Luxury</button></div><div class="u-panes"><div class="u-pane on"><div class="u-pane-img"><img src="{{ asset('images/interior.webp') }}" alt="Modern"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>Clean lines, neutral tones, warm wood and soft lighting.</p>
              <span class="u-pane-k">Best for</span><p>Offices, showrooms and client-facing spaces.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20a%20design%20consultation.%20Preferred%20style%3A%20Modern" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like a design consultation. Preferred style: Modern">I like this style <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g10.webp') }}" alt="Minimal"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>Calm, uncluttered spaces with hidden storage.</p>
              <span class="u-pane-k">Best for</span><p>Clinics, boutiques and focused workspaces.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20a%20design%20consultation.%20Preferred%20style%3A%20Minimal" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like a design consultation. Preferred style: Minimal">I like this style <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g11.webp') }}" alt="Industrial"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>Exposed ceilings, metal, concrete and bold accents.</p>
              <span class="u-pane-k">Best for</span><p>Cafés, studios and creative offices.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20a%20design%20consultation.%20Preferred%20style%3A%20Industrial" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like a design consultation. Preferred style: Industrial">I like this style <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div><div class="u-pane"><div class="u-pane-img"><img src="{{ asset('images/g6.webp') }}" alt="Luxury"></div><div class="u-pane-b">
              <span class="u-pane-k">The look</span><p>Marble, brass details and rich layered textures.</p>
              <span class="u-pane-k">Best for</span><p>Hotels, lounges and premium retail.</p>
              <a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%27d%20like%20a%20design%20consultation.%20Preferred%20style%3A%20Luxury" target="_blank" rel="noopener" class="pill u-pane-go" data-msg="Hello Sunfit, I'd like a design consultation. Preferred style: Luxury">I like this style <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div></div></div>
  </div>
</section>

<section class="sec s5-intro" id="overview">
  <div class="wrap s5-split">
    <div class="s5-imgs">
      <div class="s5-im1" data-r="clip"><img src="{{ asset('images/interior.webp') }}" alt="Interior Designing Works"></div>
      <div class="s5-im2" data-r="clip" style="--dl:.25s"><img src="{{ asset('images/g3.webp') }}" alt="Landmark Pavilion"></div>
      <div class="s5-badge" data-r="scale" style="--dl:.4s"><b><span data-count="15">0</span>+</b><small>Years of<br>experience</small></div>
    </div>
    <div>
      <span class="eyebrow" data-r="up"><i></i>Service overview</span>
      <h2 class="h-lg lines" style="margin:18px 0 22px"><span class="ln"><span>Professional interior designing works</span></span><span class="ln"><span>you can <span class="hl">rely on.</span></span></span></h2>
      <p class="s5-lead" data-r="up">Our Interior Designing Works team turns empty shells into spaces people love to live and work in. We combine thoughtful design with in-house execution, so what you approve on the drawing is exactly what gets built.</p>
      <p class="muted" data-r="up">From concept and 3D visuals to gypsum ceilings, partitions, joinery, flooring and paint, we manage the full fit-out under one roof — on budget and on schedule.</p>
      <div class="s5-feats" data-r="up"><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>See it first</b><span>Realistic 3D visuals before a single wall is built.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>One team</b><span>Design and execution under one roof — no hand-off gaps.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>On budget</b><span>Materials chosen to match your look and your budget.</span></div></div><div class="s5-feat"><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i><div><b>Built to last</b><span>Durable finishes and quality joinery.</span></div></div></div>
      <div class="s5-act" data-r="up"><a href="#quote" class="pill">Request a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
        <a href="tel:+971000000000" class="s5-call"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><span><small>Call us anytime</small><b>+971 00 000 0000</b></span></a></div>
    </div>
  </div>
</section>

<div class="dark-wrap dark" id="compare_ba" style="margin-top:16px">
<section class="sec">
  <div class="wrap u-check-grid">
    <div>
      <span class="eyebrow" data-r="up"><i></i>Before &amp; after</span>
      <h2 class="h-lg lines" style="margin:18px 0 18px"><span class="ln"><span>From empty shell</span></span><span class="ln"><span>to <span class="hl">finished space.</span></span></span></h2>
      <p class="muted" data-r="up">Drag the handle to see how our design-and-build team transforms a raw space into a finished interior.</p>
    </div>
    <div class="ba" data-r="scale">
      <img src="{{ asset('images/s2.webp') }}" alt="Before fit-out">
      <img class="aft" src="{{ asset('images/interior.webp') }}" alt="After fit-out">
      <span class="lb1">Before</span><span class="lb2">After</span>
      <span class="bar"></span><span class="knob"><svg viewBox="0 0 24 24"><path d="M9 6 3 12l6 6M15 6l6 6-6 6"/></svg></span>
      <input type="range" min="0" max="100" value="50" aria-label="Compare before and after">
    </div>
  </div>
</section>
</div>

<section class="sec u-phases" id="journey">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Design journey</span>
      <h2 class="h-lg lines"><span class="ln"><span>From brief to</span></span><span class="ln"><span><span class="hl">move-in day.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">A typical office or retail fit-out — exact timings depend on size and approvals.</p></div>
    <div class="u-ph-row" data-r="up"><span class="u-ph-line"><i></i></span><div class="u-ph" style="--i:0"><span class="u-ph-n">01</span><span class="u-ph-d">Week 1</span><h3>Brief &amp; Site Visit</h3><p>Needs, budget, measurements.</p></div><div class="u-ph" style="--i:1"><span class="u-ph-n">02</span><span class="u-ph-d">Week 2</span><h3>Concept &amp; Moodboard</h3><p>Layout options and style direction.</p></div><div class="u-ph" style="--i:2"><span class="u-ph-n">03</span><span class="u-ph-d">Weeks 3–4</span><h3>3D Design</h3><p>Realistic visuals and material samples.</p></div><div class="u-ph" style="--i:3"><span class="u-ph-n">04</span><span class="u-ph-d">Weeks 4–6</span><h3>Approvals</h3><p>Landlord and authority fit-out permits.</p></div><div class="u-ph" style="--i:4"><span class="u-ph-n">05</span><span class="u-ph-d">Weeks 6–12</span><h3>Fit-Out &amp; Handover</h3><p>Build, snag and hand over the keys.</p></div></div>
  </div>
</section>

<section class="sec u-plans-sec" id="packages">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Packages</span>
      <h2 class="h-lg lines"><span class="ln"><span>Pick the package</span></span><span class="ln"><span><span class="hl">that suits you.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Whether you have a design or are starting from scratch, we have a package that fits.</p></div>
    <div class="u-plans"><div class="u-plan" data-r="up" style="--dl:0.0s">
              <h3>Design Only</h3><p>Concept, 3D and drawings you can build with anyone.</p><ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Space planning</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>3D visuals</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Material &amp; finish schedule</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Construction drawings</li></ul><a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20am%20interested%20in%3A%20Design%20Only%20%28Interior%20Designing%20Works%29" target="_blank" rel="noopener" class="pill">Get Package Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div><div class="u-plan hot" data-r="up" style="--dl:0.1s"><span class="u-hot">Most popular</span>
              <h3>Design &amp; Build</h3><p>One team from first sketch to handover.</p><ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Everything in Design Only</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Approvals handled</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Full fit-out &amp; MEP</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Single fixed timeline</li></ul><a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20am%20interested%20in%3A%20Design%20%26%20Build%20%28Interior%20Designing%20Works%29" target="_blank" rel="noopener" class="pill sun">Get Package Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div><div class="u-plan" data-r="up" style="--dl:0.2s">
              <h3>Fit-Out Only</h3><p>You have a design — we build it accurately.</p><ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Drawing review &amp; BOQ</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Joinery &amp; finishes</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>MEP coordination</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Snagging &amp; handover</li></ul><a href="https://wa.me/971000000000?text=Hello%20Sunfit%2C%20I%20am%20interested%20in%3A%20Fit-Out%20Only%20%28Interior%20Designing%20Works%29" target="_blank" rel="noopener" class="pill">Get Package Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a></div></div>
  </div>
</section>

<section class="sec s5-scope" id="scope">
  <div class="wrap">
    <div class="s5-head"><div><span class="eyebrow" data-r="up"><i></i>Scope of work</span>
      <h2 class="h-lg lines"><span class="ln"><span>What's included</span></span><span class="ln"><span>in our <span class="hl">package.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Each area below can be awarded on its own or combined with our other trades into one turnkey contract.</p></div>
    <div class="s5-cards"><div class="s5-card" data-r="up" style="--dl:0.0s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M4 11V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M2 13a2 2 0 0 1 4 0v2h12v-2a2 2 0 0 1 4 0v5H2z"/><path d="M5 18v2M19 18v2"/></svg></i><span>01</span></div>
      <h3>Concept & 3D Design</h3><p>Space planning, mood boards and realistic 3D visuals before work starts.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.1s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M4 11V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M2 13a2 2 0 0 1 4 0v2h12v-2a2 2 0 0 1 4 0v5H2z"/><path d="M5 18v2M19 18v2"/></svg></i><span>02</span></div>
      <h3>Ceilings & Partitions</h3><p>Gypsum ceilings, glass and drywall partitions, and acoustic solutions.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.2s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M4 11V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M2 13a2 2 0 0 1 4 0v2h12v-2a2 2 0 0 1 4 0v5H2z"/><path d="M5 18v2M19 18v2"/></svg></i><span>03</span></div>
      <h3>Joinery & Furniture</h3><p>Custom kitchens, wardrobes, reception desks and built-in furniture.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div><div class="s5-card" data-r="up" style="--dl:0.30000000000000004s">
      <div class="s5-card-top"><i><svg viewBox="0 0 24 24"><path d="M4 11V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M2 13a2 2 0 0 1 4 0v2h12v-2a2 2 0 0 1 4 0v5H2z"/><path d="M5 18v2M19 18v2"/></svg></i><span>04</span></div>
      <h3>Flooring & Finishes</h3><p>Tiles, marble, vinyl, wood flooring, paint, wallpaper and cladding.</p>
      <a href="#quote" class="s5-more">Get a quote <svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a></div></div>
    <div class="s5-offs"><div class="s5-off" data-r="up" style="--dl:0.0s"><img src="{{ asset('images/offer1.webp') }}" alt="Design & Build Packages"><div><span class="s5-free">Included</span><h4>Design & Build Packages</h4><p>One team from concept to handover — simpler and faster.</p></div></div><div class="s5-off" data-r="up" style="--dl:0.1s"><img src="{{ asset('images/offer2.webp') }}" alt="Material & Finish Selection"><div><span class="s5-free">Included</span><h4>Material & Finish Selection</h4><p>Guided selection of materials that fit your look and budget.</p></div></div></div>
  </div>
</section>

<section class="sec c-wiz-sec" id="wizard" style="padding-top:30px">
  <div class="wrap">
    <div class="c-wiz" data-r="up">
      <div class="c-wiz-l">
        <span class="eyebrow" style="color:#fff"><i></i>Free quote in 60 seconds</span>
        <h2>Tell us about your project in 3 quick steps.</h2>
        <p>No commitment. We'll call you back with a site-visit slot and a ballpark budget for your interior designing works.</p>
        <ol class="c-wiz-steps"><li class="on"><span>1</span>Your requirement</li><li><span>2</span>Details &amp; timing</li><li><span>3</span>Your details</li></ol>
        <div class="c-wiz-bar"><i></i></div>
      </div>
      <form class="c-wiz-f" data-email="info@sunfitgc.com" data-svc="Interior Designing Works" novalidate>
        <div class="c-pane on" data-step="1"><h3>What space are you designing?</h3><div class="c-opts"><label class="c-opt"><input type="radio" name="Project type" value="Office / workplace" checked><span><i><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/></svg></i>Office / workplace</span></label><label class="c-opt"><input type="radio" name="Project type" value="Retail / showroom"><span><i><svg viewBox="0 0 24 24"><path d="M3 9 5 3h14l2 6M3 9h18v12H3zM9 21v-6h6v6"/></svg></i>Retail / showroom</span></label><label class="c-opt"><input type="radio" name="Project type" value="Restaurant / café"><span><i><svg viewBox="0 0 24 24"><path d="M3 8h14v6a6 6 0 0 1-6 6H9a6 6 0 0 1-6-6zM17 10h2a2 2 0 0 1 0 4h-2M7 2v3M11 2v3"/></svg></i>Restaurant / café</span></label><label class="c-opt"><input type="radio" name="Project type" value="Clinic / hospitality"><span><i><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M12 8v8M8 12h8"/></svg></i>Clinic / hospitality</span></label></div></div>
        <div class="c-pane" data-step="2"><h3>What service do you need?</h3><div class="c-opts two"><label class="c-opt sm"><input type="radio" name="Project stage" value="Design only" checked><span>Design only</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Design &amp; build"><span>Design &amp; build</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Fit-out only (have design)"><span>Fit-out only (have design)</span></label><label class="c-opt sm"><input type="radio" name="Project stage" value="Not sure yet"><span>Not sure yet</span></label></div>
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
      <h2 class="h-lg lines"><span class="ln"><span>Recent interior designing works</span></span><span class="ln"><span><span class="hl">on site.</span></span></span></h2></div><p data-r="up" style="--dl:.15s">Tap any photo to view it full size.</p></div>
    <div class="sgal s5-gal"><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/interior.webp') }}" alt="Interior Designing Works"><figcaption><span>Interior Designing Works</span><b>Interior Designing Works</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/g3.webp') }}" alt="Landmark Pavilion"><figcaption><span>Interior Designing Works</span><b>Landmark Pavilion</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/g6.webp') }}" alt="Atrium Interior"><figcaption><span>Interior Designing Works</span><b>Atrium Interior</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g14.webp') }}" alt="Showroom Fit-Out"><figcaption><span>Interior Designing Works</span><b>Showroom Fit-Out</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.0s"><img src="{{ asset('images/g9.webp') }}" alt="Clinic Interiors"><figcaption><span>Interior Designing Works</span><b>Clinic Interiors</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.08s"><img src="{{ asset('images/offer1.webp') }}" alt="Interior Designing Works project"><figcaption><span>Interior Designing Works</span><b>Interior Designing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.16s"><img src="{{ asset('images/offer2.webp') }}" alt="Interior Designing Works project"><figcaption><span>Interior Designing Works</span><b>Interior Designing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure><figure data-r="up" style="--dl:0.24s"><img src="{{ asset('images/g8.webp') }}" alt="Interior Designing Works project"><figcaption><span>Interior Designing Works</span><b>Interior Designing Works project</b></figcaption><i><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M11 8v6M8 11h6"/></svg></i></figure></div>
  </div>
</section>

<section class="sec s5-faqsec" id="faq" style="padding-top:40px">
  <div class="wrap s5-faq">
    <div>
      <span class="eyebrow" data-r="up"><i></i>FAQ</span>
      <h2 class="h-lg lines" style="margin:18px 0 30px"><span class="ln"><span>Questions about</span></span><span class="ln"><span><span class="hl">interior designing works?</span></span></span></h2>
      <div class="faq s5-faqlist" data-r="up"><details open><summary>Do you offer both design and execution?<i></i></summary><div class="ans"><p>Yes. We provide a complete design-and-build service, or execution only if you already have an approved design.</p></div></details><details><summary>Will I see a 3D design before work starts?<i></i></summary><div class="ans"><p>Yes. We share 3D visuals and drawings for your approval before any fit-out work begins.</p></div></details><details><summary>Can you handle authority fit-out approvals?<i></i></summary><div class="ans"><p>Yes. We prepare fit-out drawings and coordinate the required landlord and authority approvals.</p></div></details><details><summary>How long does an office or retail fit-out take?<i></i></summary><div class="ans"><p>It depends on size and scope. Most small to mid-size fit-outs take a few weeks; we share a clear schedule with the quote.</p></div></details></div>
    </div>
    <aside class="s5-aside">
      <div class="s5-testi" data-r="up"><div class="stars">★★★★★</div><p>“Clear quotation, weekly updates and a clean site every day. We'd hire the team again without hesitation.”</p><div class="who"><img src="{{ asset('images/a4.webp') }}" alt=""><div><b>Client Name</b><span>Retail Fit-Out Client</span></div></div></div>
      <div class="s5-help" data-r="up" style="--dl:.1s"><h3>Need expert advice?</h3><p>Speak directly with our interior designing works team.</p>
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
        <h2>Get a quote for your interior designing works</h2>
        <p>Send your drawings or book a free site visit. Our engineers reply within 24 hours.</p>
        <ul><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Free, no-obligation site visit</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Detailed BOQ-based quotation</li><li><i><svg viewBox="0 0 24 24"><path d="m5 12 5 5 9-10"/></svg></i>Clear timeline before work starts</li></ul>
      </div>
      <form class="qform s5-form" data-email="info@sunfitgc.com">
        <input type="hidden" name="svc" value="Interior Designing Works">
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
    <img src="{{ asset('images/interior.webp') }}" alt="">
    <div class="c-sticky-t"><b>Interior Designing Works</b><span><span class="dot"></span>Free design consultation</span></div>
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
      <h3 id="cpopt">Free design consultation</h3>
      <p>Share your space and style — get ideas and a fit-out estimate.</p>
      <form class="c-pop-f"><input name="Name" placeholder="Your name" required aria-label="Your name"><input name="Phone" type="tel" placeholder="Phone / WhatsApp" required aria-label="Phone"><button class="pill sun" type="submit">Call Me Back <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></form>
      <small>We never share your details.</small>
    </div>
  </div>
</div>
@endsection
