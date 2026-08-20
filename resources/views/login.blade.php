<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Masuk – TagihKas</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#1B2A26;
    --ink-soft:#4B5F59;
    --paper:#FFF9F0;
    --teal:#0E6E5C;
    --teal-deep:#0A4F42;
    --teal-pale:#E4F2EC;
    --red:#E8543E;
    --gold:#F4A93D;
    --line:#E3D9C4;
    --radius:22px;
    --cream-text:#FFF9F0;
  }

  *{box-sizing:border-box;}
  html,body{height:100%;}
  body{
    margin:0;
    min-height:100dvh;
    font-family:'Plus Jakarta Sans', sans-serif;
    color:var(--ink);
    background:
      radial-gradient(circle at 15% 12%, rgba(244,169,61,0.35), transparent 42%),
      radial-gradient(circle at 88% 82%, rgba(232,84,62,0.30), transparent 45%),
      linear-gradient(160deg, var(--teal) 0%, var(--teal-deep) 62%, #073A30 100%);
    background-attachment:fixed;
    position:relative;
    overflow-x:hidden;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:28px 18px;
  }

  body::before{
    content:"";
    position:fixed;
    inset:0;
    background-image:radial-gradient(rgba(255,255,255,0.07) 1px, transparent 1px);
    background-size:22px 22px;
    pointer-events:none;
  }

  .layout{
    width:100%;
    max-width:460px;
    position:relative;
    z-index:1;
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:26px;
  }

  .hero-panel{
    width:100%;
    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;
    opacity:0;
    animation:riseIn .6s ease forwards;
  }
  .brand{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
  }
  .brand-badge{
    width:38px;height:38px;
    border-radius:50%;
    background:var(--gold);
    display:flex;align-items:center;justify-content:center;
    font-family:'Fraunces', serif;
    font-weight:700;
    font-size:18px;
    color:var(--teal-deep);
    box-shadow:0 3px 0 rgba(0,0,0,0.15);
    flex-shrink:0;
  }
  .brand-name{
    font-family:'Fraunces', serif;
    font-weight:600;
    font-size:22px;
    color:var(--cream-text);
    letter-spacing:0.01em;
  }
  .brand-name span{ color:var(--gold); }

  .hero-title, .hero-sub, .feature-list, .hero-foot{ display:none; }

  .form-panel{ width:100%; display:flex; flex-direction:column; align-items:center; }

  .card{
    width:100%;
    background:var(--paper);
    border-radius:var(--radius);
    padding:38px 30px 32px;
    position:relative;
    box-shadow:
      0 24px 48px -12px rgba(4,30,24,0.45),
      0 2px 0 rgba(255,255,255,0.5) inset;
    opacity:0;
    animation:riseIn .6s ease .1s forwards;
  }

  .card::before{
    content:"";
    position:absolute;
    top:-11px; left:0; right:0;
    height:22px;
    background:var(--paper);
    -webkit-mask-image:radial-gradient(circle at 10px 11px, transparent 10px, black 10.5px);
    mask-image:radial-gradient(circle at 10px 11px, transparent 10px, black 10.5px);
    -webkit-mask-size:20px 22px;
    mask-size:20px 22px;
    -webkit-mask-repeat:repeat-x;
    mask-repeat:repeat-x;
  }

  .stamp{
    position:absolute;
    top:20px; right:22px;
    width:58px;height:58px;
    border-radius:50%;
    border:2px solid var(--red);
    color:var(--red);
    display:flex;align-items:center;justify-content:center;
    text-align:center;
    font-family:'Fraunces', serif;
    font-weight:600;
    font-size:10.5px;
    line-height:1.15;
    letter-spacing:0.04em;
    transform:rotate(9deg);
    opacity:0.85;
    pointer-events:none;
  }

  .eyebrow{
    font-family:'JetBrains Mono', monospace;
    font-size:11.5px;
    letter-spacing:0.14em;
    text-transform:uppercase;
    color:var(--teal);
    margin:0 0 6px;
  }
  .card h1{
    font-family:'Fraunces', serif;
    font-weight:600;
    font-size:26px;
    margin:0 0 6px;
    color:var(--ink);
    max-width:78%;
  }
  .card-sub{
    margin:0 0 26px;
    font-size:14px;
    color:var(--ink-soft);
    line-height:1.5;
    max-width:85%;
  }

  .status-banner{
    background:var(--teal-pale);
    border:1px solid #BFE0D3;
    color:var(--teal-deep);
    font-size:13px;
    font-weight:600;
    border-radius:10px;
    padding:10px 12px;
    margin:0 0 18px;
  }

  .tear-divider{
    border:none;
    border-top:1.5px dashed var(--line);
    margin:0 0 24px;
  }

  form{ display:flex; flex-direction:column; gap:16px; }

  .field{ display:flex; flex-direction:column; gap:6px; }
  label{
    font-size:12.5px;
    font-weight:600;
    color:var(--ink);
    letter-spacing:0.01em;
  }
  .input-wrap{ position:relative; display:flex; align-items:center; }
  input{
    width:100%;
    font-family:'Plus Jakarta Sans', sans-serif;
    font-size:15px;
    color:var(--ink);
    background:#FFFFFF;
    border:1.5px solid var(--line);
    border-radius:12px;
    padding:13px 14px;
    outline:none;
    transition:border-color .15s ease, box-shadow .15s ease;
  }
  input::placeholder{ color:#B7AC96; }
  input:focus{ border-color:var(--teal); box-shadow:0 0 0 4px var(--teal-pale); }
  input.has-error{ border-color:var(--red); }
  input.has-error:focus{ box-shadow:0 0 0 4px #FBE1DC; }
  input[type="password"]{ padding-right:46px; }

  .toggle-pass{
    position:absolute;
    right:12px;
    background:none;
    border:none;
    cursor:pointer;
    padding:6px;
    color:var(--ink-soft);
    display:flex;
    border-radius:8px;
  }
  .toggle-pass:hover{ color:var(--teal); }
  .toggle-pass:focus-visible{ outline:2px solid var(--teal); outline-offset:2px; }

  .field-error{ font-size:12px; color:var(--red); margin:0; }

  .row-between{
    display:flex; align-items:center; justify-content:space-between;
    margin-top:-4px; flex-wrap:wrap; gap:8px;
  }
  .remember{ display:flex; align-items:center; gap:7px; font-size:13px; color:var(--ink-soft); }
  .remember input{ width:15px;height:15px; padding:0; accent-color:var(--teal); }
  .forgot{ font-size:13px; font-weight:600; color:var(--red); text-decoration:none; }
  .forgot:hover{ text-decoration:underline; }
  .forgot:focus-visible, a:focus-visible, button:focus-visible{
    outline:2px solid var(--teal); outline-offset:2px; border-radius:6px;
  }

  .submit{
    margin-top:6px; width:100%; border:none; border-radius:12px;
    padding:14px 18px; font-family:'Plus Jakarta Sans', sans-serif;
    font-size:15px; font-weight:700; letter-spacing:0.01em; color:var(--cream-text);
    background:linear-gradient(135deg, var(--teal) 0%, var(--teal-deep) 100%);
    cursor:pointer; box-shadow:0 10px 20px -8px rgba(14,110,92,0.55);
    transition:transform .12s ease, box-shadow .12s ease;
    display:flex; align-items:center; justify-content:center; gap:8px;
  }
  .submit:hover{ transform:translateY(-1px); box-shadow:0 14px 24px -8px rgba(14,110,92,0.6); }
  .submit:active{ transform:translateY(0); }

  .divider-or{
    display:flex; align-items:center; gap:12px; margin:22px 0 18px;
    color:#B7AC96; font-size:11.5px; letter-spacing:0.08em; text-transform:uppercase;
    font-family:'JetBrains Mono', monospace;
  }
  .divider-or::before, .divider-or::after{ content:""; flex:1; height:1px; background:var(--line); }

  .footer-note{ text-align:center; font-size:13.5px; color:var(--ink-soft); margin:0; }
  .footer-note a{ color:var(--teal); font-weight:700; text-decoration:none; }
  .footer-note a:hover{ text-decoration:underline; }

  .mobile-foot{
    text-align:center; margin-top:0; font-family:'JetBrains Mono', monospace;
    font-size:11.5px; color:rgba(255,249,240,0.55); letter-spacing:0.04em;
  }

  @keyframes riseIn{
    from{ opacity:0; transform:translateY(14px); }
    to{ opacity:1; transform:translateY(0); }
  }
  @media (prefers-reduced-motion: reduce){
    .hero-panel, .card{ animation:none; opacity:1; }
    .submit{ transition:none; }
  }

  /* ================= TABLET (>=640px) ================= */
  @media (min-width:640px){
    .layout{ max-width:560px; gap:34px; }
    .hero-panel{ gap:14px; }
    .brand{ margin-bottom:4px; }
    .hero-title{
      display:block;
      font-family:'Fraunces', serif;
      font-weight:600;
      font-size:32px;
      line-height:1.15;
      color:var(--cream-text);
      margin:0;
    }
    .hero-sub{
      display:block;
      font-size:15px;
      color:rgba(255,249,240,0.82);
      max-width:440px;
      line-height:1.6;
      margin:0;
    }
    .card{ padding:44px 40px 38px; }
  }

  /* ================= DESKTOP / LAPTOP (>=1024px) ================= */
  @media (min-width:1024px){
    body{ padding:40px; }
    .layout{
      max-width:1180px;
      flex-direction:row;
      align-items:center;
      justify-content:space-between;
      gap:0;
      min-height:calc(100dvh - 80px);
    }
    .hero-panel{
      align-items:flex-start;
      text-align:left;
      max-width:480px;
      gap:22px;
    }
    .brand{ justify-content:flex-start; }
    .hero-title{ font-size:44px; max-width:460px; }
    .hero-sub{ max-width:400px; }

    .feature-list{
      display:flex;
      flex-direction:column;
      gap:12px;
      list-style:none;
      margin:6px 0 0;
      padding:0;
    }
    .feature-list li{
      display:flex;
      align-items:center;
      gap:10px;
      font-size:14.5px;
      color:var(--cream-text);
      font-weight:500;
    }
    .feature-list li svg{ flex-shrink:0; color:var(--gold); }

    .hero-foot{
      display:block;
      margin-top:18px;
      font-family:'JetBrains Mono', monospace;
      font-size:11.5px;
      color:rgba(255,249,240,0.5);
      letter-spacing:0.04em;
    }

    .form-panel{ width:auto; flex-shrink:0; }
    .card{ width:420px; padding:44px 38px 36px; }
    .mobile-foot{ display:none; }
  }

  @media (min-width:1280px){
    .hero-title{ font-size:50px; }
    .card{ width:440px; }
  }

  /* small phones */
  @media (max-width:380px){
    .card{ padding:32px 22px 26px; }
    .card h1{ font-size:23px; max-width:100%; }
    .stamp{ width:50px;height:50px; font-size:9.5px; right:16px; top:16px; }
  }

  /* short viewports */
  @media (max-height:640px) and (max-width:1023px){
    body{ align-items:flex-start; padding-top:24px; padding-bottom:24px; }
    .card-sub{ margin-bottom:18px; }
  }
</style>
</head>
<body>

<div class="layout">

  <div class="hero-panel">
    <div class="brand">
      <div class="brand-badge">Rp</div>
      <div class="brand-name">Tagih<span>Kas</span></div>
    </div>

    <h2 class="hero-title">Kasbon warung,<br>akhirnya rapi.</h2>
    <p class="hero-sub">Satu tempat buat catat siapa yang masih ngutang, kapan jatuh temponya, dan tagih langsung lewat WhatsApp — tanpa buku tulis basah atau hilang.</p>

    <ul class="feature-list">
      <li>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        Catat kasbon dalam hitungan detik
      </li>
      <li>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        Tagih otomatis lewat WhatsApp
      </li>
      <li>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        Pantau piutang secara real-time
      </li>
    </ul>

    <p class="hero-foot">© 2026 TagihKas — Bayar belakangan, catat sekarang.</p>
  </div>

  <div class="form-panel">
    <div class="card">
      <div class="stamp">TANPA<br>RIBET</div>

      <p class="eyebrow">Buku kasbon digital</p>
      <h1>Masuk ke warung Anda</h1>
      <p class="card-sub">Catat kasbon, pantau piutang, dan tagih lewat WhatsApp dalam sekali klik.</p>

      @if (session('status'))
        <div class="status-banner">{{ session('status') }}</div>
      @endif

      <hr class="tear-divider">

      <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf

        <div class="field">
          <label for="identifier">Email atau No. HP</label>
          <div class="input-wrap">
            <input
              type="text"
              id="identifier"
              name="identifier"
              placeholder="contoh: 0812xxxxxxx"
              value="{{ old('identifier') }}"
              autocomplete="username"
              class="{{ $errors->has('identifier') ? 'has-error' : '' }}"
              required
              autofocus
            >
          </div>
          @error('identifier')
            <p class="field-error">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label for="password">Kata sandi</label>
          <div class="input-wrap">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Masukkan kata sandi"
              autocomplete="current-password"
              class="{{ $errors->has('password') ? 'has-error' : '' }}"
              required
            >
            <button type="button" class="toggle-pass" id="togglePass" aria-label="Tampilkan kata sandi" aria-pressed="false">
              <svg id="eyeIcon" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z"/><circle cx="12" cy="12" r="3"/></svg>
            </button>
          </div>
          @error('password')
            <p class="field-error">{{ $message }}</p>
          @enderror
        </div>

        <div class="row-between">
          <label class="remember">
            <input type="checkbox" id="remember" name="remember">
            Ingat saya
          </label>
          <a href="{{ route('passwordrequest') }}" class="forgot">Lupa kata sandi?</a>
        </div>

        <button type="submit" class="submit">
          Masuk
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </button>
      </form>

      <div class="divider-or">Warung baru</div>
      <p class="footer-note">Belum punya akun? <a href="{{ route('register') }}">Daftar gratis di sini</a></p>
    </div>

    <p class="mobile-foot">© 2026 TagihKas — Bayar belakangan, catat sekarang.</p>
  </div>

</div>

<script>
  const toggleBtn = document.getElementById('togglePass');
  const passInput = document.getElementById('password');
  const eyeIcon = document.getElementById('eyeIcon');

  toggleBtn.addEventListener('click', () => {
    const isPassword = passInput.type === 'password';
    passInput.type = isPassword ? 'text' : 'password';
    toggleBtn.setAttribute('aria-pressed', String(isPassword));
    toggleBtn.setAttribute('aria-label', isPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    eyeIcon.innerHTML = isPassword
      ? '<path d="M17.94 17.94A10.94 10.94 0 0 1 12 19c-7 0-11-7-11-7a21.6 21.6 0 0 1 5.06-6.06M9.9 4.24A10.94 10.94 0 0 1 12 4c7 0 11 7 11 7a21.6 21.6 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>'
      : '<path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z"/><circle cx="12" cy="12" r="3"/>';
  });
</script>

</body>
</html>
