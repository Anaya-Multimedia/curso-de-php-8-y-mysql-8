import React from 'react'
import { Link } from 'react-router-dom';
import { toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import * as Icon from 'react-bootstrap-icons';

export const DetalleUsuario = ({ usuario, setLoading }) => {

  const onClickDelete = async (id) => {
  setLoading(true);
  const url= `http://localhost:8002/api/usuarios/${id}`;
  const res = await axios.delete(url)
  .then(response=> {return response.data })
  .catch(error=>{ return error; })
  if (res.success) {
    toast.success(res.message, {
      position: "top-left",
      autoClose: 5000,
      hideProgressBar: false,
      closeOnClick: true,
      pauseOnHover: true,
      draggable: true,
      progress: undefined,
    });
  } else {
    toast.error(res.message, {
      position: "top-left",
      autoClose: 5000,
      hideProgressBar: false,
      closeOnClick: true,
      pauseOnHover: true,
      draggable: true,
      progress: undefined,
  });
  }
    setLoading(false);
  }

  const { id, nombre, apellidos, correo, telefono } = usuario;
  
  return (
    <tr>
      <td>{id}</td>
      <td>{nombre}</td>
      <td>{apellidos}</td>
      <td>{correo}</td>
      <td>{telefono}</td>
      <td>

        <Link to={`/usuarios/${id}`} className="btn btn-light"><Icon.PencilSquare />
        </Link>
        <a href="#" className="btn btn-danger" onClick={()=>onClickDelete(id)}> 
          <Icon.Trash /> 
        </a>
      </td>
    </tr>
  )
}
