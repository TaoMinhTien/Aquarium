document.addEventListener("DOMContentLoaded", function() {
    const monthElement = document.getElementById("month");
    const yearElement = document.getElementById("year");
    const calendarBody = document.getElementById("calendar-body");
  
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
  
    const months = [
        "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6",
        "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"
    ];
  
    function generateCalendar(month, year) {
        const totalDays = 32 - new Date(year, month, 32).getDate();
        const firstDayIndex = new Date(year, month, 1).getDay();
        
        calendarBody.innerHTML = "";
        
        for (let i = 0; i < firstDayIndex; i++) {
            const dayElement = document.createElement("div");
            calendarBody.appendChild(dayElement);
        }
  
        for (let i = 1; i <= totalDays; i++) {
            const dayElement = document.createElement("div");
            dayElement.textContent = i;
            calendarBody.appendChild(dayElement);
            if (i === today.getDate() && month === currentMonth && year === currentYear) {
                dayElement.classList.add("today");
            }
        }
  
        monthElement.textContent = months[month];
        yearElement.textContent = year;
    }
  
    generateCalendar(currentMonth, currentYear);
  
    function updateCalendar() {
        generateCalendar(currentMonth, currentYear);
    }
  
    document.getElementById("prev").addEventListener("click", () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        updateCalendar();
    });
  
    document.getElementById("next").addEventListener("click", () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        updateCalendar();
    });
  });
  