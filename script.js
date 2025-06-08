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
const proxyEndpoint = "./api/roblox-proxy.php"; // Adjust path if needed

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

// Initial fetch and refresh every 30 seconds
updateLivePlayerCount();
setInterval(updateLivePlayerCount, 30000);
