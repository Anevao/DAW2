let libros = [
  {
    ISBN: "978-84-204-3571-8",
    TITULO: "Tiempos recios",
    AUTOR: "Mario Vargas Llosa",
    EDITORIAL: "Alfaguara",
    IMG: "tiemposRecios.jfif",
  },
  {
    ISBN: "978-84-204-3547-3",
    TITULO: "Sidi",
    AUTOR: "Arturo Pérez-Reverte",
    EDITORIAL: "Alfaguara",
    IMG: "sidi.jfif",
  },
  {
    ISBN: "978-84-17624-27-9",
    TITULO: "El último barco",
    AUTOR: "Domingo Villar",
    EDITORIAL: "Siruela",
    IMG: "barco.jfif",
  },
  {
    ISBN: "978-84-9199-137-3",
    TITULO: "Churchill",
    AUTOR: "Andrew Roberts",
    EDITORIAL: "Critica",
    IMG: "churchill.jfif",
  },
  {
    ISBN: "978-84-670-5701-0",
    TITULO: "Fracasologia",
    AUTOR: "María Elvira Roca Barea",
    EDITORIAL: "Espasa",
    IMG: "fracasologia.jfif",
  },
];
let tbody = document.querySelector("tbody");

for (let i = 0; i < libros.length; i++) {
  let nuevaFila = document.createElement("tr");
  nuevaFila.innerHTML += "<td>" + libros[i].TITULO + "</td>";
  nuevaFila.innerHTML += "<td>" + libros[i].AUTOR + "</td>";

  nuevaFila.innerHTML += "<td>" + libros[i].ISBN + "</td>";
  tbody.append(nuevaFila);
  // nuevaFila.innerHTML += "</tr><tr>";
}
//nuevaFila.innerHTML += "</tr>";
