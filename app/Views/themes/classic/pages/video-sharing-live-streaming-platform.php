<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Sharing & Live Streaming Platform | Bintangdata</title>
    <style>
      :root {
        --bg: #101010;
        --bg-soft: #151515;
        --bg-card: #1c1c1c;
        --navy: #0d1525;
        --text: #ffffff;
        --muted: #a7a7a7;
        --primary: #246bff;
        --orange: #ff7a18;
        --cyan: #23bfff;
        --yellow: #ffc400;
        --border: rgba(255, 255, 255, 0.1);
        --shadow: 0 24px 80px rgba(0, 0, 0, 0.45);
        --radius: 28px;
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        font-family:
          Inter,
          ui-sans-serif,
          system-ui,
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          sans-serif;
        background: var(--bg);
        color: var(--text);
        overflow-x: hidden;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      .container {
        width: min(1180px, calc(100% - 40px));
        margin: 0 auto;
      }

      .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 50;
        background: rgba(16, 16, 16, 0.82);
        backdrop-filter: blur(18px);
        border-bottom: 1px solid var(--border);
      }

      .nav-inner {
        height: 84px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
      }

      .logo {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 30px;
        font-weight: 800;
        color: var(--orange);
        letter-spacing: -1.2px;
      }

      .logo-mark {
        width: 34px;
        height: 34px;
        border: 3px solid var(--orange);
        border-radius: 50%;
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      .logo-mark::before,
      .logo-mark::after {
        content: "";
        position: absolute;
        width: 46px;
        height: 12px;
        border: 3px solid var(--orange);
        border-radius: 50%;
        transform: rotate(35deg);
      }

      .logo-mark::after {
        transform: rotate(-35deg);
      }

      .logo-dot {
        width: 8px;
        height: 8px;
        background: var(--orange);
        border-radius: 999px;
        z-index: 1;
      }

      .nav-menu {
        display: flex;
        align-items: center;
        gap: 34px;
        color: #f0f0f0;
        font-size: 15px;
        font-weight: 600;
      }

      .nav-menu a,
      .nav-menu button {
        color: #f0f0f0;
        opacity: 0.9;
        background: transparent;
        border: 0;
        font: inherit;
        cursor: pointer;
      }

      .nav-menu a:hover,
      .nav-menu button:hover {
        opacity: 1;
        color: var(--orange);
      }

      .nav-actions {
        display: flex;
        align-items: center;
        gap: 24px;
        font-weight: 600;
      }

      .theme-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 1px solid var(--border);
        display: grid;
        place-items: center;
        color: #fff;
      }

      .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 52px;
        padding: 0 28px;
        border-radius: 8px;
        font-weight: 700;
        transition: 0.25s ease;
        border: 1px solid transparent;
        cursor: pointer;
      }

      .btn-primary {
        background: var(--primary);
        color: #fff;
        box-shadow: 0 14px 32px rgba(36, 107, 255, 0.28);
      }

      .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 18px 40px rgba(36, 107, 255, 0.42);
      }

      .btn-outline {
        border-color: var(--border);
        color: #fff;
        background: rgba(255, 255, 255, 0.04);
      }

      .btn-outline:hover {
        border-color: rgba(255, 255, 255, 0.28);
        background: rgba(255, 255, 255, 0.08);
      }

      .dropdown {
        position: relative;
      }

      .dropdown-menu {
        position: absolute;
        top: 44px;
        left: 50%;
        transform: translateX(-50%) translateY(14px);
        width: min(820px, calc(100vw - 40px));
        background: #070500;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 14px;
        box-shadow: var(--shadow);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: 0.25s ease;
        overflow: hidden;
      }

      .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateX(-50%) translateY(0);
      }

      .dropdown-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 290px;
        gap: 32px;
        padding: 28px 32px;
      }

      .dropdown h4 {
        margin-bottom: 16px;
        font-size: 17px;
      }

      .dropdown-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        color: var(--muted) !important;
        padding: 10px 0;
        line-height: 1.45;
      }

      .dropdown-item:hover {
        color: #fff !important;
      }

      .dropdown-preview {
        min-height: 260px;
        border-radius: 18px;
        background:
          linear-gradient(
            160deg,
            rgba(36, 107, 255, 0.45),
            rgba(18, 18, 18, 0.6)
          ),
          radial-gradient(
            circle at 90% 10%,
            rgba(35, 191, 255, 0.8),
            transparent 30%
          ),
          linear-gradient(135deg, #0d244d, #08081a 48%, #2c0f5a);
        padding: 22px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
        position: relative;
      }

      .dropdown-preview::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        right: -70px;
        bottom: -70px;
        background: rgba(255, 122, 24, 0.42);
        border-radius: 50%;
        filter: blur(6px);
      }

      .preview-card {
        position: relative;
        z-index: 1;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 14px;
        padding: 16px;
        backdrop-filter: blur(10px);
      }

      .preview-card strong {
        display: block;
        margin-bottom: 8px;
      }

      .preview-card span {
        color: rgba(255, 255, 255, 0.72);
        font-size: 13px;
        line-height: 1.5;
      }

      .mobile-toggle {
        display: none;
        background: transparent;
        color: #fff;
        border: 1px solid var(--border);
        width: 44px;
        height: 44px;
        border-radius: 12px;
        font-size: 22px;
      }

      .hero {
        position: relative;
        min-height: 100vh;
        padding: 150px 0 100px;
        background:
          radial-gradient(
            circle at 83% 17%,
            rgba(35, 191, 255, 0.08),
            transparent 25%
          ),
          radial-gradient(
            circle at 8% 98%,
            rgba(255, 196, 0, 0.18),
            transparent 22%
          ),
          linear-gradient(
            180deg,
            #151515 0%,
            #121212 70%,
            var(--navy) 70%,
            var(--navy) 100%
          );
        overflow: hidden;
      }

      .hero::before {
        content: "";
        position: absolute;
        right: 7%;
        top: 130px;
        width: 135px;
        height: 135px;
        border: 28px solid var(--cyan);
        border-radius: 34px;
        transform: rotate(-17deg);
        opacity: 0.96;
      }

      .hero::after {
        content: "";
        position: absolute;
        left: 5%;
        bottom: 55px;
        width: 290px;
        height: 290px;
        background: var(--yellow);
        border-radius: 50%;
        transform: translateY(48%);
      }

      .shape-orange {
        position: absolute;
        width: 82px;
        height: 82px;
        border: 20px solid var(--orange);
        border-radius: 24px;
        transform: rotate(-22deg);
        right: 44%;
        top: 52%;
        opacity: 0.96;
      }

      .shape-dot {
        position: absolute;
        right: 24%;
        top: 20%;
        width: 38px;
        height: 38px;
        background: #ff9c22;
        border-radius: 50%;
        transform: rotate(20deg);
      }

      .wave {
        position: absolute;
        left: 18%;
        right: 0;
        bottom: 78px;
        height: 110px;
        border-top: 2px dashed rgba(86, 79, 255, 0.55);
        border-radius: 50% 50% 0 0;
        transform: rotate(4deg);
        opacity: 0.75;
      }

      .hero-grid {
        position: relative;
        z-index: 2;
        display: grid;
        grid-template-columns: 0.93fr 1.07fr;
        align-items: center;
        gap: 42px;
      }

      .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: var(--cyan);
        font-weight: 800;
        font-size: 14px;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        margin-bottom: 20px;
      }

      .eyebrow::before {
        content: "";
        width: 34px;
        height: 2px;
        background: var(--cyan);
      }

      .hero h1 {
        font-size: clamp(46px, 5.2vw, 82px);
        line-height: 0.98;
        letter-spacing: -3px;
        max-width: 650px;
        margin-bottom: 26px;
      }

      .hero h1 span {
        color: var(--orange);
      }

      .hero p {
        max-width: 560px;
        color: var(--muted);
        font-size: 19px;
        line-height: 1.75;
        margin-bottom: 34px;
      }

      .hero-buttons {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 44px;
      }

      .hero-points {
        display: grid;
        gap: 13px;
        color: #b8b8b8;
        font-size: 15px;
      }

      .hero-points li {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .check {
        width: 19px;
        height: 19px;
        border-radius: 50%;
        border: 2px solid var(--primary);
        display: inline-grid;
        place-items: center;
        color: var(--primary);
        font-size: 11px;
        font-weight: 900;
      }

      .mockup-area {
        position: relative;
        min-height: 590px;
      }

      .laptop {
        position: absolute;
        right: 0;
        top: 74px;
        width: min(650px, 100%);
        filter: drop-shadow(0 40px 60px rgba(0, 0, 0, 0.55));
      }

      .laptop-screen {
        border: 4px solid rgba(255, 255, 255, 0.56);
        background: #080a14;
        border-radius: 22px 22px 10px 10px;
        padding: 18px;
        aspect-ratio: 16 / 9;
        overflow: hidden;
      }

      .app-topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
        color: #686d8d;
        font-size: 12px;
      }

      .searchbar {
        width: 180px;
        height: 24px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.06);
      }

      .app-layout {
        display: grid;
        grid-template-columns: 1.25fr 0.75fr;
        gap: 16px;
        height: calc(100% - 40px);
      }

      .video-main {
        display: grid;
        grid-template-rows: 1.1fr 0.9fr;
        gap: 16px;
      }

      .featured-video {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        background:
          linear-gradient(160deg, rgba(16, 24, 54, 0.1), rgba(2, 2, 12, 0.7)),
          radial-gradient(circle at 45% 25%, #843dff, transparent 25%),
          linear-gradient(135deg, #14234c, #080912 56%, #b73a28);
      }

      .play {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 70px;
        height: 70px;
        background: rgba(255, 255, 255, 0.16);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: grid;
        place-items: center;
        backdrop-filter: blur(8px);
      }

      .play::before {
        content: "";
        margin-left: 5px;
        width: 0;
        height: 0;
        border-top: 13px solid transparent;
        border-bottom: 13px solid transparent;
        border-left: 20px solid #fff;
      }

      .live-pill {
        position: absolute;
        top: 16px;
        left: 16px;
        background: #ff2759;
        color: #fff;
        border-radius: 999px;
        padding: 7px 12px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.04em;
      }

      .video-title {
        position: absolute;
        left: 16px;
        right: 16px;
        bottom: 15px;
      }

      .video-title strong {
        display: block;
        font-size: 16px;
        margin-bottom: 4px;
      }

      .video-title small {
        color: rgba(255, 255, 255, 0.68);
      }

      .video-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
      }

      .mini-video {
        border-radius: 14px;
        padding: 10px;
        min-height: 105px;
        display: flex;
        align-items: flex-end;
        font-size: 11px;
        font-weight: 700;
        background: linear-gradient(135deg, #1d2f65, #8122c5 58%, #df5b21);
      }

      .mini-video:nth-child(2) {
        background: linear-gradient(135deg, #20235c, #0a8999 58%, #181818);
      }

      .mini-video:nth-child(3) {
        background: linear-gradient(135deg, #43196f, #a3239b 58%, #ffb224);
      }

      .sidebar-panel {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: 18px;
        padding: 16px;
        overflow: hidden;
      }

      .panel-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 14px;
        font-size: 13px;
        font-weight: 800;
      }

      .create-btn {
        background: #7828ff;
        color: #fff;
        border-radius: 999px;
        padding: 7px 12px;
        font-size: 11px;
      }

      .stream-list {
        display: grid;
        gap: 12px;
      }

      .stream-card {
        display: grid;
        grid-template-columns: 58px 1fr;
        gap: 10px;
        align-items: center;
        background: rgba(255, 255, 255, 0.045);
        border-radius: 14px;
        padding: 8px;
      }

      .thumb {
        height: 48px;
        border-radius: 10px;
        background: linear-gradient(135deg, #2434a2, #ff7a18);
      }

      .stream-card:nth-child(2) .thumb {
        background: linear-gradient(135deg, #12a7d5, #5242ff);
      }
      .stream-card:nth-child(3) .thumb {
        background: linear-gradient(135deg, #222, #f1345b);
      }
      .stream-card:nth-child(4) .thumb {
        background: linear-gradient(135deg, #ff9d17, #6624ff);
      }

      .stream-card strong {
        display: block;
        font-size: 11px;
        margin-bottom: 4px;
      }

      .stream-card span {
        font-size: 10px;
        color: rgba(255, 255, 255, 0.55);
      }

      .laptop-base {
        width: 110%;
        height: 22px;
        margin-left: -5%;
        background: linear-gradient(180deg, #c5c8ce, #4b4f58);
        border-radius: 0 0 50% 50%;
      }

      .phone {
        position: absolute;
        left: 26px;
        bottom: 35px;
        width: 160px;
        background: #050607;
        border: 3px solid rgba(255, 255, 255, 0.65);
        border-radius: 34px;
        padding: 10px;
        box-shadow: 0 30px 70px rgba(0, 0, 0, 0.65);
      }

      .phone-screen {
        min-height: 310px;
        border-radius: 25px;
        background: #0b0d18;
        padding: 12px 10px;
        display: grid;
        gap: 9px;
      }

      .phone-hero {
        min-height: 120px;
        border-radius: 18px;
        background: linear-gradient(145deg, #4f25c8, #ff6725);
      }

      .phone-row {
        height: 38px;
        border-radius: 11px;
        background: rgba(255, 255, 255, 0.07);
      }

      section {
        padding: 95px 0;
        background: var(--navy);
      }

      .section-header {
        max-width: 720px;
        margin-bottom: 44px;
      }

      .section-header.center {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
      }

      .section-kicker {
        color: var(--orange);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.14em;
        font-size: 13px;
        margin-bottom: 14px;
      }

      .section-title {
        font-size: clamp(34px, 4vw, 56px);
        line-height: 1.05;
        letter-spacing: -1.8px;
        margin-bottom: 18px;
      }

      .section-desc {
        color: #aeb6c8;
        line-height: 1.8;
        font-size: 17px;
      }

      .feature-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
      }

      .feature-card {
        background: rgba(255, 255, 255, 0.045);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--radius);
        padding: 30px;
        min-height: 245px;
        transition: 0.25s ease;
      }

      .feature-card:hover {
        transform: translateY(-6px);
        background: rgba(255, 255, 255, 0.07);
      }

      .feature-icon {
        width: 58px;
        height: 58px;
        border-radius: 18px;
        background: rgba(36, 107, 255, 0.16);
        display: grid;
        place-items: center;
        font-size: 28px;
        margin-bottom: 24px;
      }

      .feature-card:nth-child(2) .feature-icon,
      .feature-card:nth-child(5) .feature-icon {
        background: rgba(255, 122, 24, 0.18);
      }

      .feature-card:nth-child(3) .feature-icon,
      .feature-card:nth-child(6) .feature-icon {
        background: rgba(35, 191, 255, 0.16);
      }

      .feature-card h3 {
        font-size: 21px;
        margin-bottom: 13px;
      }

      .feature-card p {
        color: #aeb6c8;
        line-height: 1.7;
      }

      .split-section {
        background: #101010;
      }

      .split-grid {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 54px;
        align-items: center;
      }

      .stat-card {
        background:
          radial-gradient(
            circle at 85% 10%,
            rgba(35, 191, 255, 0.16),
            transparent 28%
          ),
          linear-gradient(
            145deg,
            rgba(36, 107, 255, 0.16),
            rgba(255, 122, 24, 0.06)
          );
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 34px;
        padding: 34px;
        box-shadow: var(--shadow);
      }

      .stat-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
      }

      .stat-item {
        min-height: 135px;
        border-radius: 22px;
        padding: 22px;
        background: rgba(255, 255, 255, 0.055);
        border: 1px solid rgba(255, 255, 255, 0.08);
      }

      .stat-item strong {
        display: block;
        font-size: 34px;
        margin-bottom: 7px;
      }

      .stat-item span {
        color: #aeb6c8;
        font-size: 14px;
        line-height: 1.5;
      }

      .module-list {
        display: grid;
        gap: 16px;
      }

      .module-item {
        display: grid;
        grid-template-columns: 46px 1fr;
        gap: 16px;
        align-items: flex-start;
        padding: 20px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.07);
      }

      .module-number {
        width: 46px;
        height: 46px;
        border-radius: 16px;
        background: var(--primary);
        display: grid;
        place-items: center;
        font-weight: 900;
      }

      .module-item h4 {
        font-size: 18px;
        margin-bottom: 7px;
      }

      .module-item p {
        color: #aeb6c8;
        line-height: 1.65;
      }

      .pricing {
        background: var(--navy);
      }

      .cta-box {
        position: relative;
        overflow: hidden;
        text-align: center;
        border-radius: 38px;
        padding: 70px 30px;
        background:
          radial-gradient(
            circle at 20% 15%,
            rgba(255, 122, 24, 0.24),
            transparent 28%
          ),
          radial-gradient(
            circle at 80% 20%,
            rgba(35, 191, 255, 0.2),
            transparent 28%
          ),
          linear-gradient(
            145deg,
            rgba(36, 107, 255, 0.2),
            rgba(255, 255, 255, 0.05)
          );
        border: 1px solid rgba(255, 255, 255, 0.1);
      }

      .cta-box h2 {
        font-size: clamp(34px, 4vw, 58px);
        letter-spacing: -1.7px;
        margin-bottom: 18px;
      }

      .cta-box p {
        max-width: 650px;
        margin: 0 auto 32px;
        color: #c2cadb;
        line-height: 1.8;
        font-size: 17px;
      }

      footer {
        background: #080808;
        color: #a6a6a6;
        padding: 34px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
      }

      .footer-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
        font-size: 14px;
      }

      @media (max-width: 1024px) {
        .nav-menu,
        .nav-actions {
          display: none;
        }

        .mobile-toggle {
          display: inline-grid;
          place-items: center;
        }

        .hero-grid,
        .split-grid {
          grid-template-columns: 1fr;
        }

        .mockup-area {
          min-height: 560px;
        }

        .feature-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width: 720px) {
        .container {
          width: min(100% - 28px, 1180px);
        }

        .logo {
          font-size: 24px;
        }

        .hero {
          padding-top: 122px;
        }

        .hero h1 {
          letter-spacing: -1.8px;
        }

        .feature-grid,
        .stat-grid {
          grid-template-columns: 1fr;
        }

        .mockup-area {
          min-height: 440px;
        }

        .laptop {
          top: 20px;
        }

        .phone {
          width: 125px;
          left: 0;
          bottom: 35px;
        }

        .phone-screen {
          min-height: 230px;
        }

        .hero::before {
          width: 82px;
          height: 82px;
          border-width: 18px;
          right: -28px;
        }

        .hero::after {
          width: 180px;
          height: 180px;
        }
      }
    </style>
  </head>
  <body>
    <header class="navbar">
      <div class="container nav-inner">
        <a href="#" class="logo" aria-label="Bintangdata Home">
          <span class="logo-mark"><span class="logo-dot"></span></span>
          bintangdata
        </a>

        <nav class="nav-menu" aria-label="Main Navigation">
          <a href="#home">Home</a>
          <div class="dropdown">
            <button type="button">Our Services ▾</button>
            <div class="dropdown-menu">
              <div class="dropdown-grid">
                <div>
                  <h4>Development</h4>
                  <a href="#" class="dropdown-item">☰ Desktop Application</a>
                  <a href="#" class="dropdown-item">▧ Android Application</a>
                  <a href="#" class="dropdown-item">♙ iOS Application</a>
                  <a href="#" class="dropdown-item"
                    >⚡ Website Application Development</a
                  >
                  <a href="#" class="dropdown-item"
                    >⚙ Custom Software Development</a
                  >
                </div>
                <div>
                  <h4>Products</h4>
                  <a href="#" class="dropdown-item"
                    >Video Sharing & Live Streaming Platform</a
                  >
                  <a href="#" class="dropdown-item"
                    >Social Networking Platform</a
                  >
                  <a href="#" class="dropdown-item"
                    >Membership Community Platform</a
                  >
                  <a href="#" class="dropdown-item"
                    >News & Media Publishing Platform</a
                  >
                  <a href="#" class="dropdown-item"
                    >Social Commerce & Professional Platform</a
                  >
                </div>
                <div class="dropdown-preview">
                  <div class="preview-card">
                    <strong>Video Platform</strong>
                    <span
                      >Build scalable video sharing, streaming, creator
                      monetization, and community features in one
                      ecosystem.</span
                    >
                  </div>
                  <div class="preview-card">
                    <strong>Live Ready</strong>
                    <span
                      >Support real-time broadcasts, chat, content discovery,
                      and admin moderation tools.</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="#contact">Contact Us</a>
        </nav>

        <div class="nav-actions">
          <span class="theme-icon">☾</span>
          <a href="#signin">Sign In</a>
          <a href="#contact" class="btn btn-primary">Get Started</a>
        </div>

        <button class="mobile-toggle" type="button" aria-label="Open menu">
          ☰
        </button>
      </div>
    </header>

    <main>
      <section class="hero" id="home">
        <span class="shape-orange"></span>
        <span class="shape-dot"></span>
        <span class="wave"></span>

        <div class="container hero-grid">
          <div>
            <div class="eyebrow">Video Platform Development</div>
            <h1>
              Build the Future of <span>Video Sharing</span> & Live Streaming.
            </h1>
            <p>
              We develop enterprise-grade video sharing and live streaming
              platforms for creators, communities, media brands, and digital
              businesses.
            </p>

            <div class="hero-buttons">
              <a href="#features" class="btn btn-primary">Explore Features</a>
              <a href="#modules" class="btn btn-outline">View Modules</a>
            </div>

            <ul class="hero-points">
              <li>
                <span class="check">✓</span> Video Upload, Encoding & Playback
              </li>
              <li>
                <span class="check">✓</span> Live Streaming, Chat & Community
              </li>
              <li>
                <span class="check">✓</span> Admin Dashboard & Content
                Moderation
              </li>
            </ul>
          </div>

          <div
            class="mockup-area"
            aria-label="Video platform interface preview"
          >
            <div class="laptop">
              <div class="laptop-screen">
                <div class="app-topbar">
                  <span>⌘ VideoHub</span>
                  <span class="searchbar"></span>
                  <span>● ● ●</span>
                </div>
                <div class="app-layout">
                  <div class="video-main">
                    <div class="featured-video">
                      <span class="live-pill">● LIVE NOW</span>
                      <span class="play"></span>
                      <div class="video-title">
                        <strong>Future of AI Conference</strong>
                        <small>28.4K viewers watching</small>
                      </div>
                    </div>
                    <div class="video-grid">
                      <div class="mini-video">Creator Stories</div>
                      <div class="mini-video">Gaming Stream</div>
                      <div class="mini-video">Music Live</div>
                    </div>
                  </div>
                  <aside class="sidebar-panel">
                    <div class="panel-head">
                      <span>Continue Watching</span>
                      <span class="create-btn">+ Create</span>
                    </div>
                    <div class="stream-list">
                      <div class="stream-card">
                        <span class="thumb"></span>
                        <div>
                          <strong>Across The Metaverse</strong
                          ><span>1.2M views</span>
                        </div>
                      </div>
                      <div class="stream-card">
                        <span class="thumb"></span>
                        <div>
                          <strong>Nomadic Paths</strong
                          ><span>Live discussion</span>
                        </div>
                      </div>
                      <div class="stream-card">
                        <span class="thumb"></span>
                        <div>
                          <strong>Future of Sports</strong><span>Trending</span>
                        </div>
                      </div>
                      <div class="stream-card">
                        <span class="thumb"></span>
                        <div>
                          <strong>Creator Space</strong><span>New episode</span>
                        </div>
                      </div>
                    </div>
                  </aside>
                </div>
              </div>
              <div class="laptop-base"></div>
            </div>

            <div class="phone">
              <div class="phone-screen">
                <div class="phone-hero"></div>
                <div class="phone-row"></div>
                <div class="phone-row"></div>
                <div class="phone-row"></div>
                <div class="phone-row"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="features">
        <div class="container">
          <div class="section-header center">
            <div class="section-kicker">Core Features</div>
            <h2 class="section-title">
              Everything needed to launch your own video ecosystem.
            </h2>
            <p class="section-desc">
              From upload workflow to real-time live broadcasting, the platform
              can be customized for entertainment, education, media, community,
              or enterprise use cases.
            </p>
          </div>

          <div class="feature-grid">
            <article class="feature-card">
              <div class="feature-icon">▶</div>
              <h3>Video Sharing</h3>
              <p>
                Upload, categorize, publish, and manage videos with modern
                discovery pages, watch pages, and creator profiles.
              </p>
            </article>
            <article class="feature-card">
              <div class="feature-icon">●</div>
              <h3>Live Streaming</h3>
              <p>
                Enable live broadcasts with viewer count, live chat, stream
                schedule, and replay support after events end.
              </p>
            </article>
            <article class="feature-card">
              <div class="feature-icon">💬</div>
              <h3>Community Interaction</h3>
              <p>
                Support comments, likes, shares, follow system, notifications,
                and real-time audience engagement.
              </p>
            </article>
            <article class="feature-card">
              <div class="feature-icon">🛡</div>
              <h3>Content Moderation</h3>
              <p>
                Admin tools for reviewing videos, managing reports, controlling
                users, and monitoring platform activity.
              </p>
            </article>
            <article class="feature-card">
              <div class="feature-icon">📊</div>
              <h3>Analytics Dashboard</h3>
              <p>
                Track views, watch time, engagement rate, active users, creator
                performance, and content growth.
              </p>
            </article>
            <article class="feature-card">
              <div class="feature-icon">💳</div>
              <h3>Monetization Ready</h3>
              <p>
                Prepare subscription, membership, creator rewards, ads
                placement, and premium content options.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="split-section" id="modules">
        <div class="container split-grid">
          <div class="stat-card">
            <div class="stat-grid">
              <div class="stat-item">
                <strong>4K</strong><span>Adaptive video playback support</span>
              </div>
              <div class="stat-item">
                <strong>Live</strong
                ><span>Real-time stream and chat system</span>
              </div>
              <div class="stat-item">
                <strong>CMS</strong><span>Content management dashboard</span>
              </div>
              <div class="stat-item">
                <strong>API</strong><span>Scalable backend integration</span>
              </div>
            </div>
          </div>

          <div>
            <div class="section-header">
              <div class="section-kicker">Platform Modules</div>
              <h2 class="section-title">
                Flexible modules for web, mobile, and admin dashboard.
              </h2>
              <p class="section-desc">
                The platform can be developed as a complete product or
                module-by-module based on your business requirements.
              </p>
            </div>

            <div class="module-list">
              <div class="module-item">
                <div class="module-number">01</div>
                <div>
                  <h4>User & Creator Management</h4>
                  <p>
                    Registration, login, profile, creator channel, followers,
                    roles, and access control.
                  </p>
                </div>
              </div>
              <div class="module-item">
                <div class="module-number">02</div>
                <div>
                  <h4>Video & Live Content Management</h4>
                  <p>
                    Upload, metadata, thumbnail, category, schedule live events,
                    stream status, and replay archive.
                  </p>
                </div>
              </div>
              <div class="module-item">
                <div class="module-number">03</div>
                <div>
                  <h4>Engagement & Notification System</h4>
                  <p>
                    Comments, likes, shares, watch history, recommendations,
                    push notification, and real-time updates.
                  </p>
                </div>
              </div>
              <div class="module-item">
                <div class="module-number">04</div>
                <div>
                  <h4>Admin Dashboard & Reporting</h4>
                  <p>
                    Moderation queue, analytics, user reports, platform
                    settings, ad placement, and operational overview.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pricing" id="contact">
        <div class="container">
          <div class="cta-box">
            <h2>Ready to create your own video platform?</h2>
            <p>
              Build a custom video sharing and live streaming platform with
              scalable architecture, modern UI, and business-ready features.
            </p>
            <a href="mailto:hello@bintangdata.co.id" class="btn btn-primary"
              >Start Consultation</a
            >
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="container footer-inner">
        <span>© 2026 bintangdata. All rights reserved.</span>
        <span>Video Sharing & Live Streaming Platform Development</span>
      </div>
    </footer>
  </body>
</html>
