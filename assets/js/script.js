const units = document.getElementsByClassName("unit");
const exits = document.getElementsByClassName("exit");

for (const unit of units) {
  unit.addEventListener("click", () => {
    if (unit.firstElementChild.style.display === "none") {
      unit.firstElementChild.classList.add("open");
      unit.firstElementChild.classList.remove("close");
      unit.firstElementChild.style.display = "initial";
      setTimeout(() => {
        unit.lastElementChild.style.display = "block";
        for (const exit of exits) {
          exit.addEventListener("click", () => {
            exit.style.display = "none";
            const lframe = exit.parentElement.firstElementChild;
            lframe.classList.remove("open");
            lframe.classList.add("close");
            setTimeout(() => {
              lframe.style.display = "none";
            }, "500");
          });
        }
      }, "500");
    }
  });
}
