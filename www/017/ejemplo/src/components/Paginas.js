import { Form } from 'react-bootstrap';

export const Paginas = ({ paginasFavoritas, setPaginaFavoritaSeleccionada }) => {
    
    const handleChange = (e) => {
      setPaginaFavoritaSeleccionada(e.target.value);
    }

    return (
      <Form>
        <Form.Group>
          <Form.Label>Selecciona la página:</Form.Label>
          <Form.Control as="select" size="lg" onChange={ e => handleChange(e)} custom>
            {
              paginasFavoritas.map( (pagina, index) => (
                <option key={index}>{pagina}</option>
              ))
            }
          </Form.Control>
        </Form.Group>
      </Form>
    )
}