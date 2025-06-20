<?php
$page = 'boletin-luna';  // para estilos o lógica condicional
$pageTitle = 'Boletín Luna N°1 - 2025 Undertango Fondo de Inversión';
include '../includes/header.php';
?>

<header>
  <img class="logo-luna" src="https://cdn-icons-png.flaticon.com/512/3267/3267734.png" alt="Logo Luna"/>
  <h1>Boletín Luna N°1 - 2025 Undertango Fondo de Inversión</h1>
</header>

<div class="container">
  <div class="main">
    <!-- Sección de datos generales de la caja y variaciones -->
    <div class="info-box" id="infoBoxGeneral">
      <div>
        <h2>Caja Neta (AR$)</h2>
        <p class="large-text" id="valorCaja">Cargando...</p>
        <p class="variation" id="variacionCaja"></p>
      </div>
      <div>
        <h2>Valor de la Acción</h2>
        <p class="large-text" id="valorAccion">Cargando...</p>
        <p class="variation" id="variacionAccion"></p>
      </div>
    </div>

    <!-- Gráfico de evolución -->
    <div class="chart-container">
      <canvas id="chartEvolucion"></canvas>
    </div>

    <!-- Sección de tenedores, acciones, etc. -->
    <div class="grid-box">
      <div>
        <h3>Accionistas</h3>
        <ul id="listaAccionistas">
          <!-- Se llenará dinámicamente con p.ej. <li>Pablo: 100 acciones</li> -->
        </ul>
        <p class="bold-text">Total Acciones: <span id="accionesTotales">...</span></p>
        <p class="bold-text">Acciones Disponibles: <span id="accionesDisponibles">...</span></p>
      </div>
      <div>
        <h3>Retribución Mensual</h3>
        <p>Monto total a retribuir: <span class="bold-text" id="montoRetribucion">...</span></p>
        <p>Retribución por acción: <span class="bold-text" id="retribucionPorAccion">...</span></p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // [1] Claves de Airtable (en modo testing, se ponen en duro)
  const AIRTABLE_API_KEY = "TU_API_KEY";
  const BASE_ID = "appXXXXX";
  const TABLE_NAME = "fdi1";

  // [2] Variables globales para almacenar datos
  let cajaNetaActual = 0;
  let accionesTotales = 0;
  let accionesDisponibles = 0;
  let montoRetribucion = 0;
  let accionistasData = [];
  let historicoCaja = [];

  document.addEventListener("DOMContentLoaded", async () => {
    await fetchDatosAirtable();
    calcularValores();
    renderizarDatos();
    dibujarGrafico();
  });

  async function fetchDatosAirtable() {
    try {
      const response = await fetch(
        `https://api.airtable.com/v0/${BASE_ID}/${TABLE_NAME}`,
        { headers: { Authorization: `Bearer ${AIRTABLE_API_KEY}` } }
      );
      if (!response.ok) throw new Error("Error al obtener datos de Airtable");
      const data = await response.json();

      historicoCaja = [];
      accionistasData = [];

      data.records.forEach(record => {
        const fields = record.fields;
        if (fields.EsCajaActual === true) {
          cajaNetaActual = fields.CajaNeta || 0;
          accionesTotales = fields.AccionesTotales || 1;
          accionesDisponibles = fields.AccionesDisponibles || 0;
          montoRetribucion = fields.RetribucionMensual || 0;
          if (fields.Accionistas) {
            accionistasData = JSON.parse(fields.Accionistas);
          }
        }
        if (fields.Mes && fields.Anio && fields.CajaNeta) {
          historicoCaja.push({
            mes: fields.Mes,
            anio: fields.Anio,
            valor: fields.CajaNeta
          });
        }
      });
    } catch (error) {
      console.error("fetchDatosAirtable:", error);
    }
  }

  function calcularValores() {
    if (accionesTotales === 0) accionesTotales = 1;
  }

  function renderizarDatos() {
    document.getElementById("valorCaja").textContent = formatearMonto(cajaNetaActual);

    const valorAccionCalc = cajaNetaActual / accionesTotales;
    document.getElementById("valorAccion").textContent = formatearMonto(valorAccionCalc);

    if (historicoCaja.length > 1) {
      const penultimo = historicoCaja[historicoCaja.length - 2].valor || 1;
      const ultimo = historicoCaja[historicoCaja.length - 1].valor || 1;
      const variacionCaja = ((ultimo - penultimo) / penultimo) * 100;
      mostrarVariacion(variacionCaja, "variacionCaja");
    }

    if (historicoCaja.length > 1) {
      const penultimoCaja = historicoCaja[historicoCaja.length - 2].valor || 1;
      const penultimoValorAccion = penultimoCaja / accionesTotales;
      const valorAccionCalc = cajaNetaActual / accionesTotales;
      const variacionAccion = ((valorAccionCalc - penultimoValorAccion) / penultimoValorAccion) * 100;
      mostrarVariacion(variacionAccion, "variacionAccion");
    }

    const ulAccionistas = document.getElementById("listaAccionistas");
    ulAccionistas.innerHTML = "";
    accionistasData.forEach(a => {
      const li = document.createElement("li");
      li.textContent = `${a.nombre}: ${a.acciones} acciones`;
      ulAccionistas.appendChild(li);
    });

    document.getElementById("accionesTotales").textContent = accionesTotales;
    document.getElementById("accionesDisponibles").textContent = accionesDisponibles;

    document.getElementById("montoRetribucion").textContent = formatearMonto(montoRetribucion);
    const retribPorAccion = montoRetribucion / accionesTotales;
    document.getElementById("retribucionPorAccion").textContent = formatearMonto(retribPorAccion);
  }

  function dibujarGrafico() {
    const ctx = document.getElementById("chartEvolucion").getContext("2d");
    const labels = historicoCaja.map(item => `${item.mes} ${item.anio}`);
    const dataValues = historicoCaja.map(item => item.valor);

    new Chart(ctx, {
      type: "line",
      data: {
        labels: labels,
        datasets: [{
          label: "Evolución de la Caja Neta",
          data: dataValues,
          backgroundColor: "rgba(54, 162, 235, 0.2)",
          borderColor: "rgba(54, 162, 235, 1)",
          borderWidth: 2,
          fill: true
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: false,
            ticks: {
              callback: value => formatearMonto(value)
            }
          }
        }
      }
    });
  }

  function formatearMonto(num) {
    return new Intl.NumberFormat("es-AR", {
      style: "currency",
      currency: "ARS",
      maximumFractionDigits: 2
    }).format(num);
  }

  function mostrarVariacion(variacion, elementoId) {
    const spanVar = document.getElementById(elementoId);
    const vPorc = variacion.toFixed(2) + "%";

    if (variacion >= 0) {
      spanVar.textContent = "Var: +" + vPorc;
      spanVar.classList.add("green-text");
    } else {
      spanVar.textContent = "Var: " + vPorc;
      spanVar.classList.add("red-text");
    }
  }
</script>

<?php include '../includes/footer.php'; ?>
