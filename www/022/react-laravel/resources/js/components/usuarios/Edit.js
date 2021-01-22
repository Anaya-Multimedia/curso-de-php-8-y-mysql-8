import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import { useHistory } from 'react-router-dom';


function Edit(){

  const history = useHistory();

  const { id } = useParams();

  const [usuario, setUsuario] = useState(
    {
      nombre: "",
      apellidos: "",
      direccion: "",
      correo: "",
      telefono: ""
    }
  )

  useEffect( () => {
    async function recuperarUsuario(){
      const url= `http://localhost:8001/api/usuarios/${id}`;
      const res = await axios.get(url)
      .then(response=> {return response.data })
      .catch(error=>{ return error; })
      if (res.success) {
        setUsuario(res.data);
      }
    }
    recuperarUsuario();
  },[])

  const notifyOk = (texto) => toast.success(texto, {
    position: "top-left",
    autoClose: 5000,
    hideProgressBar: false,
    closeOnClick: true,
    pauseOnHover: true,
    draggable: true,
    progress: undefined,
    });

    const notifyError = (texto) => toast.error(texto, {
      position: "top-left",
      autoClose: 5000,
      hideProgressBar: false,
      closeOnClick: true,
      pauseOnHover: true,
      draggable: true,
      progress: undefined,
      });
  
  const handleChange = (e) => {
    setUsuario({
      ...usuario,
      [e.target.name]: e.target.value
    })
  }

  const handleSubmit = (e) => {
    grabarUsuario();
    e.preventDefault();
  }

  const grabarUsuario = async () => {

    const url= `http://localhost:8001/api/usuarios/${id}`;
    const res = await axios.put(url,usuario)
    .then(response=> {return response.data })
    .catch(error=>{ return error; })

    if (res.success) {
      history.push('/usuarios/list');
      notifyOk(res.message);
    }
    else {
      notifyError(res.message);
    }
  }

  const { nombre, apellidos, direccion, correo, telefono } = usuario;

  return(
    <div className="container marketing">
    <hr className="featurette-divider"/>
    <h2>Editar Usuario</h2>

      <form onSubmit={e => handleSubmit(e)} method="post" action="http://localhost:8001/api/usuarios/update">
      <div className="row">
        <div className="col-md-6 mb-3">
          <label htmlFor="nombre">Nombre</label>
          <input type="text" className="form-control" placeholder="Nombre" name="nombre" value={nombre} onChange={e => handleChange(e)} />
        </div>
      </div>

      <div className="row">
        <div className="col-md-6 mb-3">
          <label htmlFor="apellidos">Apellidos</label>
          <input type="text" className="form-control" placeholder="Pérez" name="apellidos" value={apellidos} onChange={e => handleChange(e)} />
        </div>
      </div>

      <div className="row">
        <div className="col-md-6 mb-3">
          <label htmlFor="direccion">Dirección</label>
          <input type="text" className="form-control" placeholder="C\ San Cristóbal" name="direccion" value={direccion} onChange={e => handleChange(e)} />
        </div>
      </div>

      <div className="row">
        <div className="col-md-6 mb-3">
          <label htmlFor="correo">Correo electrónico</label>
          <input type="email" className="form-control" placeholder="ejemplo@ejemplo.com" name="correo" value={correo} onChange={e => handleChange(e)} />
        </div>
      </div>

      <div className="row">
        <div className="col-md-6 mb-3">
          <label htmlFor="phone">Teléfono</label>
          <input type="text" className="form-control" placeholder="666545554" name="telefono" value={telefono} onChange={e => handleChange(e)} />
        </div>
      </div>

      <div className="row">
        <div className="col-md-6 mb-3">
          <button className="btn btn-primary btn-block" type="submit">Enviar</button>
        </div>
      </div>
      </form>

    </div>
  )
}

export default Edit;