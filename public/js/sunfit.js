/* Sunfit General Contracting — site scripts */
(function(){
  var $=function(s,c){return (c||document).querySelector(s)},$$=function(s,c){return [].slice.call((c||document).querySelectorAll(s))};
  var fine=window.matchMedia('(hover:hover) and (min-width:992px)').matches;
  var onScroll=[];

  /* loader */
  var ld=$('.loader');
  if(ld){var ln=$('.ld-num',ld),n=0;var li=setInterval(function(){n=Math.min(100,n+Math.ceil(Math.random()*18));ln.textContent=n;if(n>=100){clearInterval(li);setTimeout(function(){ld.classList.add('done')},200)}},50);}

  /* nav, back-to-top */
  var nav=$('.nav'),lastY=0,tt=$('.totop'),ring=tt?$('circle',tt):null;
  window.addEventListener('scroll',function(){
    var y=scrollY,h=document.documentElement.scrollHeight-innerHeight;
    if(nav) nav.classList.toggle('hide',y>lastY&&y>300&&!nav.classList.contains('open'));lastY=y;
    if(tt){tt.classList.toggle('show',y>600);ring.style.strokeDashoffset=163.4*(1-(h>0?y/h:0));}
    onScroll.forEach(function(f){f()});
  },{passive:true});
  if(tt) tt.addEventListener('click',function(){scrollTo({top:0,behavior:'smooth'})});
  var burger=$('.burger'); if(burger) burger.addEventListener('click',function(){nav.classList.toggle('open')});
  $$('.has-dd>a').forEach(function(a){a.addEventListener('click',function(e){if(innerWidth<=991){e.preventDefault();a.parentElement.classList.toggle('dd-open')}})});

  /* cursor + magnetic */
  if(fine&&$('.cursor')){
    var c=$('.cursor'),d=$('.cursor-dot'),mx=0,my=0,cx=0,cy=0;
    addEventListener('mousemove',function(e){document.body.classList.add('moved');mx=e.clientX;my=e.clientY;d.style.transform='translate('+mx+'px,'+my+'px) translate(-50%,-50%)'});
    (function loop(){cx+=(mx-cx)*.16;cy+=(my-cy)*.16;c.style.transform='translate('+cx+'px,'+cy+'px) translate(-50%,-50%)';requestAnimationFrame(loop)})();
    $$('a,button,.panel,summary,label').forEach(function(el){el.addEventListener('mouseenter',function(){c.classList.add('hover')});el.addEventListener('mouseleave',function(){c.classList.remove('hover')})});
    function label(sel,txt){$$(sel).forEach(function(g){g.addEventListener('mouseenter',function(){c.classList.add('drag');c.textContent=txt});g.addEventListener('mouseleave',function(){c.classList.remove('drag');c.textContent=''})})}
    label('.gi,.gs-slide','View');label('.rail','Drag');
    $$('.pill').forEach(function(b){
      b.addEventListener('mousemove',function(e){var r=b.getBoundingClientRect();b.style.transform='translate('+((e.clientX-r.left-r.width/2)*.18)+'px,'+((e.clientY-r.top-r.height/2)*.25)+'px)'});
      b.addEventListener('mouseleave',function(){b.style.transform=''});
    });
  }

  /* hero slider */
  var hero=$('.hero');
  if(hero){
    var hs=$$('.hs-slide',hero),hd=$$('.hs-dots button',hero),hc=$('.hs-cur',hero),hp=$('.hs-prog i',hero),hi=0,ht,hdur=+hero.dataset.dur||6500;
    var hgo=function(n){hs[hi].classList.remove('on');hd[hi].classList.remove('on');hi=(n+hs.length)%hs.length;hs[hi].classList.add('on');hd[hi].classList.add('on');hc.textContent='0'+(hi+1);hrun()};
    var hrun=function(){clearTimeout(ht);hp.classList.remove('run');void hp.offsetWidth;hp.style.animationDuration=hdur+'ms';hp.classList.add('run');ht=setTimeout(function(){hgo(hi+1)},hdur)};
    $('.hs-next',hero).addEventListener('click',function(){hgo(hi+1)});
    $('.hs-prev',hero).addEventListener('click',function(){hgo(hi-1)});
    hd.forEach(function(dd,i){dd.addEventListener('click',function(){if(i!==hi)hgo(i)})});
    var hx=null;hero.addEventListener('touchstart',function(e){hx=e.touches[0].clientX},{passive:true});
    hero.addEventListener('touchend',function(e){if(hx===null)return;var dx=e.changedTouches[0].clientX-hx;if(Math.abs(dx)>50)hgo(hi+(dx<0?1:-1));hx=null});
    document.addEventListener('visibilitychange',function(){if(document.hidden)clearTimeout(ht);else hrun()});
    hrun();
  }

  /* lightbox (shared) */
  var lb=$('.lb'),lbList=[],lbGet,lbi=0,lbAfter=null;
  function lbShow(i){if(!lbList.length)return;lbi=(i+lbList.length)%lbList.length;var dd=lbGet(lbList[lbi]),im=$('.lb img');im.style.transform='scale(.96)';im.src=dd[0].src;im.alt=dd[0].alt;$('.lb figcaption span').textContent=dd[1];$('.lb figcaption b').textContent=dd[2];$('.lb-count').textContent=(lbi+1)+' / '+lbList.length;requestAnimationFrame(function(){im.style.transform=''})}
  function openLb(list,i,get,after){if(!lb)return;lbList=list;lbGet=get;lbAfter=after||null;lbShow(i);lb.classList.add('open');document.body.style.overflow='hidden'}
  function lbClose(){lb.classList.remove('open');document.body.style.overflow='';if(lbAfter)lbAfter()}
  if(lb){
    $('.lb-close').addEventListener('click',lbClose);
    lb.addEventListener('click',function(e){if(e.target===lb)lbClose()});
    $('.lb-next').addEventListener('click',function(){lbShow(lbi+1)});
    $('.lb-prev').addEventListener('click',function(){lbShow(lbi-1)});
    document.addEventListener('keydown',function(e){if(!lb.classList.contains('open'))return;if(e.key==='Escape')lbClose();if(e.key==='ArrowRight')lbShow(lbi+1);if(e.key==='ArrowLeft')lbShow(lbi-1)});
    var lx=null;lb.addEventListener('touchstart',function(e){lx=e.touches[0].clientX},{passive:true});
    lb.addEventListener('touchend',function(e){if(lx===null)return;var dx=e.changedTouches[0].clientX-lx;if(Math.abs(dx)>50)lbShow(lbi+(dx<0?1:-1));lx=null});
  }

  /* portfolio: All = slider, category = grid */
  var gsRoot=$('.gs');
  if(gsRoot){
    var gsView=$('.gs-view'),gsTrack=$('.gs-track'),gss=$$('.gs-slide'),gsi=0,gsT,gsCount=$('.gs-count b'),gsBar=$('.gs-bar i');
    $$('.gi img[data-from]').forEach(function(im){im.src=$$('.gs-slide img')[+im.dataset.from].src});
    var gal=$('.gallery'),gis=$$('.gi');
    var gsGo=function(n){
      gss[gsi].classList.remove('on');gsi=(n+gss.length)%gss.length;var s=gss[gsi];s.classList.add('on');
      gsTrack.style.transform='translate3d('+(gsView.clientWidth/2-(s.offsetLeft+s.offsetWidth/2))+'px,0,0)';
      gsCount.textContent=(gsi<9?'0':'')+(gsi+1);gsBar.style.width=((gsi+1)/gss.length*100)+'%';
      clearTimeout(gsT);gsT=setTimeout(function(){gsGo(gsi+1)},4000);
    };
    $('.gs-next').addEventListener('click',function(){gsGo(gsi+1)});
    $('.gs-prev').addEventListener('click',function(){gsGo(gsi-1)});
    var gdx=0,gsx=null;
    var gDown=function(x){gsx=x;gdx=0;gsView.classList.add('drag')};
    var gUp=function(){if(gsx===null)return;gsView.classList.remove('drag');if(Math.abs(gdx)>50)gsGo(gsi+(gdx<0?1:-1));gsx=null};
    gsView.addEventListener('mousedown',function(e){e.preventDefault();gDown(e.clientX)});
    addEventListener('mousemove',function(e){if(gsx!==null)gdx=e.clientX-gsx});
    addEventListener('mouseup',gUp);
    gsView.addEventListener('touchstart',function(e){gDown(e.touches[0].clientX)},{passive:true});
    gsView.addEventListener('touchmove',function(e){if(gsx!==null)gdx=e.touches[0].clientX-gsx},{passive:true});
    gsView.addEventListener('touchend',gUp);
    gsView.addEventListener('mouseenter',function(){clearTimeout(gsT)});
    gsView.addEventListener('mouseleave',function(){clearTimeout(gsT);gsT=setTimeout(function(){gsGo(gsi+1)},4000)});
    var resume=function(){if(gsRoot.style.display!=='none'){clearTimeout(gsT);gsT=setTimeout(function(){gsGo(gsi+1)},4000)}};
    gss.forEach(function(s,i){s.addEventListener('click',function(){if(Math.abs(gdx)>8)return;if(i!==gsi){gsGo(i);return}clearTimeout(gsT);openLb(gss,i,function(el){return [$('img',el),$('.gs-cap span',el).textContent,$('.gs-cap b',el).textContent]},resume)})});
    addEventListener('resize',function(){gsGo(gsi)});
    requestAnimationFrame(function(){gsGo(0)});
    $$('.gal-filters button').forEach(function(b){b.addEventListener('click',function(){
      $$('.gal-filters button').forEach(function(x){x.classList.remove('on')});b.classList.add('on');
      var g=b.dataset.g;
      if(g==='all'){gal.hidden=true;gal.classList.remove('show');gsRoot.style.display='';gsGo(gsi);return}
      clearTimeout(gsT);gsRoot.style.display='none';
      gis.forEach(function(el){el.classList.toggle('gone',el.dataset.g!==g)});
      gal.hidden=false;gal.classList.remove('show');void gal.offsetWidth;gal.classList.add('show');
      $$('.gi:not(.gone)').forEach(function(el,k){el.style.animationDelay=(k*70)+'ms'});
    })});
    gis.forEach(function(el){el.addEventListener('click',function(){var list=gis.filter(function(x){return !x.classList.contains('gone')});openLb(list,list.indexOf(el),function(e){return [$('img',e),$('.gc span',e).textContent,$('.gc b',e).textContent]})})});
  }
  /* simple image grid lightbox (service pages) */
  var rg=$$('.rgal .card');
  rg.forEach(function(c,i){c.addEventListener('click',function(){openLb(rg,i,function(e){return [$('img',e),$('.tag',e).textContent,$('h3',e).textContent.trim()]})})});
  var sg=$$('.sgal figure');
  if(sg.length){sg.forEach(function(f,i){f.addEventListener('click',function(){openLb(sg,i,function(e){return [$('img',e),$('figcaption span',e).textContent,$('figcaption b',e).textContent]})})})}

  /* service panels */
  var panels=$$('.panel');
  if(panels.length){
    var pi=0,pt;
    var openP=function(i){pi=i;panels.forEach(function(p,k){p.classList.toggle('on',k===i)})};
    panels.forEach(function(p,i){
      p.addEventListener('click',function(e){if(e.target.closest('a'))return;openP(i);clearInterval(pt)});
      p.addEventListener('mouseenter',function(){if(fine){openP(i);clearInterval(pt)}});
    });
    pt=setInterval(function(){openP((pi+1)%panels.length)},5000);
    $$('.ss[data-p]').forEach(function(s){s.addEventListener('click',function(e){if(!$('#services')) return;e.preventDefault();openP(+s.dataset.p);clearInterval(pt);$('#services').scrollIntoView({behavior:'smooth'})})});
  }

  /* project rail */
  var rail=$('.rail');
  if(rail){
    var bar=$('.rail-prog i'),down=false,sxr=0,sl=0,movedR=0;
    var railProg=function(){var m=rail.scrollWidth-rail.clientWidth;bar.style.width=(m>0?Math.max(12,(rail.scrollLeft/m)*100):100)+'%'};
    rail.addEventListener('scroll',railProg,{passive:true});
    rail.addEventListener('mousedown',function(e){down=true;movedR=0;sxr=e.pageX;sl=rail.scrollLeft;rail.classList.add('dragging')});
    addEventListener('mouseup',function(){down=false;rail.classList.remove('dragging')});
    addEventListener('mousemove',function(e){if(!down)return;e.preventDefault();movedR=e.pageX-sxr;rail.scrollLeft=sl-movedR});
    rail.addEventListener('click',function(e){if(Math.abs(movedR)>6){e.preventDefault();e.stopPropagation()}},true);
    var step=function(){var cc=$('.card:not(.hide)',rail);return cc?cc.offsetWidth+20:400};
    $('.rail-foot .next').addEventListener('click',function(){rail.scrollBy({left:step(),behavior:'smooth'})});
    $('.rail-foot .prev').addEventListener('click',function(){rail.scrollBy({left:-step(),behavior:'smooth'})});
    railProg();
  }
  /* project filters (rail or grid) */
  $$('.filters').forEach(function(fl){
    var scope=fl.closest('section');
    $$('button',fl).forEach(function(b){b.addEventListener('click',function(){
      $$('button',fl).forEach(function(x){x.classList.remove('on')});b.classList.add('on');
      var f=b.dataset.f;$$('.card',scope).forEach(function(cc){cc.classList.toggle('hide',f!=='all'&&cc.dataset.c!==f)});
      var r=$('.rail',scope);if(r){r.scrollTo({left:0});r.dispatchEvent(new Event('scroll'))}
    })});
  });

  /* process sticky counter */
  var steps=$$('.step'),pc=$('.pc'),fb=$('.fillbar'),stepsWrap=$('.steps');
  if(steps.length&&stepsWrap){
    var procUpdate=function(){
      var mid=innerHeight*.55,act=0;
      steps.forEach(function(s,i){if(s.getBoundingClientRect().top<mid)act=i});
      steps.forEach(function(s,i){s.classList.toggle('act',i<=act)});
      if(pc)pc.textContent='0'+(act+1);
      var r=stepsWrap.getBoundingClientRect(),p=Math.min(1,Math.max(0,(mid-r.top)/r.height));
      if(fb)fb.style.height=(p*(r.height-20))+'px';
    };
    onScroll.push(procUpdate);procUpdate();
  }

  /* testimonials */
  var qs=$$('.q');
  if(qs.length&&$('.qn')){
    var qi=0,qt,qn=$('.q-nav .num');
    var showQ=function(i){qs[qi].classList.remove('on');qi=(i+qs.length)%qs.length;qs[qi].classList.add('on');qn.textContent='0'+(qi+1)+' / 0'+qs.length;clearInterval(qt);qt=setInterval(function(){showQ(qi+1)},6000)};
    $('.qn').addEventListener('click',function(){showQ(qi+1)});$('.qp').addEventListener('click',function(){showQ(qi-1)});
    qt=setInterval(function(){showQ(qi+1)},6000);
  }

  /* faq smooth */
  $$('.faq details').forEach(function(dt){
    var s=$('summary',dt),a=$('.ans',dt),grp=dt.parentElement;
    s.addEventListener('click',function(e){
      e.preventDefault();
      if(dt.open){a.style.height=a.scrollHeight+'px';requestAnimationFrame(function(){a.style.height='0px'});setTimeout(function(){dt.open=false;a.style.height=''},450)}
      else{$$('details[open]',grp).forEach(function(o){if(o!==dt){o.open=false}});dt.open=true;var h=a.scrollHeight;a.style.height='0px';requestAnimationFrame(function(){a.style.height=h+'px'});setTimeout(function(){a.style.height=''},450)}
    });
  });

  /* reveal + counters */
  function count(el){if(el.dataset.done)return;el.dataset.done=1;var end=+el.dataset.count,t0=null;(function st(ts){if(!t0)t0=ts;var p=Math.min((ts-t0)/1800,1);el.textContent=p>=1?end:Math.floor(end*(1-Math.pow(1-p,4)));if(p<1)requestAnimationFrame(st)})(performance.now())}
  var io=new IntersectionObserver(function(es){es.forEach(function(e){if(!e.isIntersecting)return;e.target.classList.add('vis');$$('[data-count]',e.target).forEach(count);if(e.target.dataset.count)count(e.target);io.unobserve(e.target)})},{threshold:.15,rootMargin:'0px 0px -60px 0px'});
  $$('[data-r]:not([data-r="clip"]),.lines,[data-count]').forEach(function(el){io.observe(el)});
  var io2=new IntersectionObserver(function(es){es.forEach(function(e){if(!e.isIntersecting)return;(e.target._clips||[]).forEach(function(el){el.classList.add('vis')});io2.unobserve(e.target)})},{threshold:0,rootMargin:'0px 0px -80px 0px'});
  $$('[data-r="clip"]').forEach(function(el){var p=el.parentElement;(p._clips=p._clips||[]).push(el);io2.observe(p)});

  /* ticker */
  var tk=$('.tick-track');
  if(tk){var tx=0,v=1,ly=scrollY;(function tl(){var dy=Math.abs(scrollY-ly);ly=scrollY;v+=((1+dy*.4)-v)*.08;tx-=v;var w=tk.scrollWidth/2;if(-tx>=w)tx+=w;tk.style.transform='translateX('+tx+'px)';requestAnimationFrame(tl)})();}


  /* ===== service page v3 ===== */
  var tabs=$('.sv-tabs');
  if(tabs){
    var tl=$$('.sv-tabs a.t'),secs=tl.map(function(a){return $(a.getAttribute('href'))});
    var tUpd=function(){
      tabs.classList.toggle('low',nav&&!nav.classList.contains('hide')&&scrollY>100);
      var k=0;secs.forEach(function(sec,i){if(sec&&sec.getBoundingClientRect().top<innerHeight*.35)k=i});
      tl.forEach(function(a,i){a.classList.toggle('on',i===k)});
      var on=tl[k];if(on&&on.parentElement.scrollWidth>on.parentElement.clientWidth){on.parentElement.scrollTo({left:on.offsetLeft-40,behavior:'smooth'})}
    };
    onScroll.push(tUpd);tUpd();
    tl.forEach(function(a){a.addEventListener('click',function(e){e.preventDefault();var t=$(a.getAttribute('href'));scrollTo({top:t.getBoundingClientRect().top+scrollY-150,behavior:'smooth'})})});
  }
  var rows=$$('.sc-row');
  if(rows.length){
    var fimgs=$$('.sc-frame img'),st=$('.sc-title'),sn=$('.sc-num');
    var act=function(i){rows.forEach(function(r,k){r.classList.toggle('on',k===i)});fimgs.forEach(function(im,k){im.classList.toggle('on',k===i)});st.textContent=$('h3',rows[i]).textContent;sn.textContent='0'+(i+1)};
    rows.forEach(function(r,i){r.addEventListener('click',function(){act(i)});r.addEventListener('mouseenter',function(){if(fine)act(i)})});
  }
  $$('.ba').forEach(function(b){var r=$('input',b);var set=function(){b.style.setProperty('--pos',r.value+'%')};r.addEventListener('input',set);set();
    var io3=new IntersectionObserver(function(es){if(!es[0].isIntersecting)return;io3.disconnect();var v=50,dir=-1,k=0;(function a(){v+=dir*1.2;if(v<25)dir=1;if(v>75)dir=-1;k++;r.value=v;set();if(k<120&&!b._touched)requestAnimationFrame(a);else if(!b._touched){r.value=50;set()}})()},{threshold:.5});io3.observe(b);
    r.addEventListener('pointerdown',function(){b._touched=1});
  });


  /* ===== service detail v4 ===== */
  var dp=$('.d-progress i');
  if(dp){
    var hl=$$('.d-hl span'),secs=$$('.d-sec'),tli=$$('.d-tl-i'),tlw=$('.d-tl'),tll=$('.d-tl-line i');
    var dUpd=function(){
      var h=document.documentElement.scrollHeight-innerHeight;dp.style.width=(h>0?scrollY/h*100:0)+'%';
      if(hl.length){var p0=hl[0].parentElement.getBoundingClientRect(),st=innerHeight*.85,en=innerHeight*.35,pr=(st-p0.top)/((st-en)+p0.height*.6);pr=Math.max(0,Math.min(1,pr));var c=Math.round(pr*hl.length);hl.forEach(function(w,i){w.classList.toggle('lit',i<c)})}
      var mid=innerHeight*.5;secs.forEach(function(s){var r=s.getBoundingClientRect();s.classList.toggle('act',r.top<mid&&r.bottom>mid)});
      if(tlw){var r=tlw.getBoundingClientRect(),p=Math.max(0,Math.min(1,(innerHeight*.6-r.top)/r.height));tll.style.height=(p*100)+'%';tli.forEach(function(it){it.classList.toggle('on',it.getBoundingClientRect().top<innerHeight*.6)})}
    };
    onScroll.push(dUpd);addEventListener('resize',dUpd);dUpd();
  }


  /* hero parallax (service pages) */
  var px=$('.s5-hero-bg');
  if(px){var pxU=function(){var r=px.parentElement.getBoundingClientRect();if(r.bottom<0)return;px.style.transform='translate3d(0,'+(-r.top*.25)+'px,0)'};onScroll.push(pxU);pxU();}


  /* ===== CRO: wizard ===== */
  var wf=$('.c-wiz-f');
  if(wf){
    var panes=$$('.c-pane',wf),lis=$$('.c-wiz-steps li'),bar=$('.c-wiz-bar i'),nxt=$('.c-next',wf),bk=$('.c-back',wf),st=1,msg='';
    var go=function(n){st=n;panes.forEach(function(p){p.classList.toggle('on',+p.dataset.step===n)});
      lis.forEach(function(l,i){l.classList.toggle('on',i===Math.min(n,3)-1);l.classList.toggle('done',i<n-1)});
      bar.style.width=(Math.min(n,3)/3*100)+'%';bk.classList.toggle('show',n>1&&n<4);$('.c-nav',wf).style.display=n===4?'none':'';
      nxt.firstChild.textContent=n===3?'Get My Quote ':'Continue '};
    var val=function(k){var e=wf.querySelector('[name="'+k+'"]:checked')||wf.querySelector('[name="'+k+'"]');return e?e.value.trim():''};
    nxt.addEventListener('click',function(){
      if(st<3){go(st+1);return}
      var nm=wf.querySelector('[name=Name]'),ph=wf.querySelector('[name=Phone]'),ok=true;
      [nm,ph].forEach(function(i){var b=!i.value.trim();i.classList.toggle('bad',b);if(b)ok=false});
      $('.c-err',wf).classList.toggle('show',!ok);if(!ok)return;
      msg='Hello Sunfit, I would like a quote.\nService: '+wf.dataset.svc+'\nProject type: '+val('Project type')+'\nStage: '+val('Project stage')+'\nStart: '+val('Start')+'\nName: '+val('Name')+'\nPhone: '+val('Phone')+(val('Email')?'\nEmail: '+val('Email'):'')+(val('Location')?'\nLocation: '+val('Location'):'');
      var wa=(($('.wa')||{}).href||'https://wa.me/').split('?')[0];
      $('.c-wa-send',wf).href=wa+'?text='+encodeURIComponent(msg);
      $('.c-mail-send',wf).href='mailto:'+wf.dataset.email+'?subject='+encodeURIComponent('Quote request — '+wf.dataset.svc)+'&body='+encodeURIComponent(msg);
      go(4);
    });
    bk.addEventListener('click',function(){if(st>1)go(st-1)});
    $$('.c-opt input',wf).forEach(function(r){r.addEventListener('change',function(){if(st===1)setTimeout(function(){go(2)},250)})});
    go(1);
  }
  /* ===== CRO: site visit ===== */
  var vg=$('.c-visit-go');
  if(vg){var vUpd=function(){var d=($('input[name=vday]:checked')||{}).value,tm=($('input[name=vtime]:checked')||{}).value,wa=(($('.wa')||{}).href||'https://wa.me/').split('?')[0],svc=(($('.c-wiz-f')||{dataset:{}}).dataset.svc)||'';
      vg.href=wa+'?text='+encodeURIComponent('Hello Sunfit, I would like to book a free site visit'+(svc?' for '+svc:'')+' on '+d+' ('+tm+').')};
    $$('.c-visit input').forEach(function(i){i.addEventListener('change',vUpd)});vUpd();}
  /* ===== CRO: sticky bar ===== */
  var sb=$('.c-sticky'),mb=$('.c-mbar'),hh=$('.s5-hero');
  if(sb&&hh){var sUpd=function(){var past=hh.getBoundingClientRect().bottom<0,nearEnd=(innerHeight+scrollY)>(document.documentElement.scrollHeight-700);var q=$('#quote'),qv=q&&q.getBoundingClientRect().top<innerHeight&&q.getBoundingClientRect().bottom>0;var show=past&&!nearEnd&&!qv;sb.classList.toggle('show',show);if(mb)mb.classList.toggle('show',past&&!nearEnd)};onScroll.push(sUpd);sUpd();}
  /* ===== CRO: popup (exit intent / 30s, once per session) ===== */
  var pop=$('.c-pop');
  if(pop){
    var seen=false;try{seen=sessionStorage.getItem('sf_pop')==='1'}catch(e){}
    var openPop=function(){if(seen||pop.classList.contains('open'))return;seen=true;try{sessionStorage.setItem('sf_pop','1')}catch(e){}pop.classList.add('open')};
    var closePop=function(){pop.classList.remove('open')};
    $('.c-pop-x',pop).addEventListener('click',closePop);
    pop.addEventListener('click',function(e){if(e.target===pop)closePop()});
    document.addEventListener('keydown',function(e){if(e.key==='Escape')closePop()});
    document.addEventListener('mouseout',function(e){if(!e.relatedTarget&&e.clientY<10&&scrollY>600)openPop()});
    setTimeout(function(){if(scrollY>900)openPop()},30000);
    $('.c-pop-f',pop).addEventListener('submit',function(e){e.preventDefault();var f=e.target,wa=(($('.wa')||{}).href||'https://wa.me/').split('?')[0];
      window.open(wa+'?text='+encodeURIComponent('Hello Sunfit, please call me back about a free site visit.\nName: '+f.Name.value+'\nPhone: '+f.Phone.value),'_blank');closePop()});
  }


  /* ===== Service-specific widgets ===== */
  var WA=function(){return (($('.wa')||{}).href||'https://wa.me/').split('?')[0]};
  $$('.u-check').forEach(function(box){
    var cks=$$('input',box),bar=$('.u-meter i',box),lv=$('.u-lvl',box),go=$('.u-go',box),mode=box.dataset.mode,svc=box.dataset.svc;
    var L=[0,1,2,3,4].map(function(i){return box.getAttribute('data-l'+i)});
    var max=cks.reduce(function(a,c){return a+(+c.dataset.w)},0);
    var upd=function(){
      var sel=cks.filter(function(c){return c.checked}),sc=sel.reduce(function(a,c){return a+(+c.dataset.w)},0),p=max?sc/max:0;
      bar.style.width=(sel.length?Math.max(8,p*100):0)+'%';bar.style.backgroundPosition=(100-p*100)+'% 0';
      var i=sel.length===0?0:(p<.25?1:p<.5?2:p<.8?3:4);lv.textContent=L[i];
      var items=sel.map(function(c){return '- '+c.value.replace(/&amp;/g,'&')}).join('\n');
      var msg=mode==='ready'?'Hello Sunfit, I am planning '+svc+'. I already have:\n'+(items||'- nothing yet')+'\nPlease help me with the rest.':'Hello Sunfit, I would like to book an inspection ('+svc+'). I have noticed:\n'+(items||'- not sure yet');
      go.href=WA()+'?text='+encodeURIComponent(msg);
    };
    cks.forEach(function(c){c.addEventListener('change',upd)});upd();
  });
  $$('.u-pick').forEach(function(pk){
    var tabs=$$('.u-tab',pk),panes=$$('.u-pane',pk);
    tabs.forEach(function(t,i){t.addEventListener('click',function(){tabs.forEach(function(x,k){x.classList.toggle('on',k===i)});panes.forEach(function(x,k){x.classList.toggle('on',k===i)})})});
  });
  var est=$('.u-est');
  if(est){
    var ar=$('.u-area',est),av=$('.u-area-v',est),tr=$('.u-tr',est),trr=$('.u-trr',est),eg=$('.u-est-go',est);
    var eUpd=function(){var a=+ar.value,t=$('input[name=etype]:checked',est),per=+t.value,v=a/per,lo=Math.max(1,Math.round(v*.9)),hi=Math.max(1,Math.round(v*1.1));
      av.textContent=a+' m²';tr.textContent='~'+Math.max(1,Math.round(v))+' TR';trr.textContent=lo+'–'+hi+' tons of refrigeration';
      eg.href=WA()+'?text='+encodeURIComponent('Hello Sunfit, I need an exact heat-load calculation.\nSpace: '+t.dataset.name+'\nArea: '+a+' m2\nRough estimate: ~'+Math.round(v)+' TR')};
    ar.addEventListener('input',eUpd);$$('input[name=etype]',est).forEach(function(r){r.addEventListener('change',eUpd)});eUpd();
  }

  /* forms -> email app */
  $$('form.qform').forEach(function(f){
    f.addEventListener('submit',function(e){
      e.preventDefault();var dd=new FormData(f),svcs=dd.getAll('svc').join(', ')||'General',body='Services: '+svcs+'\n';
      ['Name','Phone','Email','Message'].forEach(function(k){body+=k+': '+(dd.get(k)||'')+'\n'});
      location.href='mailto:'+f.dataset.email+'?subject='+encodeURIComponent('Project Enquiry — '+svcs)+'&body='+encodeURIComponent(body);
      $('.form-note',f).style.display='block';
    });
  });
  $$('.news').forEach(function(f){f.addEventListener('submit',function(e){e.preventDefault();$('input',f).value='Thank you!'})});
  $$('.yr-now').forEach(function(y){y.textContent=new Date().getFullYear()});
})();
