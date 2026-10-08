@extends('layouts.app')

@section('title')
Contact Us | Sunfit General Contracting
@endsection

@section('description')
Contact Sunfit General Contracting for a free project estimate.
@endsection

@section('content')
<main id="top"><section class="phero"><div class="ph-card"><img src="{{ asset('images/helmet.webp') }}" alt="">
  <div class="ph-in"><div class="wrap">
    <div><div class="crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><span>Contact</span></div><h1 class="lines"><span class="ln"><span>Let's talk about</span></span><span class="ln"><span>your <span class="hl">project.</span></span></span></h1></div>
    <div class="ph-side" data-r="up" style="--dl:.3s"><p>Call, WhatsApp or send us the details — our engineers reply within 24 hours with next steps and a free estimate.</p></div>
  </div></div>
  <a href="#main" class="ph-scroll" aria-label="Scroll down"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
</div></section>

<section class="sec" id="main" style="padding-top:0">
  <div class="wrap">
    <div class="cc">
      <a class="cci" href="tel:+971000000000" data-r="up"><i><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg></i><small>Call us</small><b>+971 00 000 0000</b></a>
      <a class="cci" href="https://wa.me/971000000000" target="_blank" rel="noopener" data-r="up" style="--dl:.1s"><i><svg viewBox="0 0 24 24"><path d="M21 11.5a8.4 8.4 0 0 1-12.2 7.5L3 21l2-5.6A8.4 8.4 0 1 1 21 11.5z"/></svg></i><small>WhatsApp</small><b>Chat with us</b></a>
      <a class="cci" href="mailto:info@sunfitgc.com" data-r="up" style="--dl:.2s"><i><svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg></i><small>Email us</small><b>info@sunfitgc.com</b></a>
      <div class="cci" data-r="up" style="--dl:.3s"><i><svg viewBox="0 0 24 24"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg></i><small>Visit us</small><b>United Arab Emirates</b></div>
    </div>
  </div>
</section>
<section class="sec" style="padding-top:20px">
  <div class="wrap ct" id="contact">
    <div class="q-card form" data-r="left">
      <h3 class="h-md">Request a consultation</h3>
      <form class="qform" data-email="info@sunfitgc.com">
        <div class="svc-chips">
          <label><input type="checkbox" name="svc" value="Civil & Fit Out"><span>Civil &amp; Fit Out</span></label>
          <label><input type="checkbox" name="svc" value="MEP"><span>MEP</span></label>
          <label><input type="checkbox" name="svc" value="Demolition"><span>Demolition</span></label>
          <label><input type="checkbox" name="svc" value="Authority Approvals"><span>Approvals</span></label>
        </div>
        <div class="fld"><input id="f1" name="Name" placeholder=" " required><label for="f1">Full name*</label></div>
        <div class="fld"><input id="f2" name="Phone" type="tel" placeholder=" " required><label for="f2">Phone*</label></div>
        <div class="fld full"><input id="f3" name="Email" type="email" placeholder=" " required><label for="f3">Email*</label></div>
        <div class="fld full"><textarea id="f4" name="Message" placeholder=" "></textarea><label for="f4">Tell us about your project</label></div>
        <div class="full" style="grid-column:1/-1"><button type="submit" class="pill">Send Request <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></button></div>
        <p class="form-note">Your email app has opened with the message ready — just press send.</p>
      </form>
    </div>
    <div data-r="right">
      <div class="mapc"><iframe title="Sunfit location map" loading="lazy" src="https://www.google.com/maps?q=United%20Arab%20Emirates&amp;output=embed"></iframe></div>
      <div class="hours"><h3>Working hours</h3><ul><li>Monday – Friday<b>8:00 AM – 6:00 PM</b></li><li>Saturday<b>8:00 AM – 6:00 PM</b></li><li>Sunday<b>Closed</b></li></ul></div>
    </div>
  </div>
</section>
<section class="sec" style="padding-top:60px">
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