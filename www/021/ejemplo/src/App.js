import React,{ useState } from 'react';
import { Container } from 'react-bootstrap';
import { Paginas } from './components/Paginas';
import { Noticias } from './components/Noticias';
import { TraductorHTML } from './components/TraductorHTML';

const App = function() {

  const paginasFavoritas = ["https://misutmeeple.com/",
                            "http://mishigeek.com/",
                            "https://analisisalcubo.es/",
                            "https://donmeeple.com/"
                            ]

  const [paginaFavoritaSeleccionada, setPaginaFavoritaSeleccionada] = useState(paginasFavoritas[0]);

  return (
    <Container>
      <h1>Componentes</h1>
      <Paginas paginasFavoritas={paginasFavoritas} setPaginaFavoritaSeleccionada={ setPaginaFavoritaSeleccionada } />
      <Noticias paginaFavoritaSeleccionada={ paginaFavoritaSeleccionada }/>
      <TraductorHTML texto1="HTML" texto2="Resultado" />
    </Container>
  );
}

export default App;