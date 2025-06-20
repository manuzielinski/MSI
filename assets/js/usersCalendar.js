async function loadEvents() {
  showLoading(true);

  try {
    const url = `/UnderTangoNEW/includes/config/getEvents.php?year=${currentYear}&month=${currentMonth + 1}`
    console.log("Cargando eventos desde:", url);

    const response = await fetch(url);

    if (!response.ok) {
      throw new Error(`HTTP ${response.status} - ${response.statusText}`);
    }

    const data = await response.json();

    if (!data.success) {
      throw new Error("El servidor respondió con success: false");
    }

    events = data.events.map((record) => ({
      id: record.id,
      ...record.fields,
      fecha: record.fields.fecha.trim(),
    }));

    console.log("Eventos procesados:", events);

    renderCalendar();
  } catch (error) {
    console.error("Error loading events:", error);
    calendarGrid.innerHTML = `<div class="loading">Error al cargar eventos: ${error.message}</div>`;
  } finally {
    showLoading(false);
  }
}


function renderCalendar() {
  calendarGrid.innerHTML = ""

  const firstDay = new Date(currentYear, currentMonth, 1)
  const lastDay = new Date(currentYear, currentMonth + 1, 0)
  const daysInMonth = lastDay.getDate()
  let startingDay = firstDay.getDay() - 1
  if (startingDay === -1) startingDay = 6

  for (let i = 0; i < startingDay; i++) {
    const emptyDay = document.createElement("div")
    emptyDay.className = "day empty"
    calendarGrid.appendChild(emptyDay)
  }

  for (let day = 1; day <= daysInMonth; day++) {
    const dateStr = `${currentYear}-${String(currentMonth + 1).padStart(2, "0")}-${String(day).padStart(2, "0")}`

    const dayEvents = events.filter((event) => event.fecha === dateStr)

    console.log(`Buscando eventos para ${dateStr}:`, dayEvents) // 🔍 comparación de fecha

    const dayElement = document.createElement("div")
    dayElement.className = `day ${dayEvents.length > 0 ? "has-events" : ""}`

    const dayOfWeek = new Date(currentYear, currentMonth, day).getDay()
    const adjustedDayOfWeek = dayOfWeek === 0 ? 6 : dayOfWeek - 1

    const dayWeekLabel = document.createElement("div")
    dayWeekLabel.className = "day-week-label"
    dayWeekLabel.textContent = weekDaysShort[adjustedDayOfWeek]
    dayElement.appendChild(dayWeekLabel)

    const dayNumber = document.createElement("div")
    dayNumber.className = "day-number"
    dayNumber.textContent = day
    dayElement.appendChild(dayNumber)

    dayEvents.forEach((event) => {
      const eventElement = document.createElement("div")
      eventElement.className = "event"

      const style = getLugarStyle(event.lugar)
      Object.assign(eventElement.style, {
        ...style,
        marginTop: "4px",
        padding: "4px",
        borderLeft: `4px solid ${style.borderLeftColor}`,
        borderRadius: "4px",
        color: "#fff",
        fontSize: "0.75rem",
      })

      if (event.nombre) {
        const eventTitle = document.createElement("div")
        eventTitle.className = "event-title"
        eventTitle.textContent = event.nombre
        eventTitle.style.fontWeight = "bold"
        eventElement.appendChild(eventTitle)
      }

      if (event.hora) {
        const eventTime = document.createElement("div")
        eventTime.className = "event-time"
        eventTime.innerHTML = `<i class="fas fa-clock icon"></i> ${event.hora}`
        eventElement.appendChild(eventTime)
      }

      if (event.lugar) {
        const eventLocation = document.createElement("div")
        eventLocation.className = "event-location"
        eventLocation.innerHTML = `<i class="fas fa-map-marker-alt icon"></i> ${event.lugar}`
        eventElement.appendChild(eventLocation)
      }

      dayElement.appendChild(eventElement)
    })

    calendarGrid.appendChild(dayElement)
  }
}
