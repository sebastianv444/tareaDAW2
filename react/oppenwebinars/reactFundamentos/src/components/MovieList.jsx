import React from 'react'

function MovieList() {
  const movies = ["Lord of the Rings","Star Wars", "Dune"];
  const HTMLMovies = movies.map((movie,index) => {
  /* Tengo que pasarle un key para diferenciar de manera correcta
  las etiquetas de la lista que se va crear con .map() , de lo contrario
  saltaria un error, ya que no estamos diferenciando las etiquetas con un key */
  return <p key={movie}>{index + 1} - {movie}</p>
  });

  return (
    <section>
        <h2>Movies</h2>
        {/* React renderizará automáticamente cada elemento del array en el DOM. Esto 
        funciona porque React puede procesar arrays de elementos JSX directamente, siempre
        y cuando el elemento a procesar sea elementos jsx.
        ¿Cuándo necesitas recorrer un array?
        Si HTMLMovies no es un array de elementos JSX, sino un array de datos (por ejemplo,
        objetos o strings), entonces sí necesitas recorrerlo para transformarlo en 
        elementos JSX. Esto se hace comúnmente con el método .map() dentro de {} en 
        este html. */}
        {HTMLMovies}
    </section>
  )
}

export default MovieList