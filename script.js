window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
  
    loader.classList.add("loader--hidden");
  
    loader.addEventListener("transitionend", () => {
      document.body.removeChild(loader);
    });
  });

  const timeElement = document.querySelector(".time");
  const dateElement = document.querySelector(".date");
  
  /**
   * @param {Date} date
   */
  function formatTime(date) {
    const hours12 = date.getHours() % 12 || 12;
    const minutes = date.getMinutes();
    const isAm = date.getHours() < 12;
  
    return `${hours12.toString().padStart(2, "0")}:${minutes
      .toString()
      .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
  }
  
  /**
   * @param {Date} date
   */
  function formatDate(date) {
    const DAYS = [
      "Domingo",
      "Lunes",
      "Martes",
      "Miercoles",
      "Jueves",
      "Viernes",
      "Sábado"
    ];
    const MONTHS = [
      "Enero",
      "Febrero",
      "Marzo",
      "Abril",
      "Mayo",
      "Junio",
      "Julio",
      "Agosto",
      "Septiembre",
      "Octubre",
      "Noviembre",
      "Diciembre"
    ];
  
    return `${DAYS[date.getDay()]}, ${
      MONTHS[date.getMonth()]
    } ${date.getDate()} ${date.getFullYear()}`;
  }
  
  setInterval(() => {
    const now = new Date();
  
    timeElement.textContent = formatTime(now);
    dateElement.textContent = formatDate(now);
  }, 200);

  document.getElementById("btnLogout").addEventListener("click", function () {
    window.location.href = "archivo_cerrar_sesion.php";
});
  
  