gsap.registerPlugin(ScrollTrigger);

// Animate Hero Title
gsap.to(".hero-title", {
  opacity: 1,
  y: -10,
  duration: 1.5,
  delay: 0.3,
  ease: "power3.out"
});

// Scroll Animations
gsap.utils.toArray(".section-title").forEach(title => {
  gsap.from(title, {
    scrollTrigger: title,
    y: 40,
    opacity: 0,
    duration: 1,
    ease: "power2.out"
  });
});

gsap.utils.toArray(".game-card").forEach(card => {
  gsap.from(card, {
    scrollTrigger: card,
    y: 50,
    opacity: 0,
    duration: 1,
    stagger: 0.2,
    ease: "power2.out"
  });
});

// ✅ Live player count updater using PHP proxy
const proxyEndpoint = "./api/roblox-proxy.php";

async function updateLivePlayerCount() {
  try {
    const res = await fetch(proxyEndpoint);
    const data = await res.json();

    if (!data || !data.data || !data.data[0]) {
      throw new Error("Unexpected API response");
    }

    const count = data.data[0].playing;
    document.getElementById('player-count').textContent = count.toLocaleString();
  } catch (err) {
    console.error("Proxy error:", err);
    document.getElementById('player-count').textContent = "N/A";
  }
}

updateLivePlayerCount();
setInterval(updateLivePlayerCount, 30000);

// 🎬 Intro Overlay Control
window.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    document.body.classList.add("intro-done");

    // Smooth scroll to hero
    const hero = document.querySelector(".hero");
    if (hero) {
      setTimeout(() => {
        hero.scrollIntoView({ behavior: "smooth" });
      }, 1000);
    }
  }, 3500); // 3.5 seconds intro duration
});


function spawnLogo() {
  const container = document.querySelector(".logo-rain");
  if (!container) return;

  const drop = document.createElement("div");
  drop.classList.add("logo-drop");

  // Random position and styling
  drop.style.left = `${Math.random() * 100}vw`;
  drop.style.animationDuration = `${2.5 + Math.random() * 2}s`;
  drop.style.animationDelay = "0s";
  const scale = 0.5 + Math.random() * 1.2;
  drop.style.transform = `scale(${scale}) rotate(${Math.random() * 360}deg)`;


  // Remove after animation
  drop.addEventListener("animationend", () => {
    drop.remove();
  });

  container.appendChild(drop);
}

// Call repeatedly
function startLogoRain(rate = 100) {
  setInterval(() => {
    spawnLogo();
  }, rate); // Spawn one logo every 100ms
}


window.addEventListener("DOMContentLoaded", () => {
  startLogoRain(100); // adjust rate if needed

  const wind = document.getElementById("wind-sfx");
  if (wind) {
    wind.volume = 0.4;
    wind.play().catch(() => {});
  }

  setTimeout(() => {
    document.body.classList.add("intro-done");

    const hero = document.querySelector(".hero");
    if (hero) {
      setTimeout(() => {
        hero.scrollIntoView({ behavior: "smooth" });
      }, 1000);
    }
  }, 3500);
});
