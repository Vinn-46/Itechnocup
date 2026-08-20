<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lupa Kata Sandi – TagihKas</title>
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
    max-width:440px;
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
  .brand{ display:flex; align-items:center; justify-content:center; gap:10px; }
  .brand-badge{
    width:38px;height:38px; border-radius:50%; background:var(--gold);
    display:flex;align-items:center;justify-content:center;
    font-family:'Fraunces', serif; font-weight:700; font-size:18px; color:var(--teal-deep);
    box-shadow:0 3px 0 rgba(0,0,0,0.15); flex-shrink:0;
  }
  .brand-name{ font-family:'Fraunces', serif; font-weight:600; font-size:22px; color:var(--cream-text); letter-spacing:0.01em; }
  .brand-name span{ color:var(--gold); }

  .hero-title, .hero-sub, .feature-list, .hero-foot{ display:none; }

  .form-panel{ width:100%; display:flex; flex-direction:column; align-items:center; }

  .card{
    width:100%;
    background:var(--paper);
    border-radius:var(--radius);
    padding:38px 30px 32px;
    position:relative;
    box-shadow:0 24px 48px -12px rgba(4,30,24,0.45), 0 2px 0 rgba(255,255,255,0.5) inset;
    opacity:0;
    animation:riseIn .6s ease .1s forwards;
  }
  .card::before{
    content:"";
    position:absolute; top:-11px; left:0; right:0; height:22px;
    background:var(--paper);
    -webkit-mask-image:radial-gradient(circle at 10px 11px, transparent 10px, black 10.5px);
    mask-image:radial-gradient(circle at 10px 11px, transparent 10px, black 10.5px);
    -webkit-mask-size:20px 22px; mask-size:20px 22px;
    -webkit-mask-repeat:repeat-x; mask-repeat:repeat-x;
  }

  .stamp{
    position:absolute; top:20px; right:22px; width:58px;height:58px;
    border-radius:50%; border:2px solid var(--red); color:var(--red);
    display:flex;align-items:center;justify-content:center; text-align:center;
    font-family:'Fraunces', serif; font-weight:600; font-size:10px; line-height:1.15;
    letter-spacing:0.03em; transform:rotate(9deg); opacity:0.85; pointer-events:none;
  }

  .key-icon-wrap{
    width:52px; height:52px; border-radius:50%; background:var(--teal-pale);
    display:flex; align-items:center; justify-content:center; color:var(--teal);
    margin-bottom:18px;
  }

  .eyebrow{
    font-family:'JetBrains Mono', monospace; font-size:11.5px; letter-spacing:0.14em;
    text-transform:uppercase; color:var(--teal); margin:0 0 6px;
  }
  .card h1{
    font-family:'Fraunces', serif; font-weight:600; font-size:26px;
    margin:0 0 8px; color:var(--ink); max-width:90%;
  }
  .card-sub{ margin:0 0 26px; font-size:14px; color:var(--ink-soft); line-height:1.55; max-width:95%; }

  .status-banner{
    background:var(--teal-pale); border:1px solid #BFE0D3; color:var(--teal-deep);
    font-size:13px; font-weight:600; border-radius:10px; padding:10px 12px; margin:0 0 18px;
    display:flex; align-items:flex-start; gap:8px;
  }
  .status-banner svg{ flex-shrink:0; margin-top:1px; }

  .tear-divider{ border:none; border-top:1.5px dashed var(--line); margin:0 0 24px; }

  form{ display:flex; flex-direction:column; gap:16px; }

  .field{ display:flex; flex-direction:column; gap:6px; }
  label{ font-size:12.5px; font-weight:600; color:var(--ink); letter-spacing:0.01em; }
  .input-wrap{ position:relative; display:flex; align-items:center; }
  input{
    width:100%; font-family:'Plus Jakarta Sans', sans-serif; font-size:15px; color:var(--ink);
    background:#FFFFFF; border:1.5px solid var(--line); border-radius:12px; padding:13px 14px;
    outline:none; transition:border-color .15s ease, box-shadow .15s ease;
  }
  input::placeholder{ color:#B7AC96; }
  input:focus{ border-color:var(--teal); box-shadow:0 0 0 4px var(--teal-pale); }
  input.has-error{ border-color:var(--red); }
  input.has-error:focus{ box-shadow:0 0 0 4px #FBE1DC; }

  .field-error{ font-size:12px; color:var(--red); margin:0; }

  .submit{
    margin-top:4px; width:100%; border:none; border-radius:12px; padding:14px 18px;
    font-family:'Plus Jakarta Sans', sans-serif; font-size:15px; font-weight:700;
    letter-spacing:0.01em; color:var(--cream-text);
    background:linear-gradient(135deg, var(--teal) 0%, var(--teal-deep) 100%);
    cursor:pointer; box-shadow:0 10px 20px -8px rgba(14,110,92,0.55);
    transition:transform .12s ease, box-shadow .12s ease;
    display:flex; align-items:center; justify-content:center; gap:8px;
  }
  .submit:hover{ transform:translateY(-1px); box-shadow:0 14px 24px -8px rgba(14,110,92,0.6); }
  .submit:active{ transform:translateY(0); }

  .back-link{
    display:flex; align-items:center; justify-content:center; gap:6px;
    margin-top:22px; font-size:13.5px; font-weight:600; color:var(--teal); text-decoration:none;
  }
  .back-link:hover{ text-decoration:underline; }
  a:focus-visible, button:focus-visible{ outline:2px solid var(--teal); outline-offset:2px; border-radius:6px; }

  .footer-note{ text-align:center; font-size:13.5px; color:var(--ink-soft); margin:18px 0 0; }
  .footer-note a{ color:var(--teal); font-weight:700; text-decoration:none; }
  .footer-note a:hover{ text-decoration:underline; }

  .mobile-foot{
    text-align:center; margin-top:0; font-family:'JetBrains Mono', monospace;
    font-size:11.5px; color:rgba(255,249,240,0.55); letter-spacing:0.04em;
  }

  @keyframes riseIn{ from{ opacity:0; transform:translateY(14px); } to{ opacity:1; transform:translateY(0); } }
  @media (prefers-reduced-motion: reduce){
    .hero-panel, .card{ animation:none; opacity:1; }
    .submit{ transition:none; }
  }

  @media (min-width:640px){
    .layout{ max-width:540px; gap:34px; }
    .hero-panel{ gap:14px; }
    .brand{ margin-bottom:4px; }
    .hero-title{
      display:block; font-family:'Fraunces', serif; font-weight:600; font-size:30px;
      line-height:1.15; color:var(--cream-text); margin:0;
    }
    .hero-sub{
      display:block; font-size:15px; color:rgba(255,249,240,0.82);
      max-width:420px; line-height:1.6; margin:0;
    }
    .card{ padding:44px 40px 38px; }
  }

  @media (min-width:1024px){
    body{ padding:40px; }
    .layout{
      max-width:1100px; flex-direction:row; align-items:center; justify-content:space-between;
      gap:0; min-height:calc(100dvh - 80px);
    }
    .hero-panel{ align-items:flex-start; text-align:left; max-width:460px; gap:22px; }
    .brand{ justify-content:flex-start; }
    .hero-title{ font-size:40px; max-width:440px; }
    .hero-sub{ max-width:380px; }

    .feature-list{ display:flex; flex-direction:column; gap:12px; list-style:none; margin:6px 0 0; padding:0; }
    .feature-list li{ display:flex; align-items:center; gap:10px; font-size:14.5px; color:var(--cream-text); font-weight:500; }
    .feature-list li svg{ flex-shrink:0; color:var(--gold); }

    .hero-foot{
      display:block; margin-top:18px; font-family:'JetBrains Mono', monospace;
      font-size:11.5px; color:rgba(255,249,240,0.5); letter-spacing:0.04em;
    }

    .form-panel{ width:auto; flex-shrink:0; }
    .card{ width:410px; padding:44px 38px 36px; }
    .mobile-foot{ display:none; }
  }

  @media (min-width:1280px){
    .hero-title{ font-size:46px; }
    .card{ width:430px; }
  }

  @media (max-width:380px){
    .card{ padding:32px 22px 26px; }
    .card h1{ font-size:22px; }
    .stamp{ width:48px;height:48px; font-size:8.5px; right:14px; top:14px; }
  }

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

    <h2 class="hero-title">Tenang, catatan<br>kasbon Anda aman.</h2>
    <p class="hero-sub">Kami akan bantu Anda masuk kembali dalam beberapa menit. Semua data pelanggan dan riwayat kasbon tetap tersimpan.</p>

    <ul class="feature-list">
      <li>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        Tautan reset dikirim dalam hitungan detik
      </li>
      <li>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        Data kasbon Anda tidak akan hilang
      </li>
      <li>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
        Proses aman dan terenkripsi
      </li>
    </ul>

    <p class="hero-foot">© 2026 TagihKas — Bayar belakangan, catat sekarang.</p>
  </div>

  <div class="form-panel">
    <div class="card">
      <div class="stamp">AMAN &<br>CEPAT</div>

      <div class="key-icon-wrap">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="7.5" cy="15.5" r="5.5"/><path d="m21 2-9.6 9.6M15.5 7.5 18 5l3 3-2.5 2.5"/></svg>
      </div>

      <p class="eyebrow">Reset kata sandi</p>
      <h1>Lupa kata sandi?</h1>
      <p class="card-sub">Tidak masalah. Masukkan email atau nomor HP yang terdaftar, kami kirimkan tautan untuk mengatur ulang kata sandi Anda.</p>

      @if (session('status'))
        <div class="status-banner">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
          {{ session('status') }}
        </div>
      @endif

      <hr class="tear-divider">

      <form method="POST" action="{{ route('passwordemail') }}" novalidate>
        @csrf

        <div class="field">
          <label for="identifier">Email atau No. HP terdaftar</label>
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

        <button type="submit" class="submit">
          Kirim Tautan Reset
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </button>
      </form>

      <a href="{{ route('login') }}" class="back-link">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        Kembali ke halaman masuk
      </a>

      <p class="footer-note">Belum punya akun? <a href="{{ route('register') }}">Daftar gratis di sini</a></p>
    </div>

    <p class="mobile-foot">© 2026 TagihKas — Bayar belakangan, catat sekarang.</p>
  </div>

</div>

</body>
</html>
