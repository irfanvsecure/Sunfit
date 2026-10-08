@php
  $p = $page;
  $others = [
    ['route' => 'services.civil-fit-out', 'img' => 'civil.webp', 'n' => '01', 't' => 'Civil & Fit Out Works', 'd' => 'Structural, civil, interior design and joinery under one contract.'],
    ['route' => 'services.mep-works', 'img' => 'mechanical.webp', 'n' => '02', 't' => 'MEP Works', 'd' => 'Mechanical, electrical, plumbing and drainage, coordinated as one system.'],
    ['route' => 'services.demolition-works', 'img' => 'g10.webp', 'n' => '03', 't' => 'Demolition Works', 'd' => 'Selective demolition, strip-out and structural removal, done safely.'],
    ['route' => 'services.authority-approvals', 'img' => 'about2.webp', 'n' => '04', 't' => 'Authority Approvals', 'd' => 'ADM, ADCD, maintenance permits and TAQA approvals, handled for you.'],
  ];
@endphp

<section class="phero">
  <div class="ph-card">
    <img src="{{ asset('images/'.$p['hero']) }}" alt="{{ $p['crumb'] }}">
    <div class="ph-in"><div class="wrap">
      <div>
        <div class="crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><a href="{{ route('services') }}">Services</a><span>{{ $p['crumb'] }}</span></div>
        <h1 class="lines">{!! $p['h1'] !!}</h1>
      </div>
      <div class="ph-side" data-r="up" style="--dl:.3s">
        <p>{{ $p['lead'] }}</p>
        <div class="ph-chips">
          @foreach ($p['chips'] as $chip)<span>{{ $chip }}</span>@endforeach
        </div>
      </div>
    </div></div>
    <a href="#main" class="ph-scroll" aria-label="Scroll down"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
  </div>
</section>

<main id="main">
  <section class="sec">
    <div class="wrap ab-intro">
      <div class="ab-imgs" data-r="left">
        <div class="a"><img src="{{ asset('images/'.$p['imgs'][0]) }}" alt=""></div>
        <div class="b"><img src="{{ asset('images/'.$p['imgs'][1]) }}" alt=""></div>
        <div class="c"><img src="{{ asset('images/'.$p['imgs'][2]) }}" alt=""></div>
        <div class="yrs"><b>{{ $p['yrs'] }}</b><small>{{ $p['yrsLabel'] }}</small></div>
      </div>
      <div data-r="right">
        <span class="eyebrow"><i></i>{{ $p['introEyebrow'] }}</span>
        <h2 class="h-lg lines"><span class="ln"><span>{{ $p['h2a'] }}</span></span><span class="ln"><span>{{ $p['h2b'] }} <i class="hl">{{ $p['h2c'] }}</i></span></span></h2>
        @foreach ($p['paras'] as $para)
          <p style="margin-top:18px">{{ $para }}</p>
        @endforeach
        <ul class="ticks" data-r="up" style="margin:22px 0 28px">
          @foreach ($p['ticks'] as $tick)<li>{{ $tick }}</li>@endforeach
        </ul>
        <a href="{{ route('contact') }}" class="pill sun">Request a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
      </div>
    </div>
  </section>

  <section class="sec" style="padding-top:0">
    <div class="wrap">
      <div class="sec-head">
        <div>
          <span class="eyebrow"><i></i>{{ $p['scopeEyebrow'] }}</span>
          <h2 class="h-lg lines"><span class="ln"><span>{{ $p['scopeHa'] }}</span></span><span class="ln"><span>{{ $p['scopeHb'] }}</span></span></h2>
        </div>
        <p data-r="up" style="--dl:.2s">{{ $p['scopeLead'] }}</p>
      </div>
      <div class="mvv trade-grid cols-{{ count($p['trades']) }}">
        @foreach ($p['trades'] as $i => $trade)
          <article class="mv {{ $trade['style'] }}" id="{{ $trade['id'] }}" data-r="up" style="--dl:{{ $i * 0.08 }}s">
            <i><svg viewBox="0 0 24 24"><path d="M4 20V9l8-5 8 5v11"/><path d="M9 20v-6h6v6"/></svg></i>
            <h3>{{ $trade['title'] }}</h3>
            <p>{{ $trade['text'] }}</p>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="sec" style="padding-top:20px">
    <div class="wrap process">
      <div class="proc-left">
        <span class="eyebrow"><i></i>How we work</span>
        <h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>From first call</span></span><span class="ln"><span>to <span class="hl">handover.</span></span></span></h2>
        <div class="proc-count"><span class="pc">01</span><small>/ 0{{ count($p['steps']) }}</small></div>
        <p style="max-width:420px">{{ $p['processLead'] }}</p>
      </div>
      <div class="steps"><span class="fillbar"></span>
        @foreach ($p['steps'] as $step)
          <div class="step{{ $loop->first ? ' act' : '' }}" data-r="right">
            <span class="k">{{ $step['k'] }}</span>
            <h3>{{ $step['title'] }}</h3>
            <p>{{ $step['text'] }}</p>
            <div class="chips">@foreach ($step['chips'] as $c)<span>{{ $c }}</span>@endforeach</div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="sec">
    <div class="wrap">
      <div class="sec-head">
        <div>
          <span class="eyebrow"><i></i>On site</span>
          <h2 class="h-lg lines"><span class="ln"><span>Work you can</span></span><span class="ln"><span>walk through.</span></span></h2>
        </div>
      </div>
      <div class="sgal s5-gal">
        @foreach ($p['gallery'] as $i => $img)
          <figure data-r="up" style="--dl:{{ ($i % 4) * 0.06 }}s"><img src="{{ asset('images/'.$img) }}" alt="{{ $p['crumb'] }}"><figcaption><span>{{ $p['crumb'] }}</span><b>Site photo</b></figcaption></figure>
        @endforeach
      </div>
    </div>
  </section>

  <section class="sec" style="padding-top:0">
    <div class="wrap">
      <div class="faq">
        <div>
          <span class="eyebrow"><i></i>Questions</span>
          <h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>Before you</span></span><span class="ln"><span>get in touch.</span></span></h2>
        </div>
        <div>
          @foreach ($p['faqs'] as $faq)
            <details>
              <summary>{{ $faq[0] }} <i></i></summary>
              <div class="ans"><p>{{ $faq[1] }}</p></div>
            </details>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section class="sec" style="padding-top:0">
    <div class="wrap">
      <div class="sec-head">
        <div>
          <span class="eyebrow"><i></i>Also from Sunfit</span>
          <h2 class="h-lg lines"><span class="ln"><span>The rest of</span></span><span class="ln"><span>the work.</span></span></h2>
        </div>
      </div>
      <div class="svc-grid">
        @foreach ($others as $o)
          @if ($o['route'] !== $p['route'])
            <a class="svc-card" href="{{ route($o['route']) }}" data-r="up">
              <div class="im"><img src="{{ asset('images/'.$o['img']) }}" alt="{{ $o['t'] }}"><span class="no">{{ $o['n'] }}</span></div>
              <div class="bd"><h3>{{ $o['t'] }}</h3><p>{{ $o['d'] }}</p><span class="go">View service <i><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></i></span></div>
            </a>
          @endif
        @endforeach
      </div>
    </div>
  </section>
</main>
