import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { DetalleUsuario } from './DetalleUsuario';

function List(){

  const [ usuarios, setUsuarios ] = useState([]);
  const [ loading, setLoading ] = useState(false);

  useEffect( () => {
    async function recuperarUsuarios(){
      const url= "http://localhost:8001/api/usuarios/list";
      const res = await axios.get(url)
      .then(response=> {return response.data })
      .catch(error=>{ return error; })
      if (res.success) {
        setUsuarios(res.data);
      }
    }
    recuperarUsuarios();
  },[loading])

    return (
      <div className="container marketing">
      <hr className="featurette-divider"/>
      <h2>Listado de usuarios</h2>

        <div className="row featurette">        
        <table className="table">
          <thead className="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Correo</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            {
              usuarios.map( usuario => (
                <DetalleUsuario 
                  key={usuario.id}
                  usuario={usuario}
                  setLoading = {setLoading}
                  />
              ))
            }
          </tbody>
        </table>
      </div>
      </div>
      
    )
  }
  
  export default List;