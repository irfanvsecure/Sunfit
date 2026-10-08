@php $board = $board; @endphp
<main id="top">
<section class="phero">
  <div class="ph-card">
    <img src="{{ asset('images/'.$board['hero']) }}" alt="{{ $board['crumb'] }}">
    <div class="ph-in"><div class="wrap">
      <div>
        <div class="crumbs" data-r="up"><a href="{{ route('home') }}">Home</a><span>{{ $board['crumb'] }}</span></div>
        <h1 class="lines">{!! $board['h1'] !!}</h1>
      </div>
      <div class="ph-side" data-r="up" style="--dl:.3s">
        <p>{{ $board['lead'] }}</p>
        <div class="ph-chips"><span>{{ $board['count'] }} projects</span><span>Commercial</span><span>Industrial</span><span>Interior</span></div>
      </div>
    </div></div>
    <a href="#main" class="ph-scroll" aria-label="Scroll down"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></a>
  </div>
</section>

<section class="sec" id="main">
  <div class="wrap">
    <div class="proj-top">
      <div>
        <span class="eyebrow"><i></i>{{ $board['eyebrow'] }}</span>
        <h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>{!! $board['h2'] !!}</span></span></h2>
      </div>
      <div class="filters" data-r="up">
        <a href="{{ route('projects.ongoing') }}" @class(['on' => $board['status'] === 'ongoing'])>Ongoing</a>
        <a href="{{ route('projects.completed') }}" @class(['on' => $board['status'] === 'completed'])>Completed</a>
      </div>
    </div>
    <div class="pgrid">
      @foreach ($board['cards'] as $i => $card)
        <article class="card" data-c="{{ $card['cat'] }}" data-r="up" style="--dl:{{ ($i % 3) * 0.1 }}s">
          <div class="ph"><img src="{{ asset('images/'.$card['img']) }}" alt="{{ $card['title'] }}"><span class="tag">{{ $card['tag'] }}</span></div>
          <h3>{{ $card['title'] }}</h3>
          <p>{{ $card['text'] }}</p>
          <div class="pmeta">@foreach ($card['meta'] as $m)<span>{{ $m }}</span>@endforeach</div>
        </article>
      @endforeach
    </div>
  </div>
</section>

<div class="dark-wrap dark">
  <section class="sec" style="padding:80px 0">
    <div class="wrap">
      <div class="stats" style="margin-top:0;border-top:0">
        <div class="stat" data-r="up"><b><span data-count="15">0</span><em>+</em></b><span>Years of expertise</span></div>
        <div class="stat" data-r="up" style="--dl:.1s"><b><span data-count="500">0</span><em>+</em></b><span>Projects completed</span></div>
        <div class="stat" data-r="up" style="--dl:.2s"><b><span data-count="120">0</span><em>+</em></b><span>Skilled team members</span></div>
        <div class="stat" data-r="up" style="--dl:.3s"><b><span data-count="98">0</span><em>%</em></b><span>Client satisfaction</span></div>
      </div>
    </div>
  </section>
</div>

<section class="sec" style="padding-top:40px">
  <div class="wrap" style="display:flex;flex-wrap:wrap;justify-content:space-between;gap:24px;align-items:end">
    <div>
      <span class="eyebrow"><i></i>Next project</span>
      <h2 class="h-lg lines" style="margin-top:20px"><span class="ln"><span>Planning something</span></span><span class="ln"><span><span class="hl">similar?</span></span></span></h2>
    </div>
    <a href="{{ route('contact') }}" class="pill sun">Request a Quote <span class="o"><svg viewBox="0 0 24 24" fill="none" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 5l7 7-7 7"/></svg></span></a>
  </div>
</section>
</main>
