if (window.innerWidth < 768) {
  [].slice
    .call(document.querySelectorAll("[data-bss-disabled-mobile]"))
    .forEach(function (elem) {
      elem.classList.remove("animated");
      elem.removeAttribute("data-bss-hover-animate");
      elem.removeAttribute("data-aos");
    });
}

document.addEventListener(
  "DOMContentLoaded",
  function () {
    AOS.init();

    (function () {
      if (!("requestAnimationFrame" in window)) return;
      if (/Mobile|Android/.test(navigator.userAgent)) return;

      const backgrounds = [];
      const parallaxBackgrounds = document.querySelectorAll(
        "[data-bss-parallax-bg]"
      );

      for (const el of parallaxBackgrounds) {
        const bg = document.createElement("div");

        bg.style.backgroundImage = el.style.backgroundImage;
        bg.style.backgroundSize = "cover";
        bg.style.backgroundPosition = "center";
        bg.style.position = "absolute";
        bg.style.height = "200%";
        bg.style.width = "100%";
        bg.style.top = 0;
        bg.style.left = 0;
        bg.style.zIndex = -100;

        el.appendChild(bg);
        backgrounds.push(bg);

        el.style.position = "relative";
        el.style.background = "transparent";
        el.style.overflow = "hidden";
      }

      if (!backgrounds.length) return;

      const visible = [];
      let scheduled;

      window.addEventListener("scroll", scroll);
      window.addEventListener("resize", scroll);

      scroll();

      function scroll() {
        visible.length = 0;

        for (let i = 0; i < backgrounds.length; i++) {
          const rect = backgrounds[i].parentNode.getBoundingClientRect();

          if (rect.bottom > 0 && rect.top < window.innerHeight) {
            visible.push({
              rect,
              node: backgrounds[i],
            });
          }
        }

        cancelAnimationFrame(scheduled);

        if (visible.length) {
          scheduled = requestAnimationFrame(update);
        }
      }

      function update() {
        for (let i = 0; i < visible.length; i++) {
          const rect = visible[i].rect;
          const node = visible[i].node;

          const quot =
            Math.max(rect.bottom, 0) / (window.innerHeight + rect.height);

          node.style.transform = "translate3d(0, " + -50 * quot + "%, 0)";
        }
      }
    })();

    const charts = document.querySelectorAll("[data-bss-chart]");

    for (const chart of charts) {
      chart.chart = new Chart(chart, JSON.parse(chart.dataset.bssChart));
    }
  },
  false
);
