import { useState } from 'react';
import { Container, Row, Col} from 'react-bootstrap';

function App() {

  const [etiquetas, setEtiquetas] = useState('');

  const handleChange = (e) => {
    setEtiquetas(e.target.value);
  }

  return (
<Container>
  <Row>
    <Col>          
      <h1>HTML</h1>
      <textarea rows="10" cols="50" name="etiquetas" onChange={e => handleChange(e)} type="text">{etiquetas}</textarea>
    </Col>
    <Col>
    <h1>Resultado</h1>      
      <div dangerouslySetInnerHTML={{__html: etiquetas}} />
    </Col>
  </Row>
</Container>    
  );
}

export default App;
