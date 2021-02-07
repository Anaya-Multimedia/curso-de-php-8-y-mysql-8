import React, { useState } from 'react'
import { Row, Col } from 'react-bootstrap';

export const TraductorHTML = ({ texto1, texto2 }) => {

    const [etiquetas, setEtiquetas] = useState('');

    const handleChange = (e) => {
      setEtiquetas(e.target.value);
    }

    return (
        <Row>
          <Col>          
            <h2>{texto1}</h2>
            <textarea rows="10" cols="50" name="etiquetas" value={etiquetas} onChange={e => handleChange(e)} type="text"></textarea>
          </Col>
          <Col>
            <h2>{texto2}</h2>
            <div dangerouslySetInnerHTML={{__html: etiquetas}} />    
          </Col>
        </Row>
    )
}
