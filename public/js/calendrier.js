let currentMonth = document.querySelector(".current-month");
let calendarDays = document.querySelector(".calendar-days");
let today = new Date();
let date = new Date(); // Initialize with current date

// Affichage du mois en cours au chargement initial
currentMonth.textContent = date.toLocaleDateString("en-US", { month: 'long', year: 'numeric' });
today.setHours(0, 0, 0, 0);

// Appel de renderCalendar() au chargement initial et après chaque changement de date
renderCalendar(); // Render calendar immediately
document.addEventListener("DOMContentLoaded", function () {
  renderCalendar();
});

function renderCalendar() {
  const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
  const totalMonthDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
  const startWeekDay = new Date(date.getFullYear(), date.getMonth(), 0).getDay();

  calendarDays.innerHTML = "";

  // Modifiez la boucle ici :
  for (let i = 1; i <= totalMonthDay; i++) {
    let day = i; // Pas besoin de décalage ici

    date.setDate(day);
    date.setHours(0, 0, 0, 0);

    let dayClass = date.getTime() === today.getTime() ? 'current-day' : 'month-day';
    calendarDays.innerHTML += `<div class="${dayClass}">${day}</div>`;
  }
}

document.querySelectorAll(".month-btn").forEach(function (element) {
  element.addEventListener("click", function () {
    date = new Date(currentMonth.textContent);
    date.setMonth(date.getMonth() + (element.classList.contains("prev") ? -1 : 1));
    currentMonth.textContent = date.toLocaleDateString("en-US", { month: 'long', year: 'numeric' });
    renderCalendar();
  });
});

document.querySelectorAll(".btn").forEach(function (element) {
  element.addEventListener("click", function () {
    let btnClass = element.classList;
    date = new Date(currentMonth.textContent);
    if (btnClass.contains("today"))
      date = new Date();
    else if (btnClass.contains("prev-year"))
      date = new Date(date.getFullYear() - 1, 0, 1);
    else
      date = new Date(date.getFullYear() + 1, 0, 1);

    currentMonth.textContent = date.toLocaleDateString("en-US", { month: 'long', year: 'numeric' });
    renderCalendar();
  });
});
