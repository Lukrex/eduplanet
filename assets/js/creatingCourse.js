// buttons
const back = document.getElementById("back");
const next = document.getElementById("next");

// sections
const s1 = document.getElementById("s1");
const s2 = document.getElementById("s2");
const s3 = document.getElementById("s3");
const s4 = document.getElementById("s4");
const s5 = document.getElementById("s5");
const s6 = document.getElementById("s6");
const s7 = document.getElementById("s7");
const s8 = document.getElementById("s8");
const s9 = document.getElementById("s9");
const s10 = document.getElementById("s10");
// ...

next.onclick = () => {
  if (s1.style.display === "block") {
    back.classList.remove("disabled");
    back.style.display = "block";
    s1.classList.add("slide-left-active");
    setTimeout(() => {
      s1.style.display = "none";
      s2.style.display = "block";
      s1.classList.remove("slide-left-active");
      s2.classList.add("slide-left");
      setTimeout(() => {
        s2.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s2.style.display === "block") {
    s2.classList.add("slide-left-active");
    setTimeout(() => {
      s2.style.display = "none";
      s3.style.display = "block";
      s2.classList.remove("slide-left-active");
      s3.classList.add("slide-left");
      setTimeout(() => {
        s3.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s3.style.display === "block") {
    s3.classList.add("slide-left-active");
    setTimeout(() => {
      s3.style.display = "none";
      s4.style.display = "block";
      s3.classList.remove("slide-left-active");
      s4.classList.add("slide-left");
      setTimeout(() => {
        s4.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s4.style.display === "block") {
    s4.classList.add("slide-left-active");
    setTimeout(() => {
      s4.style.display = "none";
      s5.style.display = "block";
      s4.classList.remove("slide-left-active");
      s5.classList.add("slide-left");
      setTimeout(() => {
        s5.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s5.style.display === "block") {
    s5.classList.add("slide-left-active");
    setTimeout(() => {
      s5.style.display = "none";
      s6.style.display = "block";
      s5.classList.remove("slide-left-active");
      s6.classList.add("slide-left");
      setTimeout(() => {
        s6.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s6.style.display === "block") {
    s6.classList.add("slide-left-active");
    setTimeout(() => {
      s6.style.display = "none";
      s7.style.display = "block";
      s6.classList.remove("slide-left-active");
      s7.classList.add("slide-left");
      setTimeout(() => {
        s7.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s7.style.display === "block") {
    s7.classList.add("slide-left-active");
    setTimeout(() => {
      s7.style.display = "none";
      s8.style.display = "block";
      s7.classList.remove("slide-left-active");
      s8.classList.add("slide-left");
      setTimeout(() => {
        s8.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s8.style.display === "block") {
    s8.classList.add("slide-left-active");
    setTimeout(() => {
      s8.style.display = "none";
      s9.style.display = "block";
      s8.classList.remove("slide-left-active");
      s9.classList.add("slide-left");
      setTimeout(() => {
        s9.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s9.style.display === "block") {
    next.innerHTML = "Finish";
    s9.classList.add("slide-left-active");
    setTimeout(() => {
      s9.style.display = "none";
      s10.style.display = "block";
      s9.classList.remove("slide-left-active");
      s10.classList.add("slide-left");
      setTimeout(() => {
        s10.classList.remove("slide-left");
      }, 250);
    }, "250");
  } else if (s10.style.display === "block") {
    // something
  }
};
back.onclick = () => {
  if (s2.style.display === "block") {
    back.classList.add("disabled");
    s2.classList.add("slide-right-active");
    setTimeout(() => {
      s2.style.display = "none";
      s1.style.display = "block";
      s2.classList.remove("slide-right-active");
      s1.classList.add("slide-right");
      setTimeout(() => {
        s1.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s3.style.display === "block") {
    s3.classList.add("slide-right-active");
    setTimeout(() => {
      s3.style.display = "none";
      s2.style.display = "block";
      s3.classList.remove("slide-right-active");
      s2.classList.add("slide-right");
      setTimeout(() => {
        s2.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s4.style.display === "block") {
    s4.classList.add("slide-right-active");
    setTimeout(() => {
      s4.style.display = "none";
      s3.style.display = "block";
      s4.classList.remove("slide-right-active");
      s3.classList.add("slide-right");
      setTimeout(() => {
        s3.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s5.style.display === "block") {
    s5.classList.add("slide-right-active");
    setTimeout(() => {
      s5.style.display = "none";
      s4.style.display = "block";
      s5.classList.remove("slide-right-active");
      s4.classList.add("slide-right");
      setTimeout(() => {
        s4.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s6.style.display === "block") {
    s6.classList.add("slide-right-active");
    setTimeout(() => {
      s6.style.display = "none";
      s5.style.display = "block";
      s6.classList.remove("slide-right-active");
      s5.classList.add("slide-right");
      setTimeout(() => {
        s5.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s7.style.display === "block") {
    s7.classList.add("slide-right-active");
    setTimeout(() => {
      s7.style.display = "none";
      s6.style.display = "block";
      s7.classList.remove("slide-right-active");
      s6.classList.add("slide-right");
      setTimeout(() => {
        s6.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s8.style.display === "block") {
    s8.classList.add("slide-right-active");
    setTimeout(() => {
      s8.style.display = "none";
      s7.style.display = "block";
      s8.classList.remove("slide-right-active");
      s7.classList.add("slide-right");
      setTimeout(() => {
        s7.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s9.style.display === "block") {
    s9.classList.add("slide-right-active");
    setTimeout(() => {
      s9.style.display = "none";
      s8.style.display = "block";
      s9.classList.remove("slide-right-active");
      s8.classList.add("slide-right");
      setTimeout(() => {
        s8.classList.remove("slide-right");
      }, 250);
    }, "250");
  } else if (s10.style.display === "block") {
    next.innerHTML = "Next";
    s10.classList.add("slide-right-active");
    setTimeout(() => {
      s10.style.display = "none";
      s9.style.display = "block";
      s10.classList.remove("slide-right-active");
      s9.classList.add("slide-right");
      setTimeout(() => {
        s9.classList.remove("slide-right");
      }, 250);
    }, "250");
  }
};

//
